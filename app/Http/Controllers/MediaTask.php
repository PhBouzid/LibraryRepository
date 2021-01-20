<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Spatie\PdfToImage\Pdf;


class MediaTask extends Controller
{

    public function getMedia(){
        $media = Media::paginate(15);
        return view('libcontent',['medias'=>$media,'category'=>0]);
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
        return view('content',['media'=>$book,'category'=>1]);
    }

    public function showVideo($id){
        $video = Media::find($id);
        return view('content',['media'=>$video,'category'=>2]);
    }

    public function showArticle($id){
        $article = Media::find($id);
        return view('content',['media'=>$article,'category'=>3]);
    }

    public function update(Request $request){
        $media = Media::find($request->id);
        $media->name = $request->name;
        $media->author = $request->author;
        $media->abstract = $request->abstract;
        $media->file_url = $request->file_url;
        $media->file_thumb_url = $request->file_thumb_url;
        $media->save();
        return back()
            ->with('success','You have successfully update document.');
    }

    public function insertMedia(Request $request){
        $time = time();
        $fileName = $time.'.'.$request->file->extension();
        $thumb_fileName= $time.'.png';
        $request->file->move(public_path('file'), $fileName);

        $media = new Media();
        $media->name = $request->name;
        $media->author = $request->author;
        $media->year = $request->year;
        $media->abstract = $request->abstract;
        $media->category_id = $request->category_id;
        $path = '/'.public_path('file').'/'.$fileName;
        $thumbPdf = new Pdf($path);
        $thumbPdf->saveImage(public_path('file').'/'.$thumb_fileName);
        $media->file_url = "/file/".$fileName;
        $media->file_thumb_url = "/file/".$thumb_fileName;
        $media->save();
        return back()
            ->with('success','Вы успешно загрузили файл.')
            ->with('file',$fileName);
    }
}
