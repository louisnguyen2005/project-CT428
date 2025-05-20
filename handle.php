<form action="handle.php" method="get">
    <input type="text" name="post_data">
    <button type="submit">click on</button>

</form>
<?php
        echo $_GET["post_data"];
?>