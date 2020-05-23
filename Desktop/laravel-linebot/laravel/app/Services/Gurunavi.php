<?php

namespace App\Services;

use GuzzleHttp\Client;

class Gurunavi
{
  private const RESTAURANTS_SEARCH_API_URL = 'https://api.gnavi.co.jp/RestSearchAPI/v3/';

    public function searchRestaurants(string $word):array
    // このように記述することで、searchRestaurantsメソッドの戻り値は配列(array)である、ということが宣言できます
    {
      $client = new Client();
      $response = $client
          ->get(self::RESTAURANTS_SEARCH_API_URL, [
            // クラス内のコードで、自クラス定数を参照する場合はself::定数名とする(selfは、自クラスを指す) 型宣言
              'query' => [
                  'keyid' => env('GURUNAVI_ACCESS_KEY'),
                  'freeword' => str_replace(' ', ',', $word),
              ],
              'http_errors' => false,
          ]);
          
      return json_decode($response->getBody()->getContents(), true);
      // json_decodeの返り値を連想配列で受け取るためには、第二引数をTRUEで指定する必要がある
    }
}