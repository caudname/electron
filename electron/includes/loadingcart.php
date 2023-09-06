<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        require("db_connect.php");

        $result = mysqli_query($link,"SELECT * FROM cart, products WHERE cart.ip = '{$_SERVER['REMOTE_ADDR']}' AND products.id = cart.product_id");
        
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            do
            {
                $count = $count + $row["count"];
            }
            while ($row = mysqli_fetch_array($result));
            echo $count;
        }
        else
        {
            echo '0';
        }
    }
?>