<?php
session_start();

//session01.phpで宣言したセッション変数を更新する（サーバー上に変数が保存されている）
$_SESSION['num'] += 100;

echo $_SESSION['num'];
echo $_SESSION['name'].'わんわん'.$_SESSION['num'];
