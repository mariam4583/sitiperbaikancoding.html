<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "Halo " . $name;
} else {
    echo "Nama belum diisi";
}
?>