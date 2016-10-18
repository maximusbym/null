<script>
    $(document).ready(function () {
        jQuery('.buy-product').click( function() {
            var productId = $(this).attr('data-id');

            $.ajax({
                url: '/add-product-to-cart',
                data: { id: productId },
                method: "POST",
                dataType: "JSON",
                success: function( data ) {
                    if( data.amount > 0 ) {
                        $('.cart').html('In basket '+data.amount+' product');
                    }
                }
            });
        });
    })

</script>

<div class="container">
<?php
foreach ($data as $value){
    echo "Product: ".$value['title']."<br>";
    echo "Price: ".$value['price']."<br>";
    echo "Description: ".$value['description']."<br>";
    echo "Product ID: ".$value['id']."<br>";
//var_dump($_SESSION['cart']);
//    $_SESSION['cart']['products'][] = 1;
//    $_SESSION['cart']['products'][] = 2;
//    var_dump($_SESSION);
//    $_SESSION['cart']['products2'][] = 0;
//    $_SESSION['cart']['products1'][] = ;
  //  var_dump($_SESSION);
}
?>
    <button class="buy-product btn" data-id="<?=$data[0]['id']?>">BUY</button>

</div>