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
            $cariUrl = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/div[2]/a/@href');

            if($cariJudul -> length > 0){

                foreach($cariJudul as $judul){
                    $cariJudulList[] = array('judul' => $judul->nodeValue);
                }
                foreach($cariGambar as $gambar){
                    $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
                }
                foreach($cariUrl as $url){
                    $cariUrlList[] = array('url' => $url -> nodeValue);
                }

                $i = 0;
                foreach($cariJudul as $data){
                    $url = $cariUrlList[$i]["url"];
                    $url_wst_city = substr($url, strpos($url, "com/") + 4);
                    $cariDataList[] = array(
                        'judul' => $cariJudulList[$i]["judul"],
                        'gambar' => $cariGambarList[$i]["gambar"],
                        'url' => $url_wst_city,
                    );
                $i++;
                }
                
                $data = $cariDataList;
            }

            $cariJudulWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[2]/div/div/div/div/div[3]/h4'); 
            $cariPriceWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[2]/div/div/div/div/div[1]/p/strong'); 
            $cariImageWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[2]/div/div/div/div/@data-bg'); 
            $cariDestinationWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[2]/div/div/div/div/div[2]/ul');
            $cariUrlWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[2]/div/div/div/div/div[4]/a/@href');
            
            if($cariJudulWisata -> length > 0){

                foreach($cariJudulWisata as $judulWst){
                    $cariJudulWstList[] = array('judul_wst' => $judulWst->nodeValue);
                }

                foreach($cariDestinationWisata as $destWst){
                    $cariDestlWstList[] = array('dest_wst' => $destWst->nodeValue);
                }

                // dd($cariDestlWstList);

                foreach($cariImageWisata as $gambarWst){
                    $cariGambarWstList[] = array('gambar_wst' => $gambarWst->nodeValue);
                }

                foreach($cariPriceWisata as $priceWst){
                    $cariPriceWstList[] = array('price_wst' => $priceWst->nodeValue);
                }

                foreach($cariUrlWisata as $urlWst){
                    $cariUrlWstList[] = array('url_wst' => $urlWst->nodeValue);
                }

                $i_wst = 0;
                foreach($cariJudulWisata as $data_wst){
                    $url = $cariUrlWstList[$i_wst]["url_wst"];
                    $url_wst = substr($url, strpos($url, "com/") + 4);
                    $cariDataWstList[] = array(
                        'judul_wst' => $cariJudulWstList[$i_wst]["judul_wst"],
                        'gambar_wst' => $cariGambarWstList[$i_wst]["gambar_wst"],
                        'price_wst' => $cariPriceWstList[$i_wst]["price_wst"],
                        'dest_wst' => $cariDestlWstList[$i_wst]["dest_wst"],
                        'url_wst' => $url_wst,
                    );
                   
                $i_wst++;
                }
                $dataWst = $cariDataWstList;

            }

        }
        return view('pages.landingpage.index',[
            'data' => $data,
            'data_wst' => $dataWst
        ]);
    }

    public function city(Request $request){
        $html = file_get_contents("https://salsawisata.com/");
        $xpath_doc = new \DOMDocument();
        libxml_use_internal_errors(TRUE);

        if(!empty($html)){
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new \DOMXPath($xpath_doc);

            $cariJudul = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/div[1]/h3');
            $cariGambar = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/@data-bg');
            $cariUrl = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div[2]/div/div/div/div/div[2]/a/@href');

            if($cariJudul -> length > 0){

                foreach($cariJudul as $judul){
                    $cariJudulList[] = array('judul' => $judul->nodeValue);
                }
                foreach($cariGambar as $gambar){
                    $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
                }
                foreach($cariUrl as $url){
                    $cariUrlList[] = array('url' => $url -> nodeValue);
                }

                $i = 0;
                foreach($cariJudul as $data){
                    $url = $cariUrlList[$i]["url"];
                    $url_wst_city = substr($url, strpos($url, "com/") + 4);
                    $cariDataList[] = array(
                        'judul' => $cariJudulList[$i]["judul"],
                        'gambar' => $cariGambarList[$i]["gambar"],
                        'url' => $url_wst_city,
                    );
                $i++;
                }
                
                $data = $cariDataList;
            }
        }
        return view('pages.landingpage.feature_destination',[
            'data' => $data
        ]);
    }

    public function our_package($url){
        
        $url_wst = "https://salsawisata.com/" . $url;
        $html = file_get_contents($url_wst);
        $xpath_doc = new \DOMDocument();
        libxml_use_internal_errors(TRUE);

        if(!empty($html)){
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new \DOMXPath($xpath_doc);


            $cariJudulWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/div[3]/h4'); 
            $cariPriceWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/div[1]/p/strong'); 
            $cariImageWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/@data-bg'); 
            $cariDestinationWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/div[2]/ul'); 
            $cariDestinationWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/div[2]/ul'); 
            $cariUrlWisata = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[2]/div/div/div/div/div/div/div[4]/a/@href');

            if($cariJudulWisata -> length > 0){

                foreach($cariJudulWisata as $judulWst){
                    $cariJudulWstList[] = array('judul_wst' => $judulWst->nodeValue);
                }

                foreach($cariDestinationWisata as $destWst){
                    $cariDestlWstList[] = array('dest_wst' => $destWst->nodeValue);
                }

                // dd($cariDestlWstList);

                foreach($cariImageWisata as $gambarWst){
                    $cariGambarWstList[] = array('gambar_wst' => $gambarWst->nodeValue);
                }

                foreach($cariPriceWisata as $priceWst){
                    $cariPriceWstList[] = array('price_wst' => $priceWst->nodeValue);
                }

                foreach($cariUrlWisata as $urlWst){
                    $cariUrlWstList[] = array('url_wst' => $urlWst->nodeValue);
                }

                $i_wst = 0;
                foreach($cariJudulWisata as $data_wst){
                    $url = $cariUrlWstList[$i_wst]["url_wst"];
                    $url_wst = substr($url, strpos($url, "com/") + 4);
                    $cariDataWstList[] = array(
                        'judul' => $cariJudulWstList[$i_wst]["judul_wst"],
                        'gambar' => $cariGambarWstList[$i_wst]["gambar_wst"],
                        'harga' => $cariPriceWstList[$i_wst]["price_wst"],
                        'deskripsi' => $cariDestlWstList[$i_wst]["dest_wst"],
                        'url_wst' => $url_wst,
                    );
                   
                $i_wst++;
                }
                $data = $cariDataWstList;

            }

        }

        return view('pages.landingpage.our_packages',[
            'data' => $data
        ]);

        // if(!empty($html)){
        //     $xpath_doc -> loadHTML($html);
        //     libxml_clear_errors();
        //     $xpath = new \DOMXPath($xpath_doc);

        //     $cariJudul = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[1]/div/div[1]/h4');
        //     // $cariSubJudul = $xpath->query('/html/body/div[1]/div[1]/section/div/div/div[1]/ul/li/div/div[1]/div[2]/span/text()');
        //     $cariDeskripsi = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[2]/div/div[2]/div[2]/div[2]/ul');
        //     $cariHarga = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[2]/div/div[1]/h6');
        //     $cariGambar = $xpath->query('//*[@id="post-801"]/div/div[3]/div/div[1]/div/div/div[1]/div/div[2]/span/img/@src');
        //     $cariUrl = $xpath->query('/html/body/div[1]/div[1]/section/div/div/div[1]/div/ul/li/a/@href');
        //     if($cariJudul -> length > 0){
        //         foreach($cariJudul as $judul){
        //             $cariJudulList[] = array('judul' => $judul->nodeValue);
        //         }
        //         // foreach($cariSubJudul as $subjudul){
        //         //     $cariSubJudulList[] = array('subjudul' => $subjudul -> nodeValue);
        //         // }
        //         foreach($cariDeskripsi as $deskripsi){
        //             $cariDeskripsiList[] = array('deskripsi' => $deskripsi -> nodeValue);
        //         }
        //         foreach($cariHarga as $harga){
        //             $cariHargaList[] = array('harga' => $harga -> nodeValue);
        //         }
        //         foreach($cariGambar as $gambar){
        //             $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
        //         }
        //         // dd($cariGambarList);
        //         $i = 0;
        //         foreach($cariJudul as $data){
        //             $cariDataList[] = array(
        //                 'judul' => $cariJudulList[$i]["judul"],
        //                 // 'subjudul' => $cariSubJudulList[$i]["subjudul"],
        //                 'deskripsi' => $cariDeskripsiList[$i]["deskripsi"],
        //                 'harga' => $cariHargaList[$i]["harga"],
        //                 'gambar' => $cariGambarList[$i]["gambar"],
        //                 // 'url' => $url->nodeValue
        //             );
        //         $i++;
        //         }
        //         $data = $cariDataList;
        //     }
        // }


        
    }

    public function my_package(Request $request){
        return view('pages.landingpage.my_package');
    }

    public function package_detail($url, $url_sub){

        $url_dom = "https://salsawisata.com/" . $url . "/" . $url_sub;
        $html = file_get_contents($url_dom);
        $xpath_doc = new \DOMDocument();
        libxml_use_internal_errors(TRUE);
        $url_paket = $url . "/" . $url_sub;
        

        if(!empty($html)){
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new \DOMXPath($xpath_doc);

            $cariJudul = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[1]/div/div[1]/h4');
            $cariDeskripsi = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[2]/div/div[2]/div[2]/div[2]/ul');
            $cariItenary = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[2]/div/div[2]/div[2]/div[6]/ul');
            $cariHarga = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[2]/div/div[1]/h6');
            $cariGambar = $xpath->query('/html/body/div[1]/div[2]/main/div/section/div/div/div[3]/div/div[1]/div/div/div[1]/div/div[2]/span/img/@src');
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
                foreach($cariItenary as $itenary){
                    $cariItenaryList[] = array('itenary' => $itenary -> nodeValue);
                }
                foreach($cariHarga as $harga){
                    $harga_format = $harga -> nodeValue;
                    $harga_format_rv = str_replace('Harga Mulai : Rp ', '', $harga_format);
                    $harga_format_rv_dot = str_replace('.', '', $harga_format_rv);
                    $cariHargaList[] = array('harga' => $harga -> nodeValue);
                    $cariHargaFormatList[] = array('harga_format' => $harga_format_rv_dot);
                }
                foreach($cariGambar as $gambar){
                    $cariGambarList[] = array('gambar' => $gambar -> nodeValue);
                }
                $i = 0;
                foreach($cariJudul as $data){
                    $cariDataList[] = array(
                        'judul' => $cariJudulList[$i]["judul"],
                        'deskripsi' => $cariDeskripsiList[$i]["deskripsi"],
                        'itenary' => $cariItenaryList[$i]["itenary"],
                        'harga' => $cariHargaList[$i]["harga"],
                        'harga_format' => $cariHargaFormatList[$i]["harga_format"],
                        'gambar' => $cariGambarList[$i]["gambar"],
                    );
                $i++;
                }
                $data = $cariDataList;

            }
            
        }

        return view('pages.landingpage.detail_package',[
            'data' => $data[0],
            'paket_url' => $url_paket,
        ]);
    }

}
