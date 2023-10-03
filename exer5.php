<?php
$num = 18; 
echo "Os números entre $num e " . ($num**3) . " são:";

for ($i = $num; $i <= $num**3; $i++) {
    echo $i . "\n";
}

?>