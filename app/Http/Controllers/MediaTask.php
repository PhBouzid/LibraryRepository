<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Controllers\Controller;


class MediaTask extends Controller
{

    public function getMedia(){
        $media = Media::all()->paginate(15);
        return view('libcontent',['medias'=>$media]);
    }

    public function showBooks(){
        $media = Media::where('category_id',1)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>1]);
    }

    public function showVideos(){
        $media = Media::where('category_id',2)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>2]);
    }

    public function showArticles(){
        $media = Media::where('category_id',3)->paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>3]);
    }


    public function showBook($id){
        $book = Media::find($id);
        return view('media',['media'=>$book,'category'=>1]);
    }

    public function showVideo($id){
        $video = Media::find($id);
        return view('media',['media'=>$video,'category'=>2]);
    }

    public function showArticle($id){
        $article = Media::find($id);
        return view('media',['media'=>$article,'category'=>3]);
    }

    public function update(Request $request){
        $media = Media::find($request->id);
        $media->name = $request->name;
        $media->author = $request->author;
        $media->abstract = $request->abstract;
        $media->file_url = $request->file_url;
        $media->file_thumb_url = $request->file_thumb_url;
        $media->save();
    }

    public function insertMedia(Request $request){
        $media = new Media();
        $media->name = $request->name;
        $media->author = $request->author;
        $media->abstract = $request->abstract;
        $media->file_url = $request->file_url;
        $media->file_thumb_url = $request->file_thumb_url;
        $media->category_id = $request->category_id;
        $media->save();
    }
}
