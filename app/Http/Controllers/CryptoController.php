<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use GuzzleHttp\Client;
// use GuzzleHttp\Exception\RequestException;

class CryptoController extends Controller
{
    /**
     * Get the current price of a cryptocurrency.
     *
     * @param string $symbol
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPrice($symbol)
    {
        // Base URL for CoinGecko API
        $url = "https://api.coingecko.com/api/v3/simple/price?ids={$symbol}&vs_currencies=usd";
        
        // Call the CoinGecko API using Laravel's HTTP client (Guzzle)
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();
            // Return the price data from the response
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch data from CoinGecko',
            ], 500);
        }
    }
}
