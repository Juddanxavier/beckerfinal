<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::send([], [], function ($message) use ($validated) {
                $message->to('info@becker-india.com')
                    ->subject('New Contact Form Submission')
                    ->setBody(
                        "Name: {$validated['name']}<br>" .
                        "Email: {$validated['email']}<br>" .
                        "Phone: {$validated['phone']}<br>" .
                        "Company: {$validated['company']}<br>" .
                        "Message:<br>" . nl2br(e($validated['message'])),
                        'text/html'
                    );
                $message->replyTo($validated['email']);
            });
            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());
            return back()->with('error', 'Sorry, there was a problem sending your message. Please try again later.');
        }
    }
}
