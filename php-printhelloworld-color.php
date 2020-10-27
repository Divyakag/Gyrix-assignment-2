<?php
$n = 100;
for($i = 1;$i <= $n;$i ++ ){
    if($i%3 == 0 && $i%5 == 0) { 
        echo "<p style='color:blue';> $i. Hello World</p>";
    }
        else if ($i%5 == 0) {
            echo "<p style='color:red;'> $i.Hello World <p>";
    }
        else if($i%3 == 0) {
            echo "<p style='color:green;' > $i.Hello World </p>";
    }
        else {
            echo "<p style='color:yellow;' > $i.Hello World </p>";
    }
}
?>