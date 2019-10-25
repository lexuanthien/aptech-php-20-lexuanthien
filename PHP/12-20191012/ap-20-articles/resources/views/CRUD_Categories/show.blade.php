<h2>{{ $category-> name }}</h2>
@foreach($category->articles as $article)
    <a href="{{ route('categories.show', $article->id) }}">{{$article->title}}</a>
    <br>
@endforeach
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Show Categories</title>
  
</head>
<body>
  <div class="container">
    <h1 class="text-center m-3">TABLE SHOW Categories</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>description_cat</th>  
          </tr>
        </thead>
        <tbody>
        <tr>
              <td>{{ $category-> id}}</td>
              <td>{{ $category-> name}}</td>
              <td>{{ $category-> description_cat}}</td>
              
              
          </tr>
        </tbody>
    </table>
</div> 
</body>
</html> -->