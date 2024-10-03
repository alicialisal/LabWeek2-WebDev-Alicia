<?php

class function_array {
    function greet($students) {
        foreach($students as $name)
            echo "Hello $name<br>";
    }
}

?>