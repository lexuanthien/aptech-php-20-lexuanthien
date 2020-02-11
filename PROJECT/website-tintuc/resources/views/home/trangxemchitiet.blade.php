<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $posts->title }}</title>

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
            <a class="navbar-brand" href="{{ route('trangchu') }}">
                <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="60px">
            </a>
            </div>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="listNavbar1" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active d-none d-md-block" href="{{ route('trangchu') }}"><i class="fas fa-home fa-lg pb-2"></i></a>
                      </li>

                      @foreach($theloaipost->take(5) as $theloai)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('tintuc', $theloai->id) }}">{{$theloai->name}}</a>
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


    <div id="show" class="container">
        <div class="row">
            <div class="col-9">
                <h3>{{ $posts->title }}</h3>
                <span>Tin: {{ $posts->category->name }}</span>
                <br>
                <div class="row mt-3">
                    <div class="col-12">
                            <a id="button_like" href="#" class="btn" role="submit"><i class="fab fa-facebook-f"></i> Like</a>
                            <a id="button_share" href="#" class="btn" role="submit"><i class="fab fa-facebook-f"></i> Share</a>
                    </div>
                </div>
                <hr>
                <p><b>{{ $posts->description }}</b></p>
                <img id="image_trangxemchitiet" height="300px" src="uploads/posts/{{$posts->image}}">
                <p>{{ $posts->image }}</p>
                <br>
                <p>{!! $posts->content !!}</p>
            </div>
            <div class="col-3">

            </div>
        </div>
        <!-- Comment -->
        @foreach($posts->comments as $comment)
        <h3>PHẦN COMMENT:</h3>
        <div>
            <p>{{ $comment->content_comment }}</p>
        </div> 
        @endforeach 
    </div>

    

    <br>
    <div id="footer">
        <div class="container py-4">
        <div class="row">
          <div id="footer-logo" class="d-none d-lg-block col-lg-3" style="justify-content: center; display: flex; align-items: center; flex-direction: column; text-align: center;">
                <a id="logo" class="navbar-brand " href="#">
                        <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="150px" width="150px" alt="">
                </a>
          </div>
          <div id="about" class="col-sm-9 col-md-6">
                <p id="FAMOUS">ABOUT</p>  
                <b>I'VE NEVER SOUGHT SUCCESS IN ORDER TO GET FAME AND MONEY. IT'S THE TALENT AND THE PASSION THAT COUNT IN SUCCESS...</b><br>
                <b><i>" Thành công lớn nhất là đứng dậy sau mỗi lần bị vấp ngã! "</i></b>
          </div>
          <div class="d-none d-sm-block col-sm-3 col-md-3">
                <ul id="icon" class="list-unstyled m-2">
                 <li><a href="#"><i class="fas fa-user"></i></a></li>
                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
          </div>
        </div>
        <br>
          <div class="row">
            <div class="col-12"><a id="copyright"> DESIGN by LEXUANTHIEN</a></div>
          </div>
        </div>
    </div>
  </body>
</html>
