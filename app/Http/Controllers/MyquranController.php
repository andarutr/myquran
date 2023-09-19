<?php

namespace App\Http\Controllers;


class MyquranController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://open-api.my.id/api/quran/surah')->getBody()->getContents();
        $data['quran'] = json_decode($response);

        return view('myquran.index', $data);
    }
    
    public function detail($id)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://open-api.my.id/api/quran/surah/'.$id)->getBody()->getContents();
        $data['quran'] = json_decode($response);

        return view('myquran.detail', $data);
    }
}
