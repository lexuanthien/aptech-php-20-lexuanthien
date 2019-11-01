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

    <link rel="stylesheet" href="trangadmin.css">
  </head>
  <body id="body">
      <nav class="navbar navbar-expand-md bg-dark sticky-top">
        <a class="navbar-brand ml-3" href="#">
          <img src="/PROJECT/IMAGE/LOGO.png" height="70px">
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

          <!--PHẦN NỘI DUNG-->

          <div class="col-10 my-3">
          <h1>Show Posts</h1>
          <hr>
      
          <div class="mx-4">
          <table class="table table-bordered mt-3">
            <thead>
            <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','TITLE','DESCRIPTION','CONTENT','THỂ LOẠI','TIN HOT','IMAGE','SLUG','EDIT','DELETE', 'HOME'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
            </thead>

            <tbody class="text-center text-dark ">
             
                <tr>
                    <td>{{ $posts->id }}</td>
                    <td>{{ $posts->title }}</td>
                    <td>{{ $posts->description }}</td>
                    <td>{{ $posts->content }}</td>
                    <td>{{ $posts->category->name}}</td>
                    <td>
                      @if($posts->tin_hot == 1) {{'TIN BÌNH THƯỜNG'}}
                      @else {{'TIN HOT'}}
                      @endif
                    </td>
                    <td>{{ $posts->image }}
                        <img src="{{ asset('uploads/posts/' . $posts->image) }}" width="100px;" height="100px;">
                    </td>
                    <td>{{ $posts->slug}}</td>
                    <td>
                        <form action="{{ route('posts.edit', $posts->id)}}" method="GET">
                            <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                        </form>
                    </td>
                    <td>    
                        <form action="{{ route('posts.destroy', $posts->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                    <td>
                      <form action="{{ route('posts.index', $posts->id)}}" method="GET">
                            <button type="submit" class="btn btn-info mx-2">HOME</button>
                      </form>
                    </td>
                    
                <tr>
             
            </tbody>
          </table>
          </div>
          </div>
          </div>
          <!--HẾT PHẦN NỘI DUNG-->
        </div>
      </div>

</body>
</html>