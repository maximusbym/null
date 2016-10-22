<form method="post" action="/order">
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Product</td>
                <td>Price</td>
                <td>Delete</td>
            </tr>
        <?php
        $totalPrice = 0;
        if($data){
            foreach ($data as $key => $value) {

                echo "<tr>";
                echo "<td>".$value[0]['title']."</td>";
                echo "<td>".$value[0]['price']."</td>";
                echo "<td><a href=/basket?delete=".$value[0]['id'].">X</a>";
                $totalPrice += $value[0]['price'];
                echo "<tr>";
            }
        }
            echo "</table>";
            echo "total price: ".$totalPrice;

        ?>

            <div class="container">
                <input type="submit" value="Order" class="btn btn-default">
            </div>
        </div>
    </form>
<?php
