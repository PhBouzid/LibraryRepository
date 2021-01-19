@extends('master')

@section('title','Книги')

@section('content')
<script type="text/javascript">
    function addResouce(){
            $.ajax({
               url:"{{ "/myresource/add/".$media->media_id }}",
                type:'POST',
                cache: false,
                success: function(data){

                },
                error: function(xhr){

                }
            });
        }

    function back(){
        window.history.back();
    }
    </script>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>{{$media->name}}</h4></div>
        <div class="panel-body">
            <div class="row justify-content-end">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default" onclick="addResouce()">Отложить</button>
                    <a class="btn" href="{{$media->file_url}}">Загрузить</a>
                    <button type="button" class="btn btn-default"onclick="back()">Назад</button>
                </div>
            </div>
            <div class="row jusitify-content-start">
                <p></p>
            </div>
            <div class="row justify-content-start">
                <div class="col-md-5" >
                    <p style="width:700px height:900px">
                    <img width="900px" height="1100px" src="{{$media->file_thumb_url}}" class="img-fluid"/>
                    </p>
                </div>
                <div class="col-md-4 offset-md-2">
                    <h5>{{$media->author}}</h5>
                    <p>Описание</p>
                    <p style="text-align:justify">{{$media->abstract}}
                </div>
            </div>
            <div class="row jusitify-content-start">
                <div class="col-4">

                </div>
            </div>
            <div class="row jusitify-content-start">
                <p></p>
            </div>
        </div >
        <div class="panel-footer"></div>
    </div>
</div>

@endsection

@section('footscript')
    @parent
@endsection
