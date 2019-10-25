<h1>TRANG TẠO MỘT CATEGORIES MỚI.</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
</head>
<body>
    <form action="{{ route('categories.store') }}" method="POST">
            <input type="hidden" name="_token" value={{csrf_token()}}>

            <div class="form-group">
                <h5>NAME</h5>
                <input type="text" class="form-control" name="name" placeholder="Tên Categories">
            </div>

            <div class="form-group">
                <h5>DESCRIPTION_CAT</h5>
                <textarea name="categories_cat" id="categories" rows="10" cols="80">
                        DESCRIPTION_Categories.
                </textarea>
            </div>
            
            <br>
            <button type="submit" class="btn btn-success font-weight-bold">TẠO Categories</button>
            </form>

            <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>

            <script>
                 CKEDITOR.replace('categories');
            </script>
</body>
</html>