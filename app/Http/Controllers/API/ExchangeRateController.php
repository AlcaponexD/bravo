<?php

namespace App\Http\Controllers\API;

use App\Models\ExchangeRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ExchangeRate as Exc;
use App\Http\Requests\ExchangeRateUpdate as ExcUp;

class ExchangeRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = ExchangeRate::all();

        return response()->json($rates);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Exc $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;
        $rates = ExchangeRate::create($data);

        return response()->json($rates);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rate = ExchangeRate::findOrFail($id);

        return response()->json($rate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rate = ExchangeRate::findOrFail($id);
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;
        $rate->update($data);

        return response()->json($rate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rate = ExchangeRate::findOrFail($id);
        $rate->delete();

        return response()->json(['message' => 'deletado com sucesso']);
    }
}
