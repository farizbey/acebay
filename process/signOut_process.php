<?php 


session_start();
include "../config/config.php";
//$_SESSION itu tipe file nya array.
//SEMUA file GLOBAL itu adalah ARRAY!!!

//fungsi untuk menghapus array adalah unset();

/* unset($_SESSION["username"]); //hapus salah satu segment array\

//array(1=>'test' 2=>'lala')

unset($_SESSION["email"]); */

session_destroy(); //dengan catatan, dia hanya menhapus session pada server yang di akses (localhost contohnya)

header("location:../index.php?home");



?>