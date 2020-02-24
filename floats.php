<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baskin Robbins </title>
</head>
<body style="background-color:powderblue;">
    <center><h1> <font color ="darkseagreen" style="font-family: 'Courier New', Courier, monospace;">FOR ORDER by Baskin Robbins </h1></font></center>

    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>VARIAN</td>
                    <td>
                    <select name="vFL">
                    <option value="pilih">choose ur floats varian</option>
                    <option value="ch">chocolate</option>
                    <option value="cp">coffe</option>
                    <option value="mc">mocca</option>
                    <option value="av">avocado</option>
                    <option value="st">strawberry</option>
                    <option value="gt">greentea</option>
                    </select>
                    </td>
                 </tr>
            <tr>
                 <td>QUANTITY</td>
                    <td><input type="number" name="qty" placeholder="ur quantity...">
            </tr>
            <br>
            <br>
            <tr>
                <td>NOTE!</td>
                    <td><textarea name="notes" rows="4" cols="25" placeholder="have a notes..??"></textarea></td>
            </tr>
            <td>
            <button type="submit" name="sub">submit </button>
            <button type="reset" name="reset">reset </button>
            </td>

        </form>
        <table>
        <tr>
        <td>VARIAN </td><td>:<?php echo $_POST['vFL']?? ''?></td>
        </tr>
        <tr>
        <td>QUANTITY</td><td>: <?php echo $_POST['qty']?? ''?></td>
        </tr>
        <tr>
        <td>NOTES</td><td>: <?php echo $_POST['notes']?? ''?></td>
        </tr>
        </table>
        
</body>
</html>