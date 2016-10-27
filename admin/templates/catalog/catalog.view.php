
<div class="container">
    <div class="container">
        <h4><a href=/admin/catalog?create>Create new category</a></h4>
    </div>

        <table class="table table-bordered table-striped">
            <tr >
                <th class='text-center'>ID</th>
                <th class='text-center' >Name</th>
                <th class='text-center'>Delete</th>
                <th class='text-center'>Update</th>
                <th class='text-center'>Products</th>

            </tr>
        <?php

        if($data){
            foreach ($data as $key => $value) {
                echo "<tr class='text-center'>";
                echo "<td>".$value['id']."</td>";
                echo "<td>".$value['title']."</td>";
                echo "<td><a href=/admin/catalog?delete=".$value['id'].">Delete</a></td>";
                echo "<td><a href=/admin/catalog?update=".$value['id'].">Update</a></td>";
                echo "<td><a href=/admin/products?products=".$value['id'].">Products</a></td>";



                echo "<tr>";
            }
        }
            echo "</table>";


        ?>
</div>