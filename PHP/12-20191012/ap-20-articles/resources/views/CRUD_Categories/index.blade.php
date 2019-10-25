<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Categories</title>

    <style>
        .homee {
            padding: 5px;
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container pt-3">
        <div class="row">
            <div class="col-3 pt-2">
              <form action="" method="GET">
                <button type="submit" class="btn btn-danger rounded-0 font-weight-bold" href="#">CATEGORY</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1>TRANG CHỦ BẢNG Categories.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>

    <div class="container">
        <form action="{{ route('categories.create')}}" method="GET">
          <button type="submit" class="btn btn-info">CREATE Categories</button>
        </form>
        
        <div class='pt-3'>  
        <table class="table table-bordered"> 
            <thead>
              <tr class="text-center">
                
              <?php
                $array = ['ID','NAME','DESCRIPTION_CAT','ACTION'];
                for($i=0;$i < count($array); $i++) {
                echo "<th>" . $array[$i] . "</th>"; 
                }
              ?>
                
              </tr>
            </thead>
        
            <tbody>
                @for($i = 0; $i < count($categories); $i++)
                  <tr class="text-center">
                    <td> {{ $categories[$i]-> id }} </td>
                    <td> {{ $categories[$i]-> name }} </td>
                    <td> {{ $categories[$i]-> description_cat }} </td>

                    <td class= "d-flex">
                      <form action="{{ route('categories.show', $categories[$i]-> id )}}" method ="GET">
                          <button type="submit" class="btn btn-success">XEM</button>
                      </form>
                      <form action="{{ route('categories.edit', $categories[$i]-> id )}}" method="GET">
                          <button type="submit" class="btn btn-primary mx-3">SỬA</button>
                      </form>
                      <form action="{{ route('categories.destroy', $categories[$i]-> id )}}" method ="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-secondary">XÓA</button>
                      </form>
                    </td> 
                    
                  </tr>
                @endfor
            </tbody>
          </table>
        </div>

        

    </div>
</body>
</html>



@foreach($categories as $category) 
     {{ $category-> id }}
     {{ $category-> name }}
     {{ $category-> description_cat }}
     <hr>
@endforeach

