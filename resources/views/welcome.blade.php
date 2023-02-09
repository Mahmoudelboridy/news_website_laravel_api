
@extends('bootstrap')
@section('title','home page')
@section('content')
@foreach ($posts as $post )
<br><br>
    <a style="text-decoration: none" class="fs-3" href="nnew/go/{{ $post->id  }}">{{ $post->title }}</a>
    <br><br>
    <img style="width: 400px;height:400px;" src="{{$post->image}}" />
    <br><br>
@endforeach
@endsection

