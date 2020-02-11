<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Website Tin Tức Công Nghệ Hàng Đầu - Tin Tức Mỗi Ngày</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
    <link rel="icon" href="{{ url('http://localhost:8000/websitenews/image/logo.jpg') }}">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/websitenews/css/style.css') }}">
  </head>
  <body id="body">
    <!--PHẦN LOGO + MENU-->  
    @include('page_home.layout.menu')


    <!-- PHẦN NỘI DUNG -->

    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a style="font-size:12px; letter-spacing: 3px;  color: rgb(51, 128, 128);  font-weight: bold;" href="{{ route('trangchu') }}"><i class="fa fa-home" aria-hidden="true"></i> HOME <i class="fas fa-angle-double-right"></i> </a></li>
                            <li class="mx-2"><a style="font-size:12px; letter-spacing: 3px;  color: rgb(51, 128, 128);  font-weight: bold;">
                            TÌM KIẾM<i class="fas fa-angle-double-right ml-2"></i> </a></li>
                            <li><a style="font-size:12px; letter-spacing: 0.5px;  color: rgb(143, 156, 156);  font-weight: bold;"><i>
                            {{ $timkiem }}</i></a></li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        <!-- Single Catagory Post -->
                        @foreach($posts as $tin)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img">
                              <img id="image" src="/uploads/posts/{{$tin->image}}">
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tin['created_at']->toDateString()}} / {{$tin['created_at']->diffForHumans()}}</a>
                                    <a href="archive.html">inews</a>
                                </div>
                                <a href="{{ route('xembaiviet', $tin->slug) }}" class="post-title">{{ $tin->title }}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                                <p>{{ $tin->description}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- Pagination -->
                        {{ $posts->links()}} 
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                      @include('page_home.layout.phanbenphai')
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- PHẦN NỘI DUNG -->

    <!-- PHẦN FOOTER -->
    @include('page_home.layout.footer')
  </body>
</html>
