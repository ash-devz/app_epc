<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class EPController extends Controller
{

  public function search(Request $request){

    $addresses = Http::withBasicAuth(env('EPC_USERNAME'), env('EPC_PASSWORD'))->withHeaders([
      'Accept' => 'application/json'
    ])->get('https://epc.opendatacommunities.org/api/v1/domestic/search', [
      'postcode' => $request->get('address'),
    ]);
    if($addresses == ''){
      $addresses = Http::withBasicAuth(env('EPC_USERNAME'), env('EPC_PASSWORD'))->withHeaders([
        'Accept' => 'application/json'
      ])->get('https://epc.opendatacommunities.org/api/v1/domestic/search', [
        'address' => $request->get('address'),
      ]);
    }
    if($addresses->successful()){
      return view('search')->with(['query'=>$request->get('address'),'addresses'=>$addresses]);  
    }
    else{
      abort(404);
    }    
  }

  public function view($lmKey){
    $certificate = Http::withBasicAuth(env('EPC_USERNAME'), env('EPC_PASSWORD'))->withHeaders([
      'Accept' => 'application/json'
    ])->get('https://epc.opendatacommunities.org/api/v1/domestic/certificate/'.$lmKey);

    $recommendations = Http::withBasicAuth(env('EPC_USERNAME'), env('EPC_PASSWORD'))->withHeaders([
      'Accept' => 'application/json'
    ])->get('https://epc.opendatacommunities.org/api/v1/domestic/recommendations/'.$lmKey);

    if($certificate->successful()){
      return view('view')->with(['recommendations'=>$recommendations,'certificate'=>$certificate['rows'][0]]);
    }
    else{
      abort(404);
    }
  }

  public function compare($postcode){
    $postcode = base64_decode($postcode);
    if(strlen($postcode)==6){
      $postcode = substr($postcode,0,-1);
    }
    else{
      $postcode = substr($postcode,0,-2);
    }

    $addresses = Http::withBasicAuth(env('EPC_USERNAME'), env('EPC_PASSWORD'))->withHeaders([
      'Accept' => 'application/json'
    ])->get('https://epc.opendatacommunities.org/api/v1/domestic/search', [
      'postcode' => $postcode,
      'size' => 10,
      'from' => 10
    ]);

    if($addresses->successful()){
      if(isset($addresses['rows'])) {
        $count = count($addresses['rows']);
        $current_energy = 0;
        foreach($addresses['rows'] as $property){
          $current_energy += $property['current-energy-efficiency'];
        }
        $av_energy = $current_energy / $count; 
        return view('compare')->with(['av_energy'=>$av_energy, 'addresses'=>$addresses]);
      }
      else{
        abort(404);
      }
    }
    else{
      abort(404);
    }
  }
}
