@foreach ($news as $new)
<h1>{{ $new->title }}</h1>
<p>{{$new->created_at}}</p><p>{{$new->category}}</p>
<h4>{{ $new->content }}</h4>
<img src="{{ $new->image }}" />
<br>
-------------------------------
@endforeach