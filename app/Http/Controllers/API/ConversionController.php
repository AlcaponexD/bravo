<?php

namespace App\Http\Controllers\API;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConversionController extends Controller
{
    function show(Request $request)
    {
        $rates = ExchangeRate::where('to',$request->only('to'))->where('from',$request->only('from'))->first();
        if($rates){

            $total = floatval($rates->value) * floatval($request->input('amount'));
            $amount = number_format($total,'2','.','.');
            return response(['amount' => "$amount $rates->from"]);
        }
        return response()->json(['erro' => 'Não foi possivel converter'],422);
    }
}
