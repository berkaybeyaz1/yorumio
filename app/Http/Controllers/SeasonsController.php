<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Series;
use App\Parts;
use App\Seasons;
use Flash;
class SeasonsController extends Controller
{

    public function index()
    {
        $seasons = Seasons::with('series')->get();
        return view('admin.pages.seasons.index')->with(['seasons' => $seasons]);
    }

    public function getAdd()
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('admin.pages.seasons.add')->with(['series' => $series]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'series_id' => 'required',
            'season_number' => 'required'
        ]);
        $season = new Seasons();
        $season->series_id = $request->input('series_id');
        $season->season_number = $request->input('season_number');
        if($season->save()){
            Flash::success('Sezon Başarıyla Eklendi');
            $series = Series::orderBy('id','DESC')->get();
            return view('admin.pages.seasons.add')->with(['series' => $series]);
        }
    }

    public function getDelete($id)
    {
        Seasons::find($id)->delete();
        $parts = Parts::where('seasons_id','=',$id)->get();
        if(count($parts) > 0){
            Parts::where('seasons_id','=',$id)->delete();
        }
        return redirect()->route('admin.seasons.index');
    }
    public function step2season($id)
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('admin.pages.step.2season')->with(['series' => $series,'id' => $id]);
    }
}
