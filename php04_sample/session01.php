<?php
session_start();

$_SESSION['num'] = 100;
$_SESSION['name'] = 'なんの';

echo $_SESSION['num'];
echo $_SESSION['name'];