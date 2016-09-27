<?php
foreach( as $val ) {
echo $val['name'].'<br/>';
echo $val['email'].'<br/>';
echo $val['messages'].'<br/>';
echo '<hr/>';
}
?>      

<form action="" method="POST">

        <label> Name: </label>
        <input type="text" name="name">
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