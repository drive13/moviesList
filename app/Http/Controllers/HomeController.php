<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $apiURL = 'http://api.themoviedb.org/3/trending/all/week?api_key=9802259b33ec67537d82ea6557259e6a';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $apiURL);

        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody['results']);

        return view('home', [
            'data' => $responseBody['results'],
            'kategori' => MasterKategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apiURL = 'http://api.themoviedb.org/3/movie/' . $id  . '?api_key=9802259b33ec67537d82ea6557259e6a';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $apiURL);

        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody);

        return view('movie_details', [
            'data' => $responseBody,
            'kategori' => MasterKategori::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Movie Kategori
     */
    public function kategori($param)
    {
        $apiURL = 'http://api.themoviedb.org/3/movie/' . $param  . '?api_key=9802259b33ec67537d82ea6557259e6a';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $apiURL);

        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);

        // dd($responseBody['results']);

        return view('home', [
            'data' => $responseBody['results'],
            'kategori' => MasterKategori::all(),
        ]);
    }
}
