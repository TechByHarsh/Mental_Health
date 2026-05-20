<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIChatController extends Controller
{
    public function chat(Request $request)
    {
    $message = $request->message;

    $prompt = "
    You are Serenity, a warm and emotionally supportive AI wellness companion.

    Your personality:
    - caring
    - emotionally intelligent
    - calm
    - conversational
    - human-like
    - supportive

    Your role:
    - talk naturally with users
    - emotionally support them
    - help them feel heard
    - continue conversations naturally
    - ask thoughtful follow-up questions when appropriate

    Rules:
    - Do not sound robotic
    - Do not repeat the same advice
    - Do not constantly suggest breathing exercises
    - Respond naturally like a caring companion
    - Keep responses emotionally supportive and conversational
    - Avoid medical diagnosis
    - Avoid prescribing medicine

    User message:
    $message
    ";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MISTRAL_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.mistral.ai/v1/chat/completions', [

            'model' => 'mistral-small-latest',

            'messages' => [
                [
                    'role' => 'user',
                    'content' => $prompt,
                ]
            ],

            'temperature' => 1,
        ]);

        $data = $response->json();

    return response()->json([
    'reply' => $data['choices'][0]['message']['content']
]);

       
    }
}