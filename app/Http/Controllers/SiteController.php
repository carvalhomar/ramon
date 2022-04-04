<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SiteController extends Controller
{
    public function index(Request $request){
      //die($request->getClientIp());
      Log::channel("ips")->info('Acesso pelo IP: '.$request->getClientIp());

      echo view('page.index');
    }

    public function ips(Request $request){
      Log::channel("ips")->info('Acesso pelo IP: '.$request->getClientIp());

      $handle = fopen('../storage/logs/ips.log', "r");
      if ($handle) {
        while (!feof($handle)) {
            $linha = fgets($handle);
            if ($linha==null) break;
            echo $linha.'<br />';
        }
    fclose($handle);
  }

    }

}
