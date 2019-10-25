<h1>ĐÂY LÀ TRANG EDITOR</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SỬA CATEGORIES</title>
</head>
<body>
    <form action="{{route('categories.update', $category-> id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value={{csrf_token()}}>

            <div class="form-group">
                <h5>NAME</h5>
                <input type="text" class="form-control" name="sua-name" value="{{$category->name}}">
            </div>


            <div class="form-group">
                <h5>DESCRIPTION_CAT</h5>
                <textarea name="sua-description" id="description" rows="10" cols="80">
                        {{$category->description_cat}}
                </textarea>
            </div>
            
            <br>
            <button type="submit" class="btn btn-success font-weight-bold">LƯU THAY ĐỔI</button>
            </form>

            <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>

            <script>
                 CKEDITOR.replace('description');
            </script>
</body>
</html>