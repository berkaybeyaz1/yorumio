<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Parts;
use App\Seasons;
use App\Series;
class PartsController extends Controller
{
    public function index()
    {
        return view('admin.pages.parts.index');
    }

    public function getAdd()
    {
        $series = Parts::with(['series','seasons'])->get();
        return view('admin.pages.parts.index')->with('series',$series);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'series_id' => 'required',
            'seasons_id' => 'required',
            'episode' => 'required',
            'date' => 'required',
            'site_name1' => 'required',
            'site_url1' => 'required'
        ]);

        $parts = new Parts();
        $parts->series_id = $request->input('series_id');
        $parts->seasons_id = $request->input('seasons_id');
        $parts->episode = $request->input('episode');
        $parts->date = $request->input('date');
        $links = [];
        for($i = 1; $i < 4;$i++){
            if($request->input('site_name'.$i.'')){
                $links['site'.$i] = [
                        'name' => $request->input('site_name'.$i.''),
                        'url' => $request->input('site_url'.$i.'')
                ];
            }
        }

        $links = json_encode($links);
        $parts->links = $links;
        if($parts->save()){
            flash()->success('basarili');
            return redirect()->route('admin.parts.index');
        }
    }
    public function step2parts($id)
    {
        $series = Series::where('id','=',$id)->orderBy('id','DESC')->with('seasons')->get();
        $seasons = Seasons::where('series_id','=',$id)->get();
        return view('admin.pages.step.2parts')->with(['series' => $series,'id' => $id,
        'seasons' => $seasons]);
    }
}
