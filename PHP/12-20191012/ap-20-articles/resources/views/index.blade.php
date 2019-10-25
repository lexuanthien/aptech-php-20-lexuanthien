
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Articles</title>
</head>
<body>
  <div class="m-4">
    <form action="{{ route('articles.create')}}" method="GET">
      <button type="submit" class="btn btn-success">TẠO BÀI VIẾT MỚI</button>
    </form>
    <hr>
  </div>
  @for($i = 0; $i < count($articles); $i++)
  <div class="m-4">
    <h5 class="text-info">Categories name: <i><a class="text-danger" href="{{ route('categories.index')}}">{{ $articles[$i]->category["name"] }}</a></i></h5>
    <h4>{{ $articles[$i]-> title }} </h4>
    <p>{{ $articles[$i]-> description }}</p>
    <p>{{ $articles[$i]-> content }}</p>
    
    <div class="d-flex">
        <form action="{{ route('articles.show', $articles[$i]-> id)}}" method ="GET">
          <button type="submit" class="btn btn-primary">XEM</button>
        </form>
        <form action="{{ route('articles.edit', $articles[$i]-> id )}}" method="GET">
          <button type="submit" class="btn btn-warning mx-3">SỬA</button>
        </form>
        <form action="{{ route('articles.destroy', $articles[$i]-> id) }}" method ="POST">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-danger">XÓA</button>
        </form>
    </div>
    <hr>
  </div>
          
  @endfor

    <!--  <div class="container pt-3">
        <div class="row">
            <div class="col-3 pt-2">
              <form action="" method="GET">
                <button type="submit" class="btn btn-info rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1>TRANG CHỦ BẢNG ARTICLES.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>

    <div class="container">
        <div>
            <span class="badge badge-secondary">HOME PAGE</span>
            <hr>
        </div>  
        <div class="mt-2">
        <form action="{{ route('articles.create')}}" method="GET">
          <button type="submit" class="btn btn-success">TẠO BÀI VIẾT MỚI</button>
        </form>
        </div>
        <div class='pt-3'>  
        <table class="table table-bordered"> 
            <thead>
              <tr class="text-center">
                
              <?php
                //$array = ['ID','TITLE','DESCRIPTION','CONTENT', 'CATEGORY_ID', 'ACTION'];
                //for($i=0;$i < count($array); $i++) {
                //echo "<th>" . $array[$i] . "</th>"; 
               // }
              ?>
                
              </tr>
            </thead>
        
            <tbody>
                @for($i = 0; $i < count($articles); $i++)
                  <tr class="text-center">
                    <td> {{ $articles[$i]-> id }} </td>
                    <td> {{ $articles[$i]-> title }} </td>
                    <td> {{ $articles[$i]-> description }} </td>
                    <td> {{ $articles[$i]-> content }} </td>
                    <td> {{ $articles[$i]-> cat_id }} </td>

                    <td class= "d-flex">
                      <form action="{{ route('articles.show', $articles[$i]-> id)}}" method ="GET">
                          <button type="submit" class="btn btn-primary">XEM</button>
                      </form>
                      <form action="{{ route('articles.edit', $articles[$i]-> id )}}" method="GET">
                          <button type="submit" class="btn btn-warning mx-3">SỬA</button>
                      </form>
                      <form action="{{ route('articles.destroy', $articles[$i]-> id) }}" method ="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-danger">XÓA</button>
                      </form>
                    </td> 
                    
                  </tr>
                @endfor
            </tbody>
          </table>
        </div>
    </div>
</body>
</html> -->

