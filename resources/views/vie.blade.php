<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add news</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-5 " aria-current="page" href="/store">add news</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5 " href="/ard">display news</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="container-fluid my-3">
        <h2 class="text-center">add news</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="mb-1">title</label> <input type="text" class="form-control"
                            placeholder="Enter title" autocomplete="off" required="required"
                            name="title" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">content</label> <input type="text" style="height: 250px" class="form-control"
                            placeholder="Enter content" autocomplete="off" required="required" name="content" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">user image</label> <input type="file" class="form-control"
                            required="required" name="image" />
                    </div>
                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="add">add news</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>