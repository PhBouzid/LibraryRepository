<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Controllers\Controller;


class LibraryTask extends Controller
{

    public function getAllLibrary(){
        $media = Media::paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>0]);
    }

    public function showLibraryBook(){
        $media = Media::where('category_id',1)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>1]);
    }

    public function sendBookRequest(){
        $media = Media::where('category_id',2)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>2]);
    }

    public function showMyRequests(){
        $media = Media::where('category_id',3)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>3]);
    }


    public function showAllRequest($id){
        $book = Media::find($id);
        return view('media',['media'=>$book,'category'=>1]);
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
