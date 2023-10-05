<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions = Auth::user()->conditions;

        return view('conditions.index', compact('conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conditions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'score' => 'required',
        ]);

        //APIから天気と気圧を取得
        $API_KEY = config('services.openweathermap.key');
        $base_url = config('services.openweathermap.url');
        $city = 'Tokyo';

        $url = "$base_url?units=metric&q=$city&lang=fr&APPID=$API_KEY";
        
        // 接続
        $client = new Client();
        $response = $client->request('GET', $url);

        $weather_data = $response->getBody();
        $weather_data = json_decode($weather_data, true);

        //テーブルへ書き込み
        $condition = new Condition();
        $condition->user_id = Auth::id();
        $condition->score = $request->input('score');
        $condition->comment = $request->input('comment');
        $condition->filled_date = date('Y-m-d');
        $condition->weather = $weather_data["weather"][0]["main"];
        $condition->pressure = $weather_data["main"]["pressure"];
        $condition->save();

        return redirect()->route('conditions.index')->with('flash_message', '登録が完了しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit(Condition $condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        //
    }
}
