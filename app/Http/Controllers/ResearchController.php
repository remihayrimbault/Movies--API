<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function research($search) {
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "http://www.omdbapi.com/?apikey=db191226&type=movie&s=".$search,
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
            $response = json_decode($response);

            if ($response -> Response == "False") {
                return view('error');
            }
            else {
                return view('research', [
                    'Search' => $response
                ]);
            }
		}
	}
}
