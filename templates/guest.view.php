<form action="/guest" method="POST">

        <label> Name: </label>
        <input type="text" name="name" value="<?=$_COOKIE['name']?>">
        <br/>
        <br/>
        <label> Email: </label>
        <input type="text" name="email">
        <br/>
        <br/>
        <label> Messages: </label>
        <input type="text" name="messages">
        <br/>
        <br/>

        <input type="submit" value="Push me" />

</form>
<hr>
<?php
var_dump($_COOKIE);
foreach($data as $val ) {
        echo "Name: ".$val[0].'<br/>';
        echo "Email: ".$val[1].'<br/>';
        echo "Message: ".$val[2].'<br/>';
        echo '<hr/>';
}
?>