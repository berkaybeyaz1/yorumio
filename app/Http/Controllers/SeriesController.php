<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Series;
use App\Parts;
use App\Seasons;
use Session;
class SeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $series = Series::orderBy('id','DESC')->with('seasons')->get();
        return view('admin.pages.series.index')->with(['serieses' => $series]);
    }

    public function getAdd()
    {
        return view('admin.pages.series.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'about' => 'required',
            'location' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,bmp',
            'avarage_minute' => 'required'
        ]);
        if($request->file('image')){
            $destinationPath = 'uploads'; // upload path
            $fileName = rand(11111,99999).'.'.$request->file('image')->getClientOriginalName(); // renameing image
            $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
            $series = new Series();
            $series->title = $request->input('title');
            $series->about = $request->input('about');
            $series->location = $request->input('location');
            $series->image = $fileName;
            $series->avarage_minute = $request->input('avarage_minute');
            if($series->save()){
                flash()->success('Başarıyla Dizi Eklendi !');
                return view('admin.pages.series.add');
            }
        }
    }

    public function getDelete($id)
    {
       Series::destroy($id);
       $season = Seasons::where('series_id','=',$id)->get();
        if(count($season) > 0){
            Seasons::where('series_id','=',$id)->delete();
        }
        $parts = Parts::where('series_id','=',$id)->get();
        if(count($parts) > 0){
            Parts::where('series_id','=',$id)->delete();
        }
        flash()->success('Başarıyla Silindi');
        return redirect()->route('admin.series.index');
    }

    public function step1()
    {
        $series = Series::orderBy('id','DESC')->with('seasons')->get();

        return view('admin.pages.step.1')->with(['serieses' => $series]);
    }
}
