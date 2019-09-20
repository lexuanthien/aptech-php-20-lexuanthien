<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
</head>
<body>
<table>
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

        $tenCuaSp = array_keys($products);
    ?>    
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
            $tong = 0;
            for ($i = 0; $i < count($products) - 1; $i++) {
                    echo $tong;
                    $tong = $tong + $products[$tenCuaSp[$i]]['price'];

                    ?>
                        <tr>
                            <td><?php echo $tenCuaSp[$i]; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['price']; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['made']['in']; ?></td>
                            <td><?php echo $products[$tenCuaSp[$i]]['made']['by']; ?></td>
                        <tr>
                        


                    <?php } 
                    


        ?>
        <tr>
            <td>Tổng</td>
            <td><?php echo $tong ?></td>
        <tr>

            
            
        </tbody>

    </table>
</body>
</html>