<div class="container">
    <div class="container">
        <form action="/admin/users" method="POST" role="form">
            <div class="form-group">
                <p><label for="id">ID</label></p>
                <input id="id" name="id" class="form-control" required type="text" value="<?=$data['id']?>">
            </div>
            <div class="form-group">
                <p><label for="name">Name</label></p>
                <input id="name" class="form-control" type="text" name="name" value="<?=$data['name']?>" required>
            </div>
            <div class="form-group">
                <p><label for="role">Role</label></p>
                <input id="role" class="form-control" type="text" name="role" value="<?=$data['role']?>" required>
            </div>

            <div class="form-group">
                <p><label for="email">Email</label></p>
                <input id="email" name="email" class="form-control" required type="text" value="<?=$data['email']?>">
            </div>
            <div class="form-group">
                <p><label for="password">Password</label></p>
                <input id="password" class="form-control" type="password" name="password" value="<?=$data['password']?>" required="">
            </div>

            <div class="form-group">
                <p><label for="login">Login name</label></p>
                <input id="login" class="form-control" type="text" name="login" value="<?=$data['login']?>" required="">
            </div>

            <div class="form-group">
                <p><label for="city">City</label></p>
                <input id="user_city" class="form-control" type="text" name="city" value="" required>
            </div>

            <div class="form-group">
                <p><label for="login">last activity</label></p>
                <input id="login" class="form-control" type="text" name="last_activity" value="<?=$data['last_activity']?>" required>
            </div>

            <input id="user_cityID" class="form-control" type="hidden" name="cityId">
            <input type="submit" value="Update" id="submit" class="btn btn-default"/>
        </form>
    </div>
</div>