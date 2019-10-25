<h1>Đây là trang tạo mới</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SỬA BÀI VIẾT</title>
</head>
<body>
    <form action="{{route('articles.update', $article-> id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value={{csrf_token()}}>

            <div class="form-group">
                <h5>TITLE</h5>
                <input type="text" class="form-control" name="sua-tieu-de" value="{{$article->title}}">
            </div>


            <div class="form-group">
                <h5>DESCRIPTION</h5>
                <textarea name="sua-mieu-ta" cols="30" rows="10"> {{$article->description}} </textarea>
            </div>


            <div class="form-group">
                <h5>CONTENT</h5>
                <textarea name="sua-noi-dung" id="content" rows="10" cols="80">
                        {{$article->content}}
                </textarea>
            </div>
            
            <br>
            <button type="submit" class="btn btn-success font-weight-bold">LƯU THAY ĐỔI</button>
            </form>

            <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>

            <script>
                 CKEDITOR.replace('content');
            </script>
</body>
</html>