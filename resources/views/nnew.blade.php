@extends('bootstrap')
@section('title','home page')
@section('content')
<h1 class="text-center">{{ $category }}</h1>

@foreach ($titles as $title )
    <a style="text-decoration: none" href="go/{{ $title->id  }}"  class="fs-3 fw-2 text-center">{{ $title->title }}</a><br><br>

@endforeach
{{ $titles->links('pagination::bootstrap-5') }}

{{--
    <h4>{{$ton }}</h4>

    --}}

@endsection

