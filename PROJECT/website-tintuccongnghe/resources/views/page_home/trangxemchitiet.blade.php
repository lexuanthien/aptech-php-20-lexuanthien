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
                        <h6 style="letter-spacing: 3px; color:white;">"{{ $posts->title }}"</h6>

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
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{$posts['created_at']->toDateString()}} / {{$posts['created_at']->diffForHumans()}}</a>
                                <a href="archive.html">inews</a>
                            </div>
                            <h4 class="post-title">{{ $posts->title }}</h4>

                            <div class="post-meta-2">
                                <span class="mr-30"><i class="fa fa-eye" aria-hidden="true"></i> {{ $posts->views }}</span>
                                <span id="btn-like"> <i class="fa fa-thumbs-up" aria-hidden="true"></i>

                                    <span id="like-value">{{ $posts->likes }}</span>
                                </span>



                            </div>
                            <p><b>{{ $posts->description }}</b></p>
                            <img height="300px" src="/uploads/posts/{{$posts->image}}">
                            <p>{!! $posts->content !!}</p>

                            <!-- Like Dislike Share -->
                            <div class="like-dislike-share my-5">
                                <!-- <div id="fb-root"></div>
                                <div class="fb-share-button" data-href="http://localhost:8000/show/a" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fshow%2F{{$posts->slug}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div> -->
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Share</a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i> Share on Twitter</a>
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
                                        <a href="single-post.html" class="post-title">{{$postlienquan->title}}</a>

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

                        <ol class="m-4">
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div>
                                    @foreach($posts->comments as $comment)
                                    <div>
                                        <a style="color: rgb(75, 105, 23); font-weight: bold;font-size: 16x; letter-spacing: 3px;"> <span> / </span> {{ $comment->created_at }} </a>
                                        <p class="mb-4">{{ $comment->content_comment }}</p>

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

                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12 my-3">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-success">Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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