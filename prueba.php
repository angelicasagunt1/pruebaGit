<?php

$password = "Prueba12345";

$hash = password_hash($password, PASSWORD_BCRYPT);

echo "La contraseña encriptada es: {$hash}";

?> 