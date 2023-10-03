<?php

namespace App\Services;

use App\Models\Tariff;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class ParseTariffsService
{
    public function parseTariffs(): array
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

        return $parsedTariffs;
    }

    public function store(): void
    {
        $tariffsData = $this->parseTariffs();

        foreach ($tariffsData as $tariffData) {
            $tariff = new Tariff([
                'name' => $tariffData['name'],
                'price' => $tariffData['price'],
                'description' => $tariffData['description'],
            ]);

            $tariff->save();
        }
    }
}
