<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class=" navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <form class="mx-3 d-flex" action="{{ route('search') }}" method="get" role="search">
                  @csrf
                    <input class="form-control me-2" type="search" placeholder="ابحث" name="search" aria-label="Search">
                    <button class="btn btn-outline-success mx-1" name="seachen" type="submit">ابحث</button>
                  </form>
              <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                  @foreach ($noas as $noa )
                  <li class="nav-item">
                    <a class="nav-link active" href="/nnew/{{ $noa->title }}">{{ $noa->title }}</a>
                  </li>
                  @endforeach  
                 
                </ul>
                <a class="navbar-brand fw-bold fs-1" href="/">اعرف</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
          </nav>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>

<style>
    *{
        text-align: right;
    }
</style>


