
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    h1 {
        color:MediumSeaGreen;
        margin: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1 class="text-center"><i>HAI BẢNG DỮ LIỆU</i></h1>

   <table class="table table-bordered"> <!-- comment: ctrl + k + c -->
    <thead  class='table-info'>
      <tr class="text-danger text-center">
        <?php
           $array = ['ID','TITLE','CONTENT','CATEGORY_ID','NAME'];
            for($i=0;$i < count($array); $i++) {
               echo "<th>" . $array[$i] . "</th>"; 
            }
        ?>
      </tr>
    </thead>

    <tbody class="table-secondary">

      <tr>
        @for($i = 0; $i < count($data); $i++)
            <tr>
                <td> {{ $data[$i]-> id }} </td>
                <td> {{ $data[$i]-> title }} </td>
                <td> {{ $data[$i]-> content }} </td>
                <td> {{ $data[$i]-> category_id }} </td>
                <td> {{ $data[$i]-> name }} </td>

            </tr>
            
        @endfor
      </tr>
      
    </tbody>
  </table>
</div>
<br>
<br>
</body>
</html>

