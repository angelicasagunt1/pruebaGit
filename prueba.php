<?php

$password = "Prueba12345";

function jesus(){

return 'hola';








}
    $hash = password_hash($password, PASSWORD_BCRYPT);

echo "La contraseña encriptada es: {$hash}";

?> 