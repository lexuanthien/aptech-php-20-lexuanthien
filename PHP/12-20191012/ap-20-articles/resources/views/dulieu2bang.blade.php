
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Dữ liệu 2 bảng</title>

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
                <button type="submit" class="btn btn-info rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1>DỮ LIỆU CỦA 2 BẢNG</h1>
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
        <table class="table table-bordered"> <!-- comment: ctrl + k + c -->
            <thead>
              <tr class="text-center">
                
              <?php
                $array = ['ID','TITLE','DESCRIPTION','CONTENT', 'NAME', 'DESCRIPTION_CAT','CAT_ID'];
                for($i=0;$i < count($array); $i++) {
                echo "<th>" . $array[$i] . "</th>"; 
                }
              ?>
                
              </tr>
            </thead>
        
            <tbody>
                @for($i = 0; $i < count($data2table); $i++)
                  <tr class="text-center">
                    <td> {{ $data2table[$i]-> id }} </td>
                    <td> {{ $data2table[$i]-> title }} </td>
                    <td> {{ $data2table[$i]-> description }} </td>
                    <td> {{ $data2table[$i]-> content }} </td>
                    <td>{{ $data2table[$i]-> name }}</td>
                    <td>{{ $data2table[$i]-> description_cat }}</td>
                    <td>{{ $data2table[$i]-> cat_id }}</td>

                   
                    
                    
                  </tr>
                @endfor
            </tbody>
          </table>
        </div>

        

    </div>
</body>
</html>