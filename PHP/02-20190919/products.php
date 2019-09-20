<?php

    $products = [
        'iphone 11' => [
            'price' => 1099,
            'made' => [
                'in' => 'China',
                'by' => 'California'
            ]
        ],
        'note 9' => [
            'price' => 1099,
            'made' => [
                'in' => 'VietNam',
                'by' => 'Korean'
            ]
        ],
        'mua tai' => 'namcoi.com'
    ];

    //echo "<h1>Mua tại webstie " . $products['mua tai'] . "</h1>";
   
    
    /*echo "<table>";
        echo "<tr>";
            echo "<th>Tên Sản Phẩm</th>";
            echo "<th>Price</th>";
            echo "<th>Made in</th>";
            echo "<th>Made by</th>";
        echo "</tr>";

        echo "<tr>";
            //echo "<td>" $products['0'] . "</td>";
            echo "<td>";
                echo $products[i];
            echo"</td>";

            echo "<td>";
                echo $products.$iphone11['price'];
            echo"</td>";
        echo "</tr>";
    echo "</table>";
    */

    //th: in đậm
    //td: thường

    //array_keys() : là 1 function đc tạo ra để lấy key

    $tenCuaSp = array_keys($products);
?>    



<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

    <h1>Mua tại website <?php echo $products['mua tai']; ?></h1>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Made In</th>
                <th>Made By</th>
            <tr>
            

        </thead>
        <tbody>
            <tr>
                <td><?php echo $tenCuaSp[0]; ?></td>
                <td><?php echo $products['iphone 11']['price']; ?></td>
                <td><?php echo $products['iphone 11']['made']['in']; ?></td>
                <td><?php echo $products['iphone 11']['made']['by']; ?></td>
            <tr>
            
            <tr>
                <td><?php echo $tenCuaSp[1]; ?></td>
                <td><?php echo $products['note 9']['price']; ?></td>
                <td><?php echo $products['note 9']['made']['in']; ?></td>
                <td><?php echo $products['note 9']['made']['by']; ?></td>
            <tr>
            <tr>
                <td>Tổng</td>
                <td><?php echo ($products['iphone 11']['price'] + $products['note 9']['price']); ?></td>
                
            <tr>

            
            
        </tbody>

    </table>
    <br>
    <br>



    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Made In</th>
                <th>Made By</th>
            <tr>
            

        </thead>
        <tbody>
        <?php
            // có dùng $tenCuaSp = array_keys($products);
            //$tong = 0;
            for ($i = 0; $i < count($products) - 1; $i++) {
                    //$tong = $tong + $products[$tenCuaSpham[$i]]['price'];

                    ?>
                        <tr>
                            <td><?php echo $tenCuaSp[$i]; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['price']; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['made']['in']; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['made']['by']; ?></td>
                        <tr>


                    <?php } 


        ?>

            
            
        </tbody>

    </table>
</body>
</html>