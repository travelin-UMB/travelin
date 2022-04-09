<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use voku\helper\HtmlDomParser;

class LandingPageController extends Controller
{
    
    public function index(Request $request){
        $html = file_get_contents("https://salsawisata.com/");
        $xpath_doc = new \DOMDocument();
        libxml_use_internal_errors(TRUE);

        if(!empty($html)){
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new \DOMXPath($xpath_doc);

            $cariJudul = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/div[1]/h3');
            $cariGambar = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/@data-bg');

            if($cariJudul -> length > 0){

                foreach($cariJudul as $judul){
                    $cariJudulList[] = array('judul' => $judul->nodeValue);
                }
                foreach($cariGambar as $gambar){
                    $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
                }

                $i = 0;
                foreach($cariJudul as $data){
                    $cariDataList[] = array(
                        'judul' => $cariJudulList[$i]["judul"],
                        'gambar' => $cariGambarList[$i]["gambar"],
                    );
                $i++;
                }
                
                $data = $cariDataList;
            }
        }
        return view('pages.landingpage.index',[
            'data' => $data
        ]);
    }

    public function city(Request $request){
        return view('pages.landingpage.feature_destination');
    }

    public function our_package(Request $request){
        $html = file_get_contents("https://salsawisata.com/paket-wisata-bali/1-hari/");
        $xpath_doc = new \DOMDocument();
        libxml_use_internal_errors(TRUE);

        if(!empty($html)){
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new \DOMXPath($xpath_doc);

            $cariJudul = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[1]/div/div[1]/h4');
            // $cariSubJudul = $xpath->query('/html/body/div[1]/div[1]/section/div/div/div[1]/ul/li/div/div[1]/div[2]/span/text()');
            $cariDeskripsi = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[2]/div/div[2]/div[2]/div[2]/ul');
            $cariHarga = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[2]/div/div[1]/h6');
            $cariGambar = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[1]/div/div[2]/span/img/@src');
            $cariUrl = $xpath->query('/html/body/div[1]/div[1]/section/div/div/div[1]/div/ul/li/a/@href');
            if($cariJudul -> length > 0){
                foreach($cariJudul as $judul){
                    $cariJudulList[] = array('judul' => $judul->nodeValue);
                }
                // foreach($cariSubJudul as $subjudul){
                //     $cariSubJudulList[] = array('subjudul' => $subjudul -> nodeValue);
                // }
                foreach($cariDeskripsi as $deskripsi){
                    $cariDeskripsiList[] = array('deskripsi' => $deskripsi -> nodeValue);
                }
                foreach($cariHarga as $harga){
                    $cariHargaList[] = array('harga' => $harga -> nodeValue);
                }
                foreach($cariGambar as $gambar){
                    $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
                }
                // dd($cariGambarList);
                $i = 0;
                foreach($cariJudul as $data){
                    $cariDataList[] = array(
                        'judul' => $cariJudulList[$i]["judul"],
                        // 'subjudul' => $cariSubJudulList[$i]["subjudul"],
                        'deskripsi' => $cariDeskripsiList[$i]["deskripsi"],
                        'harga' => $cariHargaList[$i]["harga"],
                        'gambar' => $cariGambarList[$i]["gambar"],
                        // 'url' => $url->nodeValue
                    );
                $i++;
                }
                $data = $cariDataList;
            }
        }
        return view('pages.landingpage.our_packages',[
            'data' => $data
        ]);

        
    }

    public function my_package(Request $request){
        return view('pages.landingpage.my_package');
    }

    public function package_detail($city, $name, $id){
        return view('pages.landingpage.detail_package');
    }

}
