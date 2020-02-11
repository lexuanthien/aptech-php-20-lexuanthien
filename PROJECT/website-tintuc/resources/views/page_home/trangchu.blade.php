<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Website Tin Tức Công Nghệ Hàng Đầu - Tin Tức Mỗi Ngày</title>

    <link rel="icon" href="{{ url('http://localhost:8000/websitenews/image/logo.jpg') }}">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/websitenews/css/style.css') }}">

</head>

<body>

    @include('page_home.layout.menu')

    <section class=" d-flex flex-wrap">
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>MỚI NHẤT</h5>
                </div>

                <!-- Single Blog Post -->
                <?php $new = $posts->sortByDesc('created_at')->take(10);

                ?>
                @foreach($new->all() as $moinhat)
                <div class="single-blog-post d-flex">

                    <div class="post-thumbnail">
                    <a href="{{ route('xembaiviet', $moinhat->slug) }}"><img src="uploads/posts/{{ $moinhat->image }}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <a href="{{ route('xembaiviet', $moinhat->slug) }}" class="post-title">{{ $moinhat->title}}</a>
                        <a class="categorymoinhat">{{ $moinhat->category->name}}</a>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>ĐÁNH GIÁ</h5>
                </div>

                <!-- Single Blog Post -->
                <?php $danhgia = $posts->where('category_id',5)->sortByDesc('created_at')->take(5);

                ?>
                @foreach($danhgia as $tindanhgia)
                <div class="single-blog-post d-flex">

                    <div class="post-thumbnail">
                    <a href="{{ route('xembaiviet', $tindanhgia->slug) }}"><img src="uploads/posts/{{ $tindanhgia->image }}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <a href="{{ route('xembaiviet', $tindanhgia->slug) }}" class="post-title">{{ $tindanhgia->title }}</a>
                        <a class="categorymoinhat">{{$tindanhgia['created_at']->toDateString()}}</a>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>CÔNG NGHỆ</h5>
                </div>

                <!-- Single Blog Post -->
                <?php $congnghe = $posts->where('category_id',4)->sortByDesc('created_at')->take(5);

                ?>
                @foreach($congnghe as $tincongnghe)
                <div class="single-blog-post d-flex">

                    <div class="post-thumbnail">
                    <a href="{{ route('xembaiviet', $tincongnghe->slug) }}"><img src="uploads/posts/{{ $tincongnghe->image }}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <a href="{{ route('xembaiviet', $tincongnghe->slug) }}" class="post-title">{{ $tincongnghe->title }}</a>
                        <a class="categorymoinhat">{{$tincongnghe['created_at']->toDateString()}}</a>
                    </div>

                </div>
                @endforeach
            </div>

        </div>

        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="row mt-1">
                    <div class="col-12">
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
                                <div>
                                    <a><img id="image_carousel" src="uploads/posts/{{ $tin->image }}" alt="Los Angeles"><a>
                                </div>
                                <div class="carousel-caption text-left darken-pseudo darken-with-text">
                                    <a href="{{ route('xembaiviet', $tin->slug) }}" id= "titlecarousel">{{ $tin['title'] }}</a>
                                    <p><a id="reading" class="btn btn-outline-light rounded-0 mt-3" href="{{ route('xembaiviet', $tin->slug) }}"  role="button">CONTINUE READING</a></p>
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
                </div>
            </div>

            <div class="feature-video-posts mb-30 mt-30">
                <!-- Section Title -->
                @foreach($categories->take(3) as $category)
                <div class="section-heading">
                    <h5>{{ $category->name }}</h5>
                </div>

                <div class="featured-video-posts mb-4">
                    <div class="row">

                        <?php $data = $category->posts->sortByDesc('created_at')->take(6);
                        $post_doc = $data->shift();
                        ?>

                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <a href="{{ route('xembaiviet', $post_doc->slug) }}"> <img src="uploads/posts/{{ $post_doc['image'] }}" alt=""></a>    
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a >{{$tin['created_at']->toDateString()}} / {{$tin['created_at']->diffForHumans()}}</a>
                                        <a >inews</a>
                                    </div>
                                    <a  href="{{ route('xembaiviet', $post_doc->slug) }}" class="post-title">{{$post_doc['title']}}</a>
                                    <p>{{$post_doc['description']}}</p>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="{{ route('xembaiviet', $post_doc->slug) }}" class="btn" role="submit">CONTINUE READING</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">
                                @foreach($data->all() as $tin)
                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3 mb-4">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('xembaiviet', $tin->slug) }}"> <img src="uploads/posts/{{ $tin->image}}" alt=""></a>
                                           
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('xembaiviet', $tin->slug) }}" class="post-cate">{{$tin['title']}}</a>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- PHẦN BÊN PHẢI -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        @include('page_home.layout.phanbenphai')
        <!-- PHẦN BÊN PHẢI -->
        </div>
    </section>

    <!-- FOOTER -->
    @include('page_home.layout.footer')
    <!-- FOOTER -->

</body>

</html>