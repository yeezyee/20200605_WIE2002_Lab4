<?php
session_start();
?>
<html>
<body>
<h3>Place your order.</h3>
<table border="3">
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>Milk</td>
        <td>RM6.00/carton</td>
    </tr>
    <tr>
        <td>Rice</td>
        <td>RM23.00/kg</td>

    </tr>
    <tr>
        <td>Flour</td>
        <td>RM5.00/kg</td>
    </tr>
</table>
<br>
<table>
    <form method="post" action="L4Q4b.php">
        <tr>
            <td> Amount of milk :</td>
            <td><input type="number" name="milk"></td>
        </tr>
        <tr>
            <td> Amount of rice :</td>
            <td><input type="number" name="rice"></td>
        </tr>
        <tr>
            <td> Amount of flour :</td>
            <td><input type="number" name="flour"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </form>

</table>
<br>

</body>
</html>