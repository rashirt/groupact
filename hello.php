<html>
    <header>
        <title>
            Hello php
        </title>
    </header>
    <body>
        <h1> 
            <?php 

                $t = "Hello World";

                if (is_int($t)) {
                echo "The number is INTEGER";
                } elseif (is_float($t)) {
                echo "The number is FLOATING";
                } else {
                echo "The number is STRING";
                }
            ?>
        <h1>
    </body>
</html>