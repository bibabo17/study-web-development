<?php

session_start();


if (isset($_SESSION['username'])) {
    echo "セッションの 'username' の値: " . $_SESSION['username'];
} else {
    echo "セッションに 'username' がセットされていません。";
}
?>