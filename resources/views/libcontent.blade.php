@extends('master')

@section('title','Книги')

@section('content')
<h2 style="margin: 1.1em">
    @if($category===0)
        Все медиа ресурсы
    @elseif($category===1)
        Все книги
    @elseif($category===2)
        Все видео записи
    @elseif($category===3)
        Все статьи и журналы
    @endif
</h2>
{{ $medias->links() }}
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
        @foreach ($medias as $media)
            <tr>
                <th scope="row">1</th>
                <td>{{ $media->author }}</td>
                <td>{{ $media->name}}</td>
                <td>2010</td>
                <td>{{ $media->abstract}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('footscript')
    @parent
@endsection
