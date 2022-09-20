<?php

declare(strict_types=1);

namespace App\Actions;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class SendEmailMessages
{
    public static function run(array $data): void
    {
        foreach (config('mail.recipients') as $to) {
            Mail::to($to)->send(
                new MessageReceived(...$data)
            );
        }
    }
}