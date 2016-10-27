<div class="container">
    <div class="container">

        <form action="products?products=<?=$_GET['products']?>" method="POST" role="form">

            <div class="form-group">
                <p><label for="name">Product Name</label></p>
                <input id="name" class="form-control" type="text" name="update_product[name]" value=<?=$data['title']?>
                required>
            </div>
            <div class="form-group">
                <p><label for="descr">description</label></p>
                <textarea id="descr" class="form-control" name="update_product[description]"
                rows="10" cols=""><?=$data['description']?></textarea>
            </div>
            <div class="form-group">
                <p><label for="price">Price</label></p>
                <input id="price" class="form-control" type="text" name="update_product[price]" required
                       value=<?=$data['price']?>>
            </div>
            <input  name="update_product[id]" type="hidden" value=<?=$data['id']?>>
            <input  name="update_product[category_id]" type="hidden" value=<?=$data['category_id']?>>
            <input type="submit" value="Update" id="submit" class="btn btn-default"/>
        </form>
    </div>
</div>
