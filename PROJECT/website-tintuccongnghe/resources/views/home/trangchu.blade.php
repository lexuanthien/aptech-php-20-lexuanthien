<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang Tin Tức Công Nghệ Nổi Bật - Tin Tức Hàng Đầu</title>

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
                <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="70px">
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

                      @foreach($categories->take(5) as $category)
                      <li class="nav-item">
                        <a class="nav-link" href="#">{{$category->name}}</a>
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
    <br>
    <div id="phanmenu2" class="container-fluid bg-dark">
      <div class="container">
        <div class="row">
          <div class="d-none d-sm-block col-sm-12 col-md-8 ">
            <nav class="navbar navbar-expand-sm">
              <ul id="listNavbar2" class="navbar-nav">  
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

    <div class="container">
      <!--TIN HOT-->
      <a href="#"><button id="tinhot" type="submit" class="btn btn-danger rounded-0">TIN HOT <i class="fas fa-bolt"></i></button></a>
      <div id= "carousel" class="row mt-3">
        <div class="col-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <ul class="carousel-indicators">
                <?php $tinhot = $posts->where('tin_hot',2)->sortByDesc('created_at')->take(5); 
                
                ?>
                @for($i = 0; $i < count($tinhot); $i++)
                  <li data-target="#myCarousel" data-slide-to="{{$i}}" 
                    @if($i == 0)
                      class="active"
                    @endif
                  ></li>
                @endfor 
                
              </ul>
                
              <div class="carousel-inner">
                  <?php $i =0; ?>
                  @foreach($tinhot as $tin)
                  <div 
                    @if($i == 0)
                        class="carousel-item active"
                    @else
                        class="carousel-item"
                    @endif    
                  >
                  <?php $i++; ?>
                    <img id="image_carousel" src="uploads/posts/{{ $tin['image'] }}" alt="Los Angeles">
                    <div class="carousel-caption text-left">
                        <h3 id= "title_carousel">{{ $tin['title'] }}</h3>
                        <p><a class="btn btn-lg btn-info" href="#" role="button">Xem Chi Tiết</a></p>
                      </div>
                  </div>
                  @endforeach
              </div>
                
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
            </div>
        </div>

        <div class="col-3">

        </div>

      </div>
    </div>

    <div id="phanmoinhat" class="container mt-3">
      <div class="row">
        <div class="col-9">
          <!-- MỚI NHẤT -->
          <div class="row">
            <div class="col-md-4 col-lg-2">
              <a id="moinhat1" href="#" class="btn btn-danger rounded-0 mt-3" role="submit">MỚI NHẤT</a>
            </div>
            <div class="d-none d-md-block col-md-8 col-lg-10">
                  <hr class="hr-moinhat">
            </div>
          </div>

          <!-- PHẦN NỘI DUNG TRONG MỤC MỚI NHẤT-->
          <?php $new = $posts->sortByDesc('created_at')->take(5);
          
          ?>
          @foreach($new->all() as $moinhat)
          <div class="row my-4">
              <div class="col-3">
                <img id="image" src="uploads/posts/{{ $moinhat['image'] }}">
              </div>

              <div class="col-9 text-algin-center">
                <h4>{{ $moinhat['title'] }}</h4>
                <p>{{ $moinhat['description'] }}</p>
              </div>
            <!-- <div class="col-3">
              <a>HÌNH ẢNH</a>
            </div>  
            <div class="col-9">
              <a>PHẦN NỘI DUNG</a>
            </div> -->
          </div>
          @endforeach
          <!--HẾT PHẦN NỘI DUNG CỦA MỤC MỚI NHẤT-->

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


    <!--PHẦN MOBILE-->
    <div class="container">
      <hr class="hr-ngang">
      <div class="row">
        <div class="col-9">
          @foreach($categories->take(3) as $category) <!--dùng take(3) để chỉ lấy ra 3 hàng trong categories-->
            <div class="row my-4">
              <div class="col-md-4 col-lg-2">
                <a id="mobile" href="#" class="btn btn-danger rounded-0 mt-3" role="submit">{{ $category->name }}</a>
              </div>
              <div class="d-none d-md-block col-md-8 col-lg-10">
                <hr class="hr-moinhat">
              </div>
            </div>

              <?php $data = $category->posts->sortByDesc('created_at')->take(5);
                    $post_doc = $data->shift();
              ?>
              <div class="row mt-3">
                <div class="col-3">
                  <img id="image" src="uploads/posts/{{ $post_doc['image'] }}">
                </div>

                <div class="col-9 text-algin-center">
                  <h4>{{$post_doc['title']}}</h4>
                  <p>{{$post_doc['description']}}</p>
                </div>  
              </div>
              <!-- POST NGANG 4 CÁI -->
              <div class="row mt-3">
                @foreach($data->all() as $tin)  
                <div class="col-6">       
                  <div class="row mt-3 ">
                    <div class="col-5 ">
                      <img id="image_ngang" src="uploads/posts/{{ $tin['image'] }}">
                    </div>

                    <div class="col-7" style="height:100px;">
                      <span id="dau3cham" >{{$tin['title']}}</span>
                      <b id="de" ><i>Inews - <a id="thoigian"> {{$tin['created_at']->toDateString()}} / {{$tin['created_at']->diffForHumans()}}</a></i></b>
                    </div>  
                  </div>
                </div>
                @endforeach  
              </div>  
          @endforeach
        </div>


        <div class="col-3">
            <div class="row my-4">
                <div class="col-12">
                  <a id="danhgia" href="#" class="btn btn-danger rounded-0 mt-3" role="submit">ĐÁNH GIÁ</a>
                  
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <a>LÊ XUÂN THIỆN</a>
                </div>  
            </div>

            <div class="row">
                <div class="col-12">
                  <a id="danhmuc" href="#" class="btn btn-danger rounded-0 mt-3" role="submit">DANH MỤC</a>
                </div>
              </div>
              <div class="row mt-2">
                <div id="danhmuc" class="col-12">
                  <div>
                    <a href="#">TIN TỨC</a>
                  </div>
                  <div id="cotdanhgia">
                    <a href="#">ĐÁNH GIÁ</a>
                  </div>
                  <div>
                    <a href="#">CỘNG ĐỒNG</a>
                  </div>
                  <div id="cotkhampha">
                    <a href="#">KHÁM PHÁ</a>
                  </div>
                  <div>
                    <a href="#">LIÊN HỆ</a>
                  </div>

                </div>  
            </div>
        </div>
      </div>

    </div>

    <br>
    <br>
    <div id="footer">
        <div class="container pt-5">
        <div class="row">
          <div id="footer-logo" class="d-none d-lg-block col-lg-3" style="justify-content: center; display: flex; align-items: center; flex-direction: column; text-align: center;">
                <a id="logo" class="navbar-brand " href="#">
                        <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="200px" width="200px" alt="">
                </a>
          </div>
          <div id="about" class="col-sm-9 col-md-6">
                <p id="FAMOUS">FAMOUS SAYING:</p>  
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
        <hr>
        </div>
    </div>
  </body>
</html>
