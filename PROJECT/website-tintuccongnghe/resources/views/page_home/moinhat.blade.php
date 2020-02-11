<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tin Mới Nhất</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
    <link rel="icon" href="{{ asset('websitenews/image/logo.jpg') }}">

    <link rel="stylesheet" href="{{ asset('websitenews/css/style.css') }}">
  </head>
  <body id="body">
    <!--PHẦN LOGO + MENU-->  
    @include('page_home.layout.menu')


    <!-- PHẦN NỘI DUNG -->

    

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('/websitenews/image/background.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 style="letter-spacing: 10px;">TIN MỚI NHẤT</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a style="font-size:12px; letter-spacing: 3px;  color: rgb(51, 128, 128);  font-weight: bold;" href="{{ route('trangchu') }}"><i class="fa fa-home" aria-hidden="true"></i> HOME <i class="fas fa-angle-double-right"></i> </a></li>
                            <li class="mx-2"><a style="font-size:12px; letter-spacing: 3px;  color: rgb(51, 128, 128);  font-weight: bold;">
                            MỚI NHẤT<i class="fas fa-angle-double-right ml-2"></i> </a></li>
                            <li><a style="font-size:12px; letter-spacing: 0.5px;  color: rgb(143, 156, 156);  font-weight: bold;"><i>
                            Tin Tức Xuyên Lục Địa</i></a></li>
                            
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

                        
                    @foreach($posts as $tin)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img">
                            <a href="{{ route('xembaiviet',$tin->slug)}}"><img  id="image" src="{{ asset('uploads/posts/' . $tin->image) }}"></a>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tin['created_at']->toDateString()}} / {{$tin['created_at']->diffForHumans()}}</a>
                                    <a href="">inews</a>
                                </div>
                                <a href="{{ route('xembaiviet', $tin->slug)}}" class="post-title">{{ $tin->title }}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye mr-1" aria-hidden="true"></i> {{ $tin->views }}</a>
                                    <a href="#"><i class="fas fa-thumbs-up  mr-1"></i> {{ $tin->likes }}</a>
                                </div>
                                <p>{{ $tin->description}}</p>
                            </div>
                        </div>
                    @endforeach

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
