<div class="container">
    <div class="container text-center text-warning">
        Category ID <?=$_GET['products']?>
    </div>
    <div class="container">
        <h4><a href=/admin/products?create_product=<?=$_GET['products']?>>Create new product</a></h4>
    </div>

        <table class="table table-bordered table-striped table-responsive">
            <tr >
                <th class='text-center'>ID</th>
                <th class='text-center'>Title</th>
                <th class='text-center'>Description</th>
                <th class='text-center'>Price</th>
                <th class='text-center'>Delete</th>
                <th class='text-center'>Update</th>
            </tr>
    <?php
        if($data){
            foreach ($data as $key => $value) {
                echo "<tr class='text-center'>";
                echo "<td>".$value['id']."</td>";
                echo "<td>".$value['title']."</td>";
                echo "<td>".$value['description']."</td>";
                echo "<td>".$value['price']."</td>";
                echo "<td><a href=/admin/products?delete_product=".$value['id']."&&products=".$_GET['products'].">Delete</a></td>";
                echo "<td><a href=/admin/products?update_product=".$value['id']."&&products=".$_GET['products'].">Update</a></td>";
                echo "<tr>";
            }
        }
            echo "</table>";
      ?>
</div>