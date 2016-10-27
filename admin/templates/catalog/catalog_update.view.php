
    <div class="container">
        <form action="/admin/catalog" method="POST" role="form">
                <input id="id" name="catalog[id]" class="form-control" required type="hidden" value="<?=$data['id']?>">
            <div class="form-group">
                <p><label for="name">Name</label></p>
                <input id="name" class="form-control" type="text" name="catalog[name]" value="<?=$data['title']?>" required>
            </div>
            <input type="submit" value="Update" id="submit" class="btn btn-default"/>
        </form>
    </div>
