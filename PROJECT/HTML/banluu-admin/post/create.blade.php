<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang Tin Tức Công Nghệ Nổi Bật</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/webtintuc/css/trangadmin.css') }}">
  </head>
  <body id="body">
      <nav class="navbar navbar-expand-md bg-dark sticky-top">
        <a class="navbar-brand ml-3" href="#">
          <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="70px">
        </a>
             
        <ul class="nav ml-auto mr-3"> 
          <div class="dropdown ">
            <a style="background-color:#343a40 !important; color: white;" href="#" class="btn dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
            </a>
          
            <div class="dropdown-menu dropdown-menu-left">
              <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </div>
          </div>
        </ul>
      </nav>
      
      <div class="container-fluid">
        <div class="row h-100">
          <div id="menudoc" class="col-2 bg-info">
            <ul id="list" class="list-unstyled m-2">
              <li><a href="#"><i class="fas fa-home"></i> Trang chủ </a></li>
              <div class="dropdown-divider"></div>
              <div class="my-3">
                  <li>
                      <a href="#" data-toggle="collapse" data-target="#user"><i class="fas fa-address-book"></i> Quản lý Users <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="user" class="collapse">
                          <li>
                              <a href="index.php?controller=blog/list">Users</a>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li>
                              <a href="index.php?controller=catalog_blog/list">Roles</a>
                          </li>
                      </ul>
                  </li>
              </div>
              <div class="dropdown-divider"></div>
              <li>
                  <a href="#" data-toggle="collapse" data-target="#baiviet"><i class="fa fa-book"></i> Quản lý bài viết <i class="fa fa-fw fa-caret-down"></i></a>
                  <ul id="baiviet" class="collapse">
                      <li>
                          <a href="index.php?controller=blog/list">Posts</a>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li>
                          <a href="index.php?controller=catalog_blog/list">Categories</a>
                      </li>
                  </ul>
              </li>
              <div class="dropdown-divider"></div>
            </ul>
            
          </div>

          <div class="col-10 my-3">
            <!--PHẦN NỘI DUNG-->

              <h1>Create Post Page</h1>
              <hr>
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value={{csrf_token()}}>
      
                  <div class="form-group">
                      <label for="">TITLE:</label>
                      <input type="text" class="form-control" name="title" placeholder="Tiêu đề của bài viết">
                  </div>
      
      
                  <div class="form-group">
                      <label for="">DESCRIPTION:</label>
                      <div><textarea name="description" cols="100%" rows="5" placeholder=" Miêu tả của bài viết"></textarea></div>
                  </div>
                  <div class="form-group">
                      <label for="">CONTENT:</label>
                      <div><textarea name="content" id="editor1" rows="10" cols="100%">
                          Điền nội dung của bài viết vào đây.
                      </textarea><div>
                  </div>
                  <br>
                  
                  <div>
                    <label for="">THỂ LOẠI BÀI VIẾT: </label>
                    <select name="category_id">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">
                            {{$category->name}}
                          </option>
                        @endforeach
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <label>TIN NỔI BẬT:</label>
                    <label class="radio-inline">
                      <input name="news" value="1" checked="" type="radio"> News
                    </label>
                    <span> - </span>
                    <label class="radio-inline">
                      <input name="news" value="2" type="radio"> Hot News
                    </label>
                  </div>

                  <div class="form-group">
                    <label for="">IMAGE: </label>
                    <input type="file" name="image">
                  </div>

                  <br>
                  <button type="submit" class="btn btn-success font-weight-bold">TẠO BÀI VIẾT</button>
                </form>
      
                <script src="http://localhost:8000/webtintuc/ckeditor/ckeditor.js"></script>
      
                <script>
                  CKEDITOR.replace('editor1');
                </script>
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
        </div>
      </div>

</body>
</html>