<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="container mt-3">
            <h1 class="text-center">اضف خبر</h1>
            <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4  ">
                    عنوان الخبر <input placeholder="ادخل عنوان الخبر" type="text" name="title"
                        autocomplete="off" required="requird" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    وصف الخبر <input placeholder="ادخل وصف الخبر" style="height:120px;" type="text"
                        class="form-control" name="description" autocomplete="off" required="requird" />
                </div>
                <div class="form-outline mb-4">
                    اختار قسم الخبر
                    <select class="form-select" name="category">
                       @foreach ($noas as $noa )
                       <option value="{{ $noa->title }}">{{ $noa->title }}</option>
                       @endforeach
                    </select>
                </div>
            
                <div class="form-outline mb-4">
                    صورة للخبر
                    <input class="form-control" type="file" accept="image/png, image/jpeg,image/jpg"
                        name="image" />
                </div>
              
                <div class="form-outline mb-4 text-center">
                    <button class="btn btn-info " name="insert">اضف الخبر</button>
                </div>
    
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>