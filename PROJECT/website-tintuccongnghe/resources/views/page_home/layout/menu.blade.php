    
    <nav id="logoNavbar1" class="navbar navbar-expand-md sticky-top">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="{{ route('home') }}">
                <img id="hinhlogo" src="{{ asset('websitenews/image/inews.png') }}">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="listNavbar1" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active d-none d-md-block" href="{{ route('trangchu') }}"><i class="fas fa-home fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-none d-md-block" href="{{ route('moinhat') }}">MỚI NHẤT</a>
                    </li>
                      
                    @foreach($categories->take(5) as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news', $category->slug) }}">{{$category->name}}</a>
                    </li>
                    @endforeach 
                </ul>
                
                <form action=" {{ route('timkiem') }}" method="get" id="search">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="search-box">
                    <input class="search-txt" type="search" name="timkiem" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <!-- <a class="search-btn" href="" type="submit" name="timkiem" >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a> -->
                    </div>
                </form>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-user-circle fa-lg mt-1"></i>
                  </a>
                  @guest
                  <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ route('login') }}" alt="Login"><i class="fas fa-sign-in-alt"></i></a>
                    <a class="dropdown-item" href="{{ route('register')}}"><i class="fas fa-user-edit"></i></a>
                  </div>
                  @else
                  <div class="dropdown-content">
                    <a href="#" data-toggle="tooltip" data-placement="left" title=" Username - {{ Auth::user()->name }} !"><i class="fas fa-id-card"></i></a> 
                    <!-- tooltip để hiển thị thông tin khi chỉ chuột vào -->
                    <a class="dropdown-item" href="{{ route('dangxuat') }}"><i class="fas fa-sign-out-alt"></i></a>
                  </div>
                  @endguest
                </li>
                            
                
    
            </div>
        </div>
    </nav>

    <!--HẾT PHẦN LOGO + MENU-->    
    
    <!--PHẦN MENU 2-->
    <!-- <div class="container-fluid" style="background-color:  rgb(91, 121, 43);">
      <div class="container">
        <div class="row">
        <div class="d-none d-sm-block col-sm-12 col-md-8 ">
            <nav class="navbar navbar-expand-sm">
              <ul id="listNavbar2" class="navbar-nav mr-auto"> 
                        <li class="nav-item">
                        <a class="nav-link" href="#">CỘNG ĐỒNG</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">KHÁM PHÁ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                      @guest
                          <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="{{ route('register')}}">REGISTER</a>
                          </li>
                      @else  
                          <li class="nav-item ">
                            <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="{{ route('dangxuat') }}">ĐĂNG XUẤT</a>
                          </li>
                      @endguest
                </ul>
            </nav>

          </div>
          <div class="col-6 d-none d-md-block col-md-4">
              <nav class="navbar navbar-expand-sm navbar-dark justify-content-end">
                <ul id="listNavbar3" class="navbar-nav">
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
    </div> -->

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("hinhlogo").style.width = "35px";
  } else {
    document.getElementById("hinhlogo").style.width = "50px";
  }
}
</script>