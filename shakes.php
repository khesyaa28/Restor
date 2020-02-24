<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="background-color:darkkhaki;">
    <center><h1> <font color ="white" style="font-family: 'Courier New', Courier, monospace;">FOR ORDER by Baskin Robbins </h1></font>
    <h1>"shakes"</h1></center>

    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>VARIAN</td>
                    <td>
                    <select name="vS">
                    <option value="pilih">choose ur blasts varian</option>
                    <option value="chocolate">chocolate</option>
                    <option value="cappuchino">cappuchino</option>
                    <option value="mocca">mocca</option>
                    <option value="red velvet">red velvet</option>
                    <option value="matcha">matcha</option>
                    <option value="black forest">black forest</option>
                    </select>
                    </td>
                 </tr>
            <tr>
                 <td>QUANTITY</td>
                    <td><input type="number" name="qtyS" placeholder="ur quantity...">
            </tr>
            <br>
            <br>
            <tr>
                <td>NOTE!</td>
                    <td><textarea name="notesS" rows="4" cols="25" placeholder="have a notes..??"></textarea></td>
            </tr>
            <td>
            <button type="submit" name="subS">submit </button>
            <button type="reset" name="resetS">reset </button>
            </td>
        </table>
        </form>

        <table>
        <tr>
        <td>VARIAN </td><td>:<?php echo $_POST['vS']?? ''?></td>
        </tr>
        <tr>
        <td>QUANTITY</td><td>: <?php echo $_POST['qtyS']?? ''?></td>
        </tr>
        <tr>
        <td>NOTES</td><td>: <?php echo $_POST['notesS']?? ''?></td>
        </tr>
        </table>
</body>
</html>
