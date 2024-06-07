<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscription;
use Illuminate\Validation\ValidationException;
use Exception;
use App\Mail\SubscriptionMail;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    //
    public function subscribe(Request $request)
    {
        try {

            $request->validate([
                'email' => 'required|email|unique:subscriptions,email',
            ]);

            Subscription::create([
                'email' => $request->email,
            ]);

            $subject = 'Subscription Confirmation';
            $message = 'You have successfully subscribed to receive our weather updates. We will send you all notifications at 7am every day.';
            Mail::to($request->email)->send(new SubscriptionMail($subject, $message));


            return response()->json(['message' => 'Subscribed successfully!']);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function unsubscribe(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:subscriptions,email',
            ]);

            Subscription::where('email', $request->email)->delete();

            $subject = 'Unsubscription Confirmation';
            $message = 'You have successfully unsubscribed from our weather updates.';
            Mail::to($request->email)->send(new SubscriptionMail($subject, $message));

            return response()->json(['message' => 'Unsubscribed successfully!'], 200);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
