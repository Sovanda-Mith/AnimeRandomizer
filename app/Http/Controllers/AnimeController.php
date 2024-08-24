<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class AnimeController extends Controller
{
    public function welcome()
    {
        try {
            $response = Http::withHeader(
                'X-MAL-CLIENT-ID',
                env('MAL_CLIENT_ID')
            )->get('https://api.myanimelist.net/v2/anime/ranking?ranking_type=all&limit=10');

            if ($response->successful()) {
                return Inertia::render('Welcome', [
                    'canLogin' => Route::has('login'),
                    'canRegister' => Route::has('register'),
                    'animes' => $response->json()
                ]);
            }
        } catch (\Exception $e) {
            return Inertia::render('Welcome', [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
                'errors' => 'Message' . $e->getMessage()
            ]);
        }
    }
}
