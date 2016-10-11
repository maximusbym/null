<div class="container">
    <form action="/catalog" method="POST" id="contactform" role="form">
        <div class="form-group">
            <p><label for="name">Name</label></p>
            <input id="name" class="form-control" type="text" name="name" value="<?=$_COOKIE['name']?>">
        </div>
        <div class="form-group">
            <p><label for="email">Email</label></p>
            <input id="email" name="email" class="form-control" placeholder="example@domain.com" required="" tabindex="2" type="text" value="<?=$_COOKIE['email']?>">
        </div>
        <input type="submit" value="Log in" id="submit" class="btn btn-default"/>
    </form>
</div>
<?php
