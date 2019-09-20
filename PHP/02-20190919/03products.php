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

        //sử dụng foreach, không sử dụng hàm array_keys

    ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            table,
            thead,
            tbody,
            tr, td, th {
                border: 1px solid darkcyan;
            }
        </style>
       
    </head>
    <body>
<table>        

    <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Made In</th>
                <th>Made By</th>
        </tr>
            

    </thead>
    <tbody>
        <?php
            foreach($products as $key => $value) {
               // if(isset($products['price'])) {
                    ?>
                        <tr>
                            <td><?php echo($key); ?></td>
                            <td><?php echo $products[$key]['price']; ?></td>
                            <td><?php echo $products[$key]['made']['in']; ?></td>
                            <td><?php echo $products[$key]['made']['by']; ?></td>
                        <tr> 
                    <?php
                    
                    //if($key > length($key) {
                        //unset($products[$key]);
                        //$key = $key - 1;
                   // }

                //    if($key == $products['mua tai']) {
                //     //$key = $key - 1;
                //     unset($products['mua tai']);
                 
            //}   
            }
            
        ?>
        

            
            
    </tbody>

</table>
        
</body>
</html>