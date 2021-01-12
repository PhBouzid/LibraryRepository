@extends('master')

@section('title','Администратор - добавить контент')

@section('content')

<div class="container-fluid">
            <h2 style="margin: 1.1em">
                Библиотека - Добавление контента
            </h2>
            <form style="border: 1px solid #ccc; border-radius: 5px; padding: 15px 10px;">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Автор</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Автор">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Наименование</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Наименование">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Год выпуска</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Год выпуска">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Описание</label>
                    <textarea  class="form-control" id="inputAddress2" placeholder="Описание книги"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputState">Тип контента</label>
                        <select id="inputState" class="form-control">
                            <option selected>Книга</option>
                            <option>Видео</option>
                            <option>Аудио</option>
                            <option>Журнал</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Черновик
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
@endsection

@section('footscript')
    @parent
@endsection
