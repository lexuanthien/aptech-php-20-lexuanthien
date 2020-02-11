<head>
    <title>{{ $data->title }}</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/websitenews/css/style.css') }}">

    <link rel="icon" href="{{ url('http://localhost:8000/websitenews/image/logo.jpg') }}">


    <!-- SEO -->
    <meta property="og:url" content="http://localhost:8000/show/{{$data->slug}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$data->title}}" />
    <meta property="og:description" content="{{$data->description}}" />
    <meta property="og:image" content="{{$data->image}}" />
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=561340754431690&autoLogAppEvents=1"></script> -->
</head>