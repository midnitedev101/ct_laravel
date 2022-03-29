<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    //
    function getSubmit(Request $req) {
        $params = array();
        parse_str($req, $params);
        // Log::debug($req);
        // Log::debug($req->stock_quantity);
        $val = $req->stock_quantity * $req->price_per_item;
        Log::debug($params);
        // $product_name = $params;
        return view('coalition-form', [
            'results' => $params,
          ]);
    }
}
