<!DOCTYPE html>
<html lang="en">
    @extends('page_home.layout.head',['data'=> $posts])
<body id="body">
    <!--PHẦN LOGO + MENU-->
    @include('page_home.layout.menu')

    <!-- PHẦN NỘI DUNG -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('http://localhost:8000/websitenews/image/background.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 style="letter-spacing: 10px;">{{ $posts->category->name }}</h2>
                        <h6 style="letter-spacing: 1px; color:white;">"{{ $posts->title }}"</h6>

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
                            <li class="ml-2"><a style="font-size:12px; letter-spacing: 3px;  color: rgb(51, 128, 128);  font-weight: bold;">
                                    {{ $posts->category->name }} <i class="fas fa-angle-double-right"></i> </a></li>
                            <li class="ml-2"><a style="font-size:12px; letter-spacing: 0.5px;  color: rgb(143, 156, 156);  font-weight: bold;"><i>{{ $posts->title }}</i></a></li>

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
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div>
                            <div class="post-meta">
                                <a href="#">{{$posts['created_at']->toDateString()}} / {{$posts['created_at']->diffForHumans()}}</a>
                                <a href="archive.html">inews</a>
                            </div>
                            <h3 class="post-title"><b>{{ $posts->title }}</b></h3>

                            <div class="post-meta-2">
                                <!-- <span class="mr-30"><i class="fa fa-eye" aria-hidden="true"></i> {{ $posts->views }}</span>
                                <span id="btn-like"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>

                                    <span id="like-value">{{ $posts->likes }}</span>
                                </span> -->

                                <button style="font-size: 10px; letter-spacing: 1px;" type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View {{ $posts->views }}</button>

                                <span class="btn btn-danger ml-2" style=" font-size: 10px; letter-spacing: 1px;" id="btn-like"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>

                                    <span id="like-value"> Thích {{ $posts->likes }}</span>
                                </span>

                                <!-- <button style="font-size: 10px; letter-spacing: 1px;color:white; background-color: #4167b2;" type="button" class="btn ml-2"><i class="fas fa-share-square"></i> Chia sẻ</button>

                                <div    style="font-size: 10px !important; letter-spacing: 1px;         color:white; height: 30px !important;"
                                        class="fb-share-button ml-2" 
                                        data-href="{{ route('xembaiviet', $posts->slug) }}" 
                                        data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Faptech-php-20-lexuanthien%2FPROJECT%2Fwebsite-tintuccongnghe%2Fresources%2Fviews%2Fpage_home%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                                </div> -->
                                
                                <!-- NÚT THÍCH VÀ CHIA SẺ FACEBOOK -->
                                <div class="row">
                                <div class=" col-12 fb-like mt-2" 
                                    data-href="{{ route('xembaiviet', $posts->slug) }}" 
                                    data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                                </div>
                                </div>

                            </div>
                            <hr>

                            <p><b>{{ $posts->description }}</b></p>
                            <img src="/uploads/posts/{{$posts->image}}">
                            <p>{!! $posts->content !!}</p>

                            <hr>
                            <div    class="fb-like mt-2" 
                                    data-href="{{ route('xembaiviet', $posts->slug) }}" 
                                    data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                            </div>

                            <hr>
                        </div>
                    </div>

                    <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                        <div class="section-heading">
                            <h5>TIN TỨC LIÊN QUAN</h5>
                        </div>

                        <div class="row">
                            @foreach($tinlienquan as $postlienquan)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="/uploads/posts/{{$postlienquan->image}}">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('xembaiviet', $postlienquan->slug) }}" class="post-title">{{$postlienquan->title}}</a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>BÌNH LUẬN</h5>
                        </div>
                       

                        <ol>
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div>
                                    @foreach($posts->comments as $comment)
                                    <div>
                                        <a style="color: rgb(75, 105, 23); font-weight: bold;font-size: 16x; letter-spacing: 2px;">{{ $comment->user->name }}<span> / </span> {{ $comment->created_at }} </a>
                                        <p>{{ $comment->content_comment }}</p>

                                    </div>
                                    <br>
                                    @endforeach
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                        <div class="section-heading">
                            <h5>VIẾT BÌNH LUẬN</h5>
                        </div>
                        @guest
                            <p>Đăng nhập hoặc đăng ký để viết bình luận nhé !</p>

                            <div class="d-flex mt-3">
                                <a  id="dangky" href="{{ route('login') }}" class="btn btn-light rounded-0 mag-btn w-50 mr-3">LOGIN</a>
                                <a  id="dangky" href="{{ route('register')}}" class="btn btn-light rounded-0 mag-btn w-50 ml-3">REGISTER</a>
                            </div>
                            
                        @else
                        <div class="contact-form-area">
                           
                            <form action="{{ route('comment', $posts-> id)}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <textarea name="comment" class="form-control" cols="30" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endguest
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


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=561340754431690&autoLogAppEvents=1"></script>

    <script type="text/javascript">
        window.onload = function() {
            $("#btn-like").click(function(e) {
                console.log("vao roi ne");

                e.preventDefault();

                $.ajax({

                    type: 'POST',

                    url: '/api/posts/like/{{$posts->id}}',

                    success: function(data) {
                        if (data.success) {

                            $("#like-value").text(data.value)
                            console.log("Like thanh cong");

                        }

                    }

                });



            });
        }
    </script>
</body>

</html>