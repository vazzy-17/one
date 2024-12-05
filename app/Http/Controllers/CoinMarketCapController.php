<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CoinMarketCapController extends Controller
{
    public function getPrice($symbol)
    {
        // API Key CoinMarketCap Anda
        $apiKey = env('COINMARKETCAP_API_KEY'); // Pastikan API Key disimpan di .env

        // Menggunakan Guzzle atau HTTP Client Laravel untuk memanggil API
        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => $apiKey,
            'Accept' => 'application/json',
        ])->get("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest", [
            'symbol' => $symbol,
            'convert' => 'USD', // Mengonversi ke USD
        ]);

        // Periksa jika response berhasil
        if ($response->successful()) {
            $data = $response->json();
            return response()->json([
                'status' => 'success',
                'data' => $data['data'][0] ?? null, // Menampilkan data pertama dari array
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch data from CoinMarketCap',
            ], 500);
        }
    }
}
