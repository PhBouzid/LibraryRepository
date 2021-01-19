<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserMediaTask extends Controller
{

    public function showResources(){
        $user = Auth::user();
        $medias = $user->medias()->paginate(10);
        return view('libcontent',['medias'=>$medias,'category'=>4]);
    }

    public function addResource($id){
        $user = Auth::user();
        $user->medias()->attach($id);
        $user->save();
        return back()
            ->with('success','You have successfully add resource.');
    }

    public function cancelResource($id){
        $user = Auth::user();
        $user->medias()->detach($id);
        $user->save();
        return back()
            ->with('success','You have successfully canceled resource.');
    }

    public function approveRequest($id){
        $video = Media::find($id);
        return view('media',['media'=>$video,'category'=>2]);
    }

    public function cancelRequest($id){
        $article = Media::find($id);
        return view('media',['media'=>$article,'category'=>3]);
    }

}
