<?php
namespace App\Database;

class Database {
	public function __construct()
	{
		return $this->sayHello();
	}

	protected function sayHello()
	{
		echo "Hello world";
	}
}
//$koneksi = mysqli_connect("localhost","admin","margasari07","pasar_herman");

//sql ambil domain
//$connect_data = mysqli_query($koneksi,"select * from domain ");
//$show_domain = mysqli_fetch_array($connect_data);
//$domain=$show_domain['nm_domain'];
//$status = $show_domain['status'];

//variable untuk laporan penjualan perbulan
//$date_awal = '2020-04-01';
//$date_akhir = '2020-04-30';
//variable target penjualan
//$target_penjualan = '1051';

//Membuat format tanggal menjadi d M, YY
//$date_akhir1 = date_create($date_akhir);
//$tanggal_akhir = date_format($date_akhir1,"d M, yy");

// Check connection
//if (mysqli_connect_errno()){
//	echo "Koneksi database gagal : " . mysqli_connect_error();
//}

?>
