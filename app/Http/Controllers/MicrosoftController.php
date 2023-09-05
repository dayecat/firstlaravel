<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;
// 一定要有這行
use Illuminate\Support\Facades\DB;

class MicrosoftController extends Controller
{
    // Route::get('/microsoft',[MicrosoftController::class,'microsoft']);
    // 這裡的 microsoft() 要跟class,'microsoft' 一樣
    public function index()
    {
        // $news = DB::table('news')->get();

        // find) 找ID
        // get() 把符合條件的資料，以collection 顯示
        // all() 全部
        // take()拿幾筆
        // $news = News::all();

        // $news = News::where('title', '=', '隆重推出新版 Bing')->get();

        // dd($news);
        $q1 = News::take(3)->get();

        $q2 = News::orderBy('id', 'desc')->take(3)->get();

        $news = News::inRandomOrder()->take(4)->get();


        // foreach($news as $key => $item ) {
        //     dump($item);
        //     dump($item->id);
        // }
        // dd();

        // 寫法一
        // "key"(blade用到的變數名稱(記得$字號)) =>"value"(key的數值)
        return view('microsoft.microsoft',[
            'news123' => $news,
            'data2' =>$q2,
        ]);

        // 寫法二 compact 幫我們打包變數，意思等同寫法一 ['news' => $news, 'q2' => $q2]
        return view('microsoft.microsoft', compact('news','q2'));

        // return view('microsoft.microsoft', ['news' => $news]);

        // return view('microsoft.microsoft',compact('news', 'q2'));
    }
}
