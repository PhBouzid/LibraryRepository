@extends('master')

@section('title','Администратор - добавить контент')

@section('content')

<div class="container-fluid">
    <div class="panel-heading">
        <h2>Загрузка контента</h2>
    </div>
    <div class="panel-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form enctype="multipart/form-data" style="border: 1px solid #ccc; border-radius: 5px; padding: 15px 10px;" method="POST" action="{{ route('insertMedia') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="author">Автор</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="Автор">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Наименование</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Наименование">
                    </div>
                </div>
                <div class="form-group">
                    <label for="year">Год выпуска</label>
                    <input type="text" class="form-control" name="year" id="year" placeholder="Год выпуска">
                </div>
                <div class="form-group">
                    <label for="abstract">Описание</label>
                    <textarea  class="form-control" id="abstract" name="abstract" placeholder="Описание книги"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="category_id">Тип контента</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option selected value=1>Книга</option>
                            <option value=2>Видео</option>
                            <option value=3>Журнал/Статья</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                      <label for="file">Файл</label>
                      <input type="file" class="form-control-file" name="file" id="file">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
</div>
@endsection

@section('footscript')
    @parent
@endsection
