<div class="container">
    <form action="/admin/products?products=<?=$_GET['create_product']?>" method="POST" role="form">
        <div class="form-group">
            <p><label for="name">Product Name</label></p>
            <input id="name" class="form-control" type="text" name="create_product[name]" required>
        </div>
        <div class="form-group">
            <p><label for="descr">description</label></p>
            <textarea id="descr" class="form-control" name="create_product[description]" rows="10" cols=""></textarea>
        </div>
        <div class="form-group">
            <p><label for="price">Price</label></p>
            <input id="price" class="form-control" type="text" name="create_product[price]" required>
        </div>

        <input  name="create_product[category_id]" type="hidden" value=<?=$_GET['create_product']?>>
        <input type="submit" value="Create" id="submit" class="btn btn-default"/>
    </form>
</div>
