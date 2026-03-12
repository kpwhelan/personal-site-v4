<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Notifications\ContactFormDiscordNotification;
use App\Notifications\ContactFormErrorDiscordNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactMessagesController extends Controller
{
    public function post(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            $message = new ContactMessage();
            $message->name = $validated['name'];
            $message->email = $validated['email'];
            $message->phone = $validated['phone'] ?? '';
            $message->message = $validated['message'];
            $message->save();
        } catch (\Throwable $e) {
            Log::error('Contact form save failed', [
                'error' => $e->getMessage(),
            ]);

            (new ContactFormErrorDiscordNotification(
                $message->name,
                $message->email,
                $message->phone,
                $e->getMessage()
            ))->toDiscord(null);

            return back()->withErrors([
                'form' => 'Uh oh, something went wrong on our end. Please email me directly at kevin@kevinwhelandev.com.',
            ]);
        }

        try {
            (new ContactFormDiscordNotification(
                $message->name,
                $message->email,
                $message->phone,
                $message->message
            ))->toDiscord(null);
        } catch (\Throwable $e) {
            Log::warning('Discord notification failed', [
                'error' => $e->getMessage(),
            ]);
        }

        return back()->with('success', 'Message sent successfully!');
    }
}
