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
    @elseif($category===4)
        Мои медиа ресурсы
    @endif
</h2>
{{ $medias->links('pagination::bootstrap-4') }}
<table class="table" style="width:100%">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($medias as $key=>$media)
        <tr>
            <th scope="row" style="width:90px;">
                <img src="{{$media->file_thumb_url}}" style="width: 90px"/>
            </th>
            <td>
                <a href="" style="color: #007bff"></a>
                <div style="font-size: 12px; padding-top: 5px;">{{$media->name}}</div>
                <div style="font-size: 12px; padding-top: 5px;">{{$media->author}}</div>
                @if($media->category_id===1)
                    <a href="/books/book/{{$media->media_id}}">Детальнее </a>
                @elseif($media->category_id===2)
                    <a href="/videos/video/{{$media->media_id}}">Детальнее </a>
                @elseif($media->category_id===3)
                    <a href="/articles/article/{{$media->media_id}}">Детальнее </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('footscript')
    @parent
@endsection
