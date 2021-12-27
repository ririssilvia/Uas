<?php 
define('DB_SERVER', '172.20.0.2');
define('DB_USER', 'root');
define('DB_PASS', 'admin');
define('DB_NAME', 'peminjaman');
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>