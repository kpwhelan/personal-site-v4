<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class ContactFormDiscordNotification extends Notification
{
    use Queueable;

    public function __construct(
        protected string $name,
        protected string $email,
        protected string $phone,
        protected string $message,
        protected array $photoUrls = [],
    ) {}

    public function via(object $notifiable): array
    {
        // You're not actually using Laravel's notification channels here,
        // since you call ->toDiscord(null) manually.
        // Returning anything here doesn't matter in your current usage.
        return ['discord'];
    }

    public function toDiscord($notifiable = null): void
    {
        $content = "**New Contact Form Submission**\n"
            . "**Name:** {$this->name}\n"
            . "**Email:** {$this->email}\n"
            . "**Phone:** " . ($this->phone ?: 'N/A') . "\n"
            . "**Message:** {$this->message}";

        // Discord hard limit: 2000 chars for content.
        // If you include lots of URLs, you can exceed it quickly.
        $content = $this->truncateDiscordContent($content, 1900);

        $payload = [
            'content' => $content,
        ];

        Http::post(config('services.discord.webhook_url'), $payload);
    }

    private function truncateDiscordContent(string $content, int $max): string
    {
        if (mb_strlen($content) <= $max) {
            return $content;
        }

        return mb_substr($content, 0, $max - 3) . '...';
    }
}
