<h1>ĐÂY LÀ TRANG TẠO MỚI MỘT BÀI VIẾT.</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="POST">
            <input type="hidden" name="_token" value={{csrf_token()}}>

            <div class="form-group">
                <h5>TITLE:</h5>
                <input type="text" class="form-control" name="tieu-de" placeholder="Tiêu đề của bài viết">
            </div>


            <div class="form-group">
                <h5>DESCRIPTION:</h5>
                <textarea name="mieu-ta" cols="30" rows="10" placeholder="Miêu tả của bài viết"></textarea>
            </div>
            <br>
            <!-- CHỖ LỰA CHỌN CATEGORY_ID của bảng articles (ID trong bảng categories) -->
            <div>
                <h5>CATEGORY ID:</h5>
                <select name="category_id"> <!-- name này để gửi vào store controller -->
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}} <!-- hiển thị tên -->
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <h5>CONTENT:</h5>
                <textarea name="noi-dung" id="editor1" rows="10" cols="80">
                    Điền nội dung của bài viết vào đây.
                </textarea>
            </div>
            
            <br>
            <button type="submit" class="btn btn-success font-weight-bold">TẠO BÀI VIẾT</button>
            </form>

            <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>

            <script>
                 CKEDITOR.replace('editor1');
            </script>
</body>
</html>