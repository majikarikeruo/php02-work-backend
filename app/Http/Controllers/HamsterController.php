<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamster;
use DateTime;


class HamsterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hamsters = Hamster::all();
        return response()->json(
            $hamsters
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $hamster = new Hamster;
        $hamster->name = $request->name;
        $hamster->birthday = $request->birthday;
        $hamster->save();

        return response()->json(['message' => 'ハムスターの登録が完了しました。'], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $hamster = Hamster::find($id);
        $birthday = new DateTime($hamster->birthday);
        $today = new DateTime();

        // 日付の差を計算
        $diff = $birthday->diff($today);

        // 年齢と月数を取得
        $ageYears = $diff->y;
        $ageMonths = $diff->m;

        // 結果を表示

        $hamster->birthday = $ageYears . "歳 " . $ageMonths . "ヶ月";
        return response()->json(
            $hamster
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
