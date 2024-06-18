<?php

function divide($dividend, $divisor){
    if ($divisor == 0) {
        throw new Exception('Cannot divide by Zero', 419);
    }
    return $dividend/$divisor;
}


try{
    echo divide(10, 5);
}catch (Exception $e){
    var_dump($e);
    echo $e->getMessage();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
}finally{
    echo "Final";
}



?>
