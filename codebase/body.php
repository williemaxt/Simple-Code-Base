<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 3/13/18
 * Time: 4:53 PM
 */


?>

<div class="postForm">
<form method="post" action="index.php">
<input id="title" name="title" type="text" placeholder="What Is This?">
<textarea name="body" placeholder="Code Goes Here..."></textarea>
<?php  echo date("Y-m-d h:i:s"); ?> 
    <br/>
<br/>
<input type="submit" name="submit" value="submit">
</form>
</div>
