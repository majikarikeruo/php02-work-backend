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

        foreach ($hamsters as $hamster) {
            $birthday = new DateTime($hamster->birthday);
            $today = new DateTime();

            // 日付の差を計算
            $diff = $birthday->diff($today);

            // 年齢と月数を取得
            $ageYears = $diff->y;
            $ageMonths = $diff->m;

            $hamster->birthday = $ageYears . "歳 " . $ageMonths . "ヶ月";
        }



        return response()->json(
            $hamsters,
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $hamster = new Hamster;

        $hamster->fill($request->all());
        $res = $hamster->save();

        if ($res) {
            return response()->json(['message' => 'ハムスターの登録が完了しました。'], 200);
        } else {
            return response()->json(['message' => 'ハムスターの登録に失敗しました。'], 500);
        }
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
        $hamster = Hamster::find($id);
        $hamster->fill($request->all());
        $res = $hamster->save();

        var_dump($hamster, $id, $res);

        if ($res) {
            return response()->json(['message' => 'ハムスターの更新が完了しました。'], 200);
        } else {
            return response()->json(['message' => 'ハムスターの更新に失敗しました。'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
