<?php



if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'No lo tenemos\' mysqli!!!';
} else {
    echo 'Silo tenemos!';
}

 ?>
