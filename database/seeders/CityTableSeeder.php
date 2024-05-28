<?php

namespace Database\Seeders;

use App\Models\City;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => config('app.rajaongkir_api_key'),
            ],

        ]);

        $body = json_decode($response->getBody(), true);
        $results = $body['rajaongkir']['results'];

        foreach ($results as $result) {
            City::create([
                'id' => $result['city_id'],
                'province_id' => $result['province_id'],
                'type' => $result['type'],
                'name' => $result['city_name'],
                'postal_code' => $result['postal_code'],
            ]);
        }
    }
}
