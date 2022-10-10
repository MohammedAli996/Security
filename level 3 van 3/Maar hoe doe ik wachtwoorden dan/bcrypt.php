<?php

$hash = '$2y$10$J/3ezxjVCjOVOIkHVlksQOTAQqEyv4csRIhnXGFxlsd8ib62CoPL2';

if (password_verify('hallo', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
