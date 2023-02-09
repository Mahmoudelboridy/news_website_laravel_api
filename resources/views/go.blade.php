@extends('bootstrap')
@section('title','only')
@section('content')
<h1>{{ $tions->title }}</h1>
<p>{{ $tions->created_at }}</p>
<img src="{{ $tions->image }}" />
<h3 class="my-3">{{ $tions->description }}</h3>
@endsection
<style>
    *{
        text-align: right;
    }
</style>