<!DOCTYPE html>
<html>
    <head>
        <title>hellow world</title>
    </head>
    <body>
        <form method=GET>
            <input type="text" name="username">
            <input type="submit" name="submit">
        </form>

        <?php 
        $username=$_GET["username"];
        echo $username;
        ?>

    </body>
</html>

