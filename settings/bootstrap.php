<?php
/**
 * Bootstrap File
 * 
 * Ini adalah sebuah file yang digunakan untuk mengakses pengaturan
 * default dari sebuah aplikasi.
 * 
 * @author  wadahkode <ayus.sahabat@gmail.com>
 * @license  MIT
 */
use App\Database\Database;

define('BASEPATH', realpath(
	rtrim(dirname(__DIR__), "/\\")
));

$app = file_exists(BASEPATH . "/app/Config/database.php") ? require BASEPATH . "/app/Config/database.php" : false;

if ($app) {
	return $database = new Database();
}