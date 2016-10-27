<?php
if ($action == 'products'){
    if (!empty($_POST)) {
        $createProduct = isset($_POST['create_product']) ? $_POST['create_product'] : null;
        $updateProductPost = isset($_POST['update_product']) ? $_POST['update_product'] : null;
        if($updateProductPost){
            $productInfoU = $_POST['update_product'];
            $idP = $productInfoU['id'];
            $nameP = $productInfoU['name'];
            $descriptionP = $productInfoU['description'];
            $priceP = $productInfoU['price'];
            $categoryP =$productInfoU['category_id'];
            $updateP = updateProduct($pdo,$idP,$nameP,$descriptionP,$priceP);

        }
        // create product
        if ($createProduct){
            $productInfo = isset($_POST['create_product']) ? $_POST['create_product']: null;
            $nameP = $productInfo['name'];
            $descriptionP = $productInfo['description'];
            $priceP = $productInfo['price'];
            $categoryP =$productInfo['category_id'];
            $newProduct = createProduct($pdo,$nameP,$descriptionP,$priceP,$categoryP);
        }
    }
    if (!empty($_GET)) {
        $productsCategory = isset($_GET['products']) ? $_GET['products'] : null;
        $create_product = isset($_GET['create_product']) ? $_GET['create_product'] : null;
        $delete_product = isset($_GET['delete_product']) ? $_GET['delete_product'] : null;
        $update_product = isset($_GET['update_product']) ? $_GET['update_product'] : null;

        if(isset($delete_product)){

            $deleteP = deleteProductById($pdo,$delete_product);
        }


    }

     if (isset($create_product)){
         view('products/create_products');
    }elseif (isset($update_product)){
         $products = getProductById($pdo,$update_product);
         view('products/update_product',$products);
     }else{
         $products = getProductsByCategory($pdo,$productsCategory);
         view('products/products_category',$products);
    }
}