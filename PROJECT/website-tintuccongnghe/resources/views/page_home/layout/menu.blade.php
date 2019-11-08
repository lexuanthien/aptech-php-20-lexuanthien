<nav id="logoNavbar1" class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container">
            <div class="">
            <a class="navbar-brand" href="{{ route('trangchu') }}">
                <img src="{{ url('http://localhost:8000/webtintuc/image/LOGO.png') }}" height="60px" width="60px">
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
                      
                    @foreach($categories->take(5) as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news', $category->id) }}">{{$category->name}}</a>
                    </li>
                    @endforeach 
                </ul>
                
                <form id="search" method="get" action="#" class="nav-light">
                  <div class='row'>
                    <div class="col-12 d-flex">
                    <input type="search" class="form-control rounded-0" name="timkiem" id="timkiem" placeholder="Tìm kiếm...">
                    <button id="nuttimkiem" type="submit" class="btn"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                    </div>
                  </div>  
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
                        <a class="nav-link">{{ $time->toDateString() }}</a>
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
    