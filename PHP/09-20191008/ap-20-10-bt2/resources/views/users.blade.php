
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Table Users Ver2.</title>
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
  <h1 class="text-center"><i>BẢNG Users Ver2.</i></h1>

   <table class="table table-bordered"> <!-- comment: ctrl + k + c -->
    <thead  class='table-info'>
      <tr class="text-danger text-center">
        <?php
           $array = ['ID','NAME','EMAIL','PASSWORD'];
            for($i=0;$i < count($array); $i++) {
               echo "<th>" . $array[$i] . "</th>"; 
            }
        ?>
      </tr>
    </thead>

    <tbody class="table-secondary">

      <tr>
        @for($i = 0; $i < count($dulieuusers); $i++)
            <tr>
                <td> {{ $dulieuusers[$i]-> id }} </td>
                <td> {{ $dulieuusers[$i]-> name }} </td>
                <td> {{ $dulieuusers[$i]-> email }} </td>
                <td> {{ $dulieuusers[$i]-> password }} </td>
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




@for($i = 0; $i < count($dulieuusers); $i++)
    <p>Tiêu đề bài viết {{$i}} là {{$dulieuusers[$i]->name}}
</p>
@endfor


