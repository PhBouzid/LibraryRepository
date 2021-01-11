@extends('master')

@section('title','Книги')

@section('content')
<h2 style="margin: 1.1em">
    Библиотека - Книги
</h2>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Назад</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Вперед</a></li>
    </ul>
</nav>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Автор</th>
        <th scope="col">Название</th>
        <th scope="col">Год выпуска</th>
        <th scope="col">Описание</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Иванов ИИ</td>
        <td>Книга синяя</td>
        <td>2010</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, impedit.</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Петров ПП</td>
        <td>Азбука</td>
        <td>1998</td>
        <td>Lorem ipsum dolor sit amet.</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Сидоров ВВ</td>
        <td>Книга короткая</td>
        <td>1980</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
    </tr>
    </tbody>
</table>
@endsection

@section('footscript')
    @parent
@endsection
