<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TRANG TIN {{ $categories->name }}</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/webtintuc/css/trangchu.css') }}">
  </head>
  <body id="body">
    <!--PHẦN LOGO + MENU-->  
    <nav id="logoNavbar1" class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container">
            <div class="">
            <a class="navbar-brand" href="#">
                <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="60px">
            </a>
            </div>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="listNavbar1" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active d-none d-md-block" href="#"><i class="fas fa-home fa-lg pb-2"></i></a>
                      </li>

                      @foreach($theloaipost->take(5) as $theloai)
                      <li class="nav-item">
                        <a class="nav-link" href="#">{{$theloai->name}}</a>
                      </li>
                      @endforeach
                      <!-- <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" href="#" id="navbardrop">MOBILE</a>
                      <div class="dropdown-content">
                        <a class="dropdown-item font-weight-bold" href="#">SMARTPHONE</a>
                        <a class="dropdown-item font-weight-bold" href="#">TABLET</a>
                      </div>
                      </li> -->
                </ul>
                <form id="search" class="nav-light">
                        <i class="d-none d-md-block fas fa-search fa-lg"></i>
                </form>
        </div>
      </div>
    </nav>
    <!--HẾT PHẦN LOGO + MENU-->    
    
    <!--PHẦN MENU 2-->
    
    <div id="phanmenu2">
      <div class="container">
        <div class="row">
          <div class="d-none d-sm-block col-sm-12 col-md-8 ">
            <nav class="navbar navbar-expand-sm">
              <ul id="listNavbar2" class="navbar-nav mr-auto">  
                        <li class="nav-item">
                        <a class="nav-link" href="#">MỚI NHẤT</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">CỘNG ĐỒNG</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">KHÁM PHÁ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link" href="#">JOIN/SIGN IN <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                          
                </ul>
            </nav>
          </div>
          <div class="col-6 d-none d-md-block col-md-4">
              <nav class="navbar navbar-expand-sm navbar-dark justify-content-end">
                <ul id="listNavbar3" class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link">{{ $time }}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i><a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i><a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i><a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i><a>
                        </li>
                </ul>
              </nav>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br>

    <!-- PHẦN NỘI DUNG -->

    <div id="phanmoinhat" class="container mt-3">
      <div class="row">
        <div class="col-9">

          <div class="row">
            <div class="col-md-4 col-lg-2">
              <a id="moinhat1" href="#" class="btn btn-danger rounded-0 mt-3" role="submit">{{$categories->name}}</a>
            </div>
            <div class="d-none d-md-block col-md-8 col-lg-10">
                  <hr class="hr-moinhat">
            </div>
          </div>

          @foreach($posts as $tin)
          <div class="row my-4">
              <div class="col-3">
                <img id="image" src="uploads/posts/{{$tin->image}}">
              </div>

              <div class="col-9 text-algin-center">
                <h4 id= "titleposts">{{ $tin->title }}</h4>
                <p id= "titleposts">{{ $tin->description}}</p>
                
              </div>
          </div>
          <hr>
          @endforeach

        <div class="row">
            <div id="phantrang"> {{$posts->links()}} </div>
        </div>
         
        </div>
      
        <div id="listMangxahoi" class="col-3">
          <div class="row">
              <span id="mangxahoi" class="mt-4">MẠNG XÃ HỘI</span>
          </div>
          
          <div id="facebook" class="row mt-2">
            <div class="col-1 d-flex justify-content-center">
                <a href="https://www.facebook.com/testLonely"><i class="fab fa-facebook-f fa-lg"></i></a>
            </div>
            <div id="sub" class="col-8 d-flex justify-content-center">
              <a href="https://www.facebook.com/testLonely"><span>L O N E L Y</span></a>
            </div>
            <div class="col-2 ml-2 d-flex justify-content-center">
              <a href="https://www.facebook.com/testLonely"><span> THÍCH</span></a>
            </div>
          </div>

          <div id="instagram" class="row mt-2">
              <div class="col-1 d-flex justify-content-center">
                  <a href="https://www.instagram.com/casillasxt1998/"><i class="fab fa-instagram"></i></a>
              </div>
              <div id="sub" class="col-6 d-flex justify-content-center">
                <a href="https://www.instagram.com/casillasxt1998/"><span>LÊ XUÂN THIỆN</span></a>
              </div>
              <div class="col-4 ml-2 d-flex justify-content-center">
                <a href="https://www.instagram.com/casillasxt1998/"><span>THEO DÕI</span></a>
              </div>
          </div>

          <div id="youtube" class="row mt-2">
              <div class="col-1 d-flex justify-content-center">
                  <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w"><i class="fab fa-youtube"></i></a>
              </div>
              <div id="sub" class="col-8 d-flex justify-content-center">
                <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w"><span>MUSIC - NGUỒN CẢM XÚC</span></a>
              </div>
              <div class="col-2 ml-2 d-flex justify-content-center">
                <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w?sub_confirmation=1"><span>THÍCH</span></a>
              </div>
          </div>


          <!--BÀI VIẾT XEM NHIỀU-->
          <div id="hr2" class="row">
              <span id="baivietxemnhieu" class="mt-4">BÀI VIẾT XEM NHIỀU</span>
          </div>
          
        </div>
      </div>
    </div>

    <!-- PHẦN NỘI DUNG -->

    <!-- PHẦN FOOTER -->
    @include('home.layout.footer')