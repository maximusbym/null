<div class="container">
<?php
foreach ($data as $value){
    echo "Product: ".$value['title']."<br>";
    echo "Price: ".$value['price']."<br>";
    echo "Description: ".$value['description']."<br>";
    echo "Product ID: ".$value['id']."<br>";
}
?>

    <input type="button" class="btn" value="Buy">
</div>