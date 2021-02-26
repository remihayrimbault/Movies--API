<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function pokemons() {
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/?limit=151",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_COOKIE => "__cfduid=d0ba3b6b9c887b8da1b604da49a5e2c181614333108",
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}

	public function pokemon($name) {
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/".$name,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_COOKIE => "__cfduid=d0ba3b6b9c887b8da1b604da49a5e2c181614333108",
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}
}
