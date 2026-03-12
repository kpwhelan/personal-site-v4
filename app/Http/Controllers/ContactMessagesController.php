<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Notifications\ContactFormDiscordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactMessagesController extends Controller
{
    public function post(Request $request)
    {

    dd("hey friends!");
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            $message = new ContactMessage();
            $message->name = $validated['name'];
            $message->email = $validated['email'];
            $message->phone = $validated['phone'] ?? '';
            $message->message = $validated['message'];
            $message->photo_paths = $photoPaths;

            $message->save();
        } catch (\Throwable $e) {
            Log::error('Contact form save failed', [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'error' => 'Uh oh, something went wrong on our end - please give us a call at 978-877-9784',
            ], 500);
        }

        try {
            (new ContactFormDiscordNotification(
                $message->name,
                $message->email,
                $message->phone,
                $message->message
            ))->toDiscord(null);
        } catch (\Throwable $e) {
            Log::warning('Discord notification failed', ['error' => $e->getMessage()]);
        }

        return response()->json(['status' => 'Message sent successfully!'], 200);
    }
}
