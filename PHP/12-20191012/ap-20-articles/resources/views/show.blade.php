
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Show Articles</title>
  
</head>
<body>
  <div class="container">
    <h1 class="text-center m-3">TABLE SHOW ARTICLE</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>description</th>
              <th>Content</th>
              <th>Action</th>
              
          </tr>
        </thead>
        <tbody>
        <tr>
              <td>{{ $article-> id}}</td>
              <td>{{ $article-> title}}</td>
              <td>{{ $article-> description}}</td>
              <td>{{ $article-> content}}</td>
              <td>
                <form action="{{ route('articles.index')}}" method='GET'>
                 
                  <button type="submit" class="btn btn-warning font-weight-bold">HOME</button>
                </form>  
              </td>
              
          </tr>
        </tbody>
    </table>
</div> 
</body>
</html>