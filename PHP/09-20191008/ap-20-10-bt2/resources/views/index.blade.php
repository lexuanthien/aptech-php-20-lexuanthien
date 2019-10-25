
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Table Users</title>

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
              <form action="/hienthidulieunguoidung" method="GET">
                <button type="submit" class="btn btn-primary rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1>LARAVEL TABLE USERS.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>

    <div class="container">
        <span class="badge badge-success">INDEX PAGE</span>
        <div class='pt-3'>
        <table class="table table-bordered"> <!-- comment: ctrl + k + c -->
            <thead  class='table-info'>
              <tr class="text-danger text-center">
                
              <?php
                $array = ['#','NAME','EMAIL','PASSWORD', 'ACTION'];
                for($i=0;$i < count($array); $i++) {
                echo "<th>" . $array[$i] . "</th>"; 
                }
              ?>
                
              </tr>

            </thead>
        
            <tbody class="table-secondary">
        
                @for($i = 0; $i < count($users); $i++)
                  <tr class="text-center">
                    <td> {{ $users[$i]-> id }} </td>
                    <td> {{ $users[$i]-> name }} </td>
                    <td> {{ $users[$i]-> email }} </td>
                    <td> {{ $users[$i]-> password }} </td>

                    <td class="d-flex justify-content-center">

                      <form action="{{ route('user.show', $users[$i]->id )}}" method ="GET"> <!-- action su dungj link trong phan Route (hienthidulieunguoidung) (kiểu gan Route vao), bien $users la ten bien duoc gan du lieu ben controller chuyen qua -->
                          <button type="submit" class="btn btn-primary">Show</button>
                      </form>
                      
                      <form action="/hienthidulieunguoidung/{{ $users[$i]-> id }}/edit" method="GET">
                          <button type="submit" class="btn btn-warning mx-3">Edit</button>
                      </form>

                      <form action="/hienthidulieunguoidung/{{ $users[$i]-> id }}" method ="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  
               @endfor

            </tbody>
          </table>
        </div>
    </div>

    <hr>
    <div class="container mb-5">
        <div class="row">
            <div class="col-6 pt-1"><a class="text-muted">LARAVEL TABLE USERS.</a></div>

            <div class="col-6 d-flex justify-content-end">
              <form action="/hienthidulieunguoidung/create" method="GET">
                <button type="submit" class="btn btn-info rounded-0 font-weight-bold">TẠO MỚI NGƯỜI DÙNG</button>
              </form>  
            </div>
        </div>    
    <div>
</body>
</html>