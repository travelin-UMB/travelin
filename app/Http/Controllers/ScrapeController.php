<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use voku\helper\HtmlDomParser;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    public function scrape(Request $request)
    {
        $i = 8;
        $url = [
            "https://indonesiatrip.id/paket-wisata/",
        ];
        
        for ($x=2; $x <= $i;$x++) {
         $url[]= "https://indonesiatrip.id/paket-wisata/page/{$x}";
        }        

        // dd($url);
        
        $i = 1;
        foreach ($url as $url_items) {
            if($i==1){
                $client = new Client();
                $response = $client->request(
                    'GET',
                    $url_items       
                );

                $response_status_code = $response->getStatusCode();
                $html = $response->getBody()->getContents();
                $data = [];
                
                if($response_status_code==200){
                    $dom = HtmlDomParser::str_get_html( $html );
                    $data['title'] = $dom->find('div[class="post_title"]')->text;
                    $data['date'] = $dom->find('span[class="post_date"]')->text;
                    $data['description'] = $dom->find('div[class="description"]')->text;
                    $data['rating'] = $dom->find('div[class="star-rating"]')->text;
                    $data['price'] = $dom->find('span[class="price"]')->text;
                    foreach ($dom->find('img') as $meta) {
                        if ($meta->hasAttribute('data-lazy-src')) {
                            $data_attribute[] = $meta->getAttribute('data-lazy-src');
                        }
                    }
                }
            }
            $i++;
        }
        return response()->json($data);     
    }
}
