<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ADMIN</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('websitenews/css/trangadmin.css') }}">
  </head>
  <body id="body">
    <nav class="navbar navbar-expand-md bg-dark sticky-top">
      <span style="color:white;letter-spacing: 5px; font-size: 13px;" class="navbar-brand ml-2">LE XUAN THIEN</span>
             
      <ul class="nav ml-auto"> 
        <div class="dropdown mr-2">
          <a style="background-color:#343a40 !important; color: white;" href="#" class="btn dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
          </a>
          
          <div class="dropdown-menu dropdown-menu-right">
            
            <a class="dropdown-item"><i class="fa fa-fw fa-user"></i>{{ Auth::user()->name }}</a>
            <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
          
          </div>
        </div>
        </ul>
    </nav>
      
    <div class="container-fluid">
      <div class="row h-100">
        <div id="menudoc" class="col-2 bg-info">
          <ul id="list" class="list-unstyled m-2">

            <div class="my-3">
              <li><a href="{{ route('posts.index') }}"><i class="fas fa-home"></i> Trang Chủ </a></li> 
            </div>

            <div class="dropdown-divider"></div>

            <div class="my-3">
              <li><a href="{{ route('posts.index')}}"><i class="fa fa-book"></i> Posts </a></li> 
            </div>

            <div class="dropdown-divider"></div>
            <!-- <div class="dropdown-divider"></div> -->

            <div class="my-3">
              <li><a href="{{ route('categories.index')}}"><i class="fas fa-align-right"></i> Categories </a></li> 
            </div>
            <div class="dropdown-divider"></div>

            <div class="my-3">
              <li><a href="{{ route('users.index')}}"><i class="fas fa-address-book"></i> Users </a></li> 
            </div>

            <div class="dropdown-divider"></div>

            <div class="my-3">
              <li><a href="{{ route('roles.index')}}"><i class="fas fa-radiation-alt"></i> Roles </a></li> 
            </div>

            <!-- <div class="dropdown-divider"></div> -->
            <div class="dropdown-divider"></div>

            <div class="my-3">
              <li><a href="{{ route('comments.index')}}"><i class="fas fa-comments"></i> Comments </a></li> 
            </div>

            <div class="dropdown-divider"></div>
          </ul>
    </div>

            <!-- <div class="dropdown-divider"></div>
            <div class="my-3">
              <li>
                <a href="{{ route('users.index')}}" data-toggle="collapse" data-target="#user"><i class="fas fa-address-book"></i> Quản lý Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">
                <li>
                  <a href="{{ route('users.index')}}">Users</a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                  <a href="{{ route('roles.index')}}">Roles</a>
                </li>
                </ul>
              </li>
            </div>
            <div class="dropdown-divider"></div>
            <div class="my-3">
              <li>
                <a href="{{ route('posts.index')}}" data-toggle="collapse" data-target="#baiviet"><i class="fa fa-book"></i> Quản lý bài viết <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="baiviet" class="collapse">
                  <li>
                    <a href="{{ route('posts.index')}}">Posts</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                      <a href="{{ route('categories.index')}}">Categories</a>
                    </li>
                </ul>
              </li>
              </div>
              <div class="dropdown-divider"></div>
            </ul>
            
    </div> -->

    <div class="col-10 my-3">
    <!-- BẮT ĐẦU PHẦN NỘI DUNG -->
    @yield('phannoidung')
      
    <!-- HẾT PHẦN NỘI DUNG -->

    </div>

  </div>
</body>
</html>

