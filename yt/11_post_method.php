<!DOCTYPE html>
<html>
    <head>
        <title>hellow world</title>
    </head>
    <body>

            <form action="10_get_method.php" method="post">

            <input type="text" name="name">
            <input type="text" name="email">
            <input type="submit">

            </form>
        

        <?php

            /*

                            | GET                | POST            |
                | ------------------ | --------------------------- |
                | Data is in the URL | Data is hidden from the URL |
                | Less secure        | More secure                 |
                | Good for searches  | Good for login/forms        |
                | Uses `$_GET`       | Uses `$_POST`               |
          
            */
                      
        ?>

    </body>
</html>

