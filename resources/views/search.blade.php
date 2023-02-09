@extends('bootstrap')
@section('title','search')
@section('content')
@foreach ($posts as $post )
<br>
    <a href="nnew/go/{{ $post->id  }}" >{{ $post->title }}</a>
    <br><br>
@endforeach
{{ $posts->links('pagination::bootstrap-5') }}

@endsection