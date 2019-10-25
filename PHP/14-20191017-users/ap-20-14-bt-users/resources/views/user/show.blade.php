<!--$users-->

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
</head>
<body>
    <div class="container mt-2">
    <h1 class="text-center text-info">TABLE USERS.</h1>
    <hr>
    
        <div class="row">
            <div class="col-6 pt-1"><span class="badge badge-success">INDEX PAGE</span></div>

            <div class="col-6 d-flex justify-content-end">
              <form action="" method="GET">
                <button type="submit" class="btn btn-info rounded-0 font-weight-bold">TẠO MỚI NGƯỜI DÙNG</button>
              </form>  
            </div>
        </div>    
    
    <table class="table table-bordered mt-3">
        <thead>
            <tr class="text-center text-secondary">
                <?php
                    $userArray = ['#','NAME','EMAIL','PASSWORD','CREATED_AT','UPDATED_AT','ACTION'];
                    for($i=0 ; $i < count($userArray); $i++) {
                        echo "<th>" . $userArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center">
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->updated_at }}</td>
                    <td class="d-flex justify-content-center">
                        
                        <form>
                            <button type="button" class="btn btn-warning mx-4">EDIT</button>
                        </form>
                        <form>
                            <button type="button" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                <tr>
        </tbody>
    </table>
    </div>
</body>
</html>

