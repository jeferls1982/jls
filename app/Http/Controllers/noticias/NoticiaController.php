<?php

namespace jlsonline\Http\Controllers\noticias;

use Illuminate\Http\Request;
use jlsonline\Http\Controllers\Controller;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NoticiaController extends Controller
{
    public function getNoticias(){
        $client = new Client();
        $response = $client->get('http://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=4efa43d19d3d472eb6c221614352df12');
        return $response->getBody()->getContents();
        
        
    }
}
