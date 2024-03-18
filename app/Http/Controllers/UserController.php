<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $movies=Movie::orderBy("id","desc")->paginate(6);
        return view("dashboard",compact("movies"));
    }

    public function Useruploads(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $num=1;
        $user_id=Auth::id();
        $totals=Movie::where("user_id",$user_id)->count();
        $users=Movie::where("user_id",$user_id)->get();
        return view("Useruploads",compact("totals","users","num"));
    }
//  upload movie view
    public function uploadmovie(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("uploadmovie");
    }
//  Submits the movie
    public function submitmovie(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validate=$request->validate([
            "name"=>"required",
            "type"=>"required",
            "description"=>"required",
            "image"=> "required|image|mimes:jpeg,png,jpg",
        ]);
            $user_id = Auth::id();
            $fileName = rand() . ".jpg";
            $request->image->storeAs('public/uploads', $fileName);

            Movie::create([
                "name" => $request->name,
                "type" => $request->type,
                "description" => $request->description,
                "image" => $fileName,
                "user_id" => $user_id,
            ]);
            return redirect()->route("dashboard");
    }

//  deletes the movie
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Movie::where("id",$id)->delete();
        Review::where("movie_id",$id)->delete();
        return back();
    }
//  shows detail of movie
    public function detail($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user_id=Auth::id();
        $movie_id=$id;
        $recommend=Review::where("user_id",$user_id)->where("movie_id",$movie_id)->get();
        $movie=Movie::find($id);
        $uploader=Movie::where("id",$movie_id)->with("getname")->get();
        $user_recommend=Review::where("movie_id",$movie_id)->with("usersname")->get();
        return view("detail",compact("movie","recommend","uploader","user_recommend"));

    }
//   submits the recommends movie
    public function recommend(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user_id=Auth::id();
         Review::create([
             "movie_id"=>$request->movie_id,
             "user_id"=>$user_id,
             "day"=>$request->day
         ]);
        return back();
    }
//   unrecommends the movie
    public function unrecommend($id): \Illuminate\Http\RedirectResponse
    {
        Review::destroy($id);
        return back();
    }
    // show user recommends
    public function user_recommends(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users=User::all();
       $num=1;
        return view("recommend",compact("users","num"));
    }
//  shows user detail
    public function userdetail($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $movies=Review::where("user_id",$id)->with("getData")->get();
        $user_name=User::find($id);
        return view("userdetail",compact("movies","user_name"));
    }

    public function select(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $count=Review::with("getData")->select(DB::raw('movie_id, count(*) as count'))->groupBy('movie_id')->orderBy('count', 'desc')->first();
        $count_equal=Review::with("getData")->select(DB::raw('movie_id, count(*) as count'))->groupBy('movie_id')->orderBy('count', 'asc')->first();
        $day=Review::where("movie_id",$count->movie_id)->get();
//        return $day;
        return view("select",compact("count","count_equal","day"));
    }
}
