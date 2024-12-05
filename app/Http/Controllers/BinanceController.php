<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BinanceController extends Controller
{
    private $apiBaseUrl = 'https://api.binance.com/api/v3';

    /**
     * Get the current price of a cryptocurrency pair.
     *
     * @param string $symbol Cryptocurrency pair symbol (e.g., BTCUSDT)
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPrice($symbol)
    {
        $url = $this->apiBaseUrl . '/ticker/price';
        
        // Call Binance API
        $response = Http::get($url, [
            'symbol' => $symbol,
        ]);

        // Handle response
        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'data' => $response->json(),
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Failed to fetch data from Binance API.',
        ], $response->status());
    }
}
