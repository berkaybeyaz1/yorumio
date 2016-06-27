<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Series;
use App\Seasons;
use App\Parts;
class FrontController extends Controller
{
    public function index()
    {
        $serieses = Series::orderBy('id','DESC')->get();
        return view('front.index')->with(['serieses' => $serieses]);
    }

    public function series($id)
    {
        $id = slug($id);
        $series = Series::where('slug','=',$id)->with(['seasons','parts'])->first();
        $part = Parts::where('series_id','=',$series->id)->get();
        $season = [];
        return view('front.series')->with(['series' => $series, 'season' => $season,'part' => $part]);
    }

    public function apiSearch(Request $request)
    {
        $this->validate($request, [
            'keywords' => 'required'
        ]);
        $keywords = $request->input('keywords');
        $series = Series::all();
        $searchSeries = new Collection();
        foreach ($series as $seri){
            if(str_contains(strtolower($seri->title), strtolower($keywords))){
                $searchSeries->add($seri);
            }
        }
        return response()->json(['series' => $searchSeries]);

    }
}
