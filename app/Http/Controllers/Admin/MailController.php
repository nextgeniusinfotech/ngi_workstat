<?php

namespace App\Http\Controllers\Admin;

use App\Mail\YourMailClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        // Define your email recipients
        $recipients = ['pramodpsawant18@gmail.com', 'user2@example.com', 'user3@example.com'];

        // Iterate through recipients and send the email
        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new YourMailClass());
        }

        return "Email sent successfully!";
    }
}
