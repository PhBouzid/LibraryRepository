@extends('master')

@section('title','Администратор - добавить контент')

@section('content')

<div class="container-fluid">
    <h2 style="margin: 1.1em">
        Библиотека - Личный кабинет
    </h2>
    <div class="row my-3">
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Отложенные</h4>
                    <h2><i class="fa fa-bookmark fa-3x"></i></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Загруженные</h4>
                    <h2><i class="fa fa-save fa-3x"></i></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Библиотека</h4>
                    <h2><i class="fa fa-archive fa-3x"></i></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Книги</h4>
                    <h2><i class="fa fa-book fa-3x"></i></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Аудио</h4>
                    <h2><i class="fa fa-volume-up fa-3x"></i></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-1">
            <div class="card text-center" style="height: 200px; cursor: pointer;">
                <div class="card-block">
                    <h4 class="card-title mt-4">Видео</h4>
                    <h2><i class="fa fa-video-camera fa-3x"></i></h2>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('footscript')
    @parent
@endsection
