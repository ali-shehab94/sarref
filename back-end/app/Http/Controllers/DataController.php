<?php

namespace App\Http\Controllers;
use Goutte\Client;

use Illuminate\Http\Request;


class DataController extends Controller
{
    public function scrape()
    {
        //create a goutte client
        $client = new Client();
        //scrape page and filter data
        $crawler = $client->request('GET', 'https://lbprate.com/');
        $elements = $crawler->filter('.h-100')->text();
        //split the text to an array so I can chose an constant index
        $scrapedString = explode(' ', $elements);
        return $scrapedString[18];
    }
}
