<?php
$host = 'localhost';
$db = 'cv';
$user = 'if22';
$pwd = 'if12345';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
