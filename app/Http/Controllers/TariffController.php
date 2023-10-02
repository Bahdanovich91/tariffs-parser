<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class TariffController extends Controller
{
    public function get()
    {
        $client = new Client();
        $response = $client->get('https://moskva.mts.ru/personal/mobilnaya-svyaz/tarifi/vse-tarifi/mobile-tv-inet');
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $tariffs = $crawler->filter('.card.card__wrapper');
        $parsedTariffs = [];

        foreach ($tariffs as $tariffBlock) {
            $tariffCrawler = new Crawler($tariffBlock);

            $tariffName = $tariffCrawler->filter('.card-title')->text();
            $tariffPrice = $tariffCrawler->filter('.price-text')->text();
            $tariffDescription = $tariffCrawler->filter('.card-description')->text();

            $parsedTariffs[] = [
                'name' => $tariffName,
                'price' => $tariffPrice,
                'description' => $tariffDescription,
            ];
        }
        dd($parsedTariffs);
    }
}
