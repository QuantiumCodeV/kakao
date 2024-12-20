<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$config = [
    "MYSQL_HOST" => "localhost", 
    "MYSQL_USER" => "kakao",
    "MYSQL_PASSWORD" => "72Merasardtfy_",
    "MYSQL_DATABASE" => "kakao",
];
$USERNAME_DEFAULT = "adminLogin";
$PASSWORD_DEFAULT = "passwordAdmin";


$mysql = new mysqli($config["MYSQL_HOST"], $config["MYSQL_USER"], $config["MYSQL_PASSWORD"]);

// Проверка подключения
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Создаем базу данных если не существует
$mysql->query("CREATE DATABASE IF NOT EXISTS " . $config["MYSQL_DATABASE"]);
$mysql->select_db($config["MYSQL_DATABASE"]);

// Создаем таблицу links
$sql = "CREATE TABLE IF NOT EXISTS links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    apple VARCHAR(255) NULL,
    windows VARCHAR(255) NULL
)";

if (!$mysql->query($sql)) {
    die("Error creating table: " . $mysql->error);
}

// Добавляем запись только если таблица пуста
$result = $mysql->query("SELECT COUNT(*) as count FROM links");
$row = $result->fetch_assoc();
if ($row['count'] == 0) {
    $mysql->query("INSERT INTO links (id) VALUES (1)");
}
