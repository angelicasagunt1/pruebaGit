<?php

$Password = "Prueba12345";

    $hash = password_hash($Password, PASSWORD_BCRYPT);

echo "La contraseña encriptada es: {$hash}";

?> 