<?php
session_start();
?>
<html>
<b>Your Orders : </b>
<?php

$milk = $_POST['milk'];
$rice = $_POST['rice'];
$flour = $_POST['flour'];
?>
<table>

    <tr>
        <td> Amount of milk</td>
        <td><?php
            echo ":  " . $milk;
            ?>
        </td>
    </tr>
    <tr>
        <td> Amount of rice</td>
        <td><?php
            echo ":  " . $rice;
            ?>
        </td>
    </tr>
    <tr>
        <td> Amount of flour</td>
        <td><?php
            echo ":  " . $flour;
            ?>
        </td>
    </tr>
</table>

<br>
<form method="POST" name="selecteditems" action="L4Q4b.php">
    <input type="submit" name="clear" value="Check Out">
</form>
<?php
if (isset($_POST['clear'])) {
    session_destroy();
    header("Location: L4Q4a.php");
}
?>
</html>