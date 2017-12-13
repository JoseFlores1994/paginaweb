<?php

function password_random($length = 4){
    
    $charset = "1234567890";
    $password = "";
    for($i=0;$i<$length;$i++){
        
        $rand = rand() % strlen($charset);
        $password .= substr($charset,$rand,1);
    }
    return $password;
}

echo password_random(4);

?>