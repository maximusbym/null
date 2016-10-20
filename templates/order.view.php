<form method="post" action="/order">
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Product</td>
                <td>Price</td>

            </tr>
        <?php
        $totalPrice = 0;
            foreach ($data as $key => $value) {
                echo "<tr>";
                echo "<td>".$value[0]['title']."</td>";
                echo "<td>".$value[0]['price']."</td>";

                $totalPrice += $value[0]['price'];
                echo "<tr>";
            }
            echo "</table>";
            echo "<div class='container'><h5>Total price: ".$totalPrice."</h5></div>";
        ?>

   <div class="container">
        <input type="submit" value="Confirm" class="btn btn-default">
   </div>
    </div>
    </form>
<?php