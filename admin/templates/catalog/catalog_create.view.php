<div class="container">
    <form action="/admin/catalog" method="POST" role="form">
        <div class="form-group">
            <p><label for="name">Category name</label></p>
            <input id="name" class="form-control" type="text" name="create_catalog" placeholder="New Category name" required>
        </div>
        <input type="submit" value="Create" id="submit" class="btn btn-default"/>
    </form>
</div>
