<?php

	if (isset($_POST['simpan'])) {

		$tanggal_pinjam = $_POST['tanggal_pinjam'];
		$tanggal_kembali = $_POST['tanggal_kembali'];

		$books = $_POST['books'];
		$pecah_buku = explode(".", $books);
		$id = $pecah_buku[0];
		$judul = $pecah_buku[1];

		$nama = $_POST['nama'];
		$pecah_nama = explode(".", $nama);
		$nim = $pecah_nama[0];
		$nama = $pecah_nama[1];

		//Cek Stock Buku
		$sql = mysqli_query($link, "SELECT * FROM books WHERE judul = '$judul'");
		while ($transaksi = mysqli_fetch_array($sql)) {
		$sisa = $transaksi['jumlah_buku'];
		if ($sisa == 0) {
			echo "<script language='javascript'>alert('Stok Buku Habis, Silahkan Tambah Stok Buku Terlebih Dahulu');
					window.location.href = 'transactions'</script>";
		}

		//Simpan Transaksi
		else {
		$insert_trx = mysqli_query($link, "INSERT INTO transactions (id, id_books, nim, tanggal_pinjam, tanggal_kembali, status) VALUES ('', '$id', '$nim', '$tanggal_pinjam', '$tanggal_kembali', 'Pinjam')");

		// Ngurangin Stock Buku
		mysqli_query($link, "UPDATE books SET jumlah_buku = (jumlah_buku-1) WHERE id='$id'");
		if($insert_trx) {
			echo "<script language='javascript'>alert('Berhasil menyimpan transaksi');
					window.location.href = '/transactions'</script>";
		} else {
			echo "<script language='javascript'>alert('Gagal menyimpan transaksi');
					window.location.href = 'transactions'</script>";
			}
		}
	}
}

if($_GET['act'] == 'kembali'){
	// Proses aksi kembali buku
	$id 	= $_GET['id'];
	$judul 	= $_GET['judul'];

	$sql = mysqli_query($link, "UPDATE transactions SET status='Kembali' WHERE id ='$id'");

	$sql = mysqli_query($link, "UPDATE books SET jumlah_buku = (jumlah_buku+1) WHERE judul='$judul'");

		echo "<script language='javascript'>alert('Proses kembalikan Buku Berhasil');
				window.location.href = 'transactions'</script>";
} else {
	// Proses aksi perpanjang buku
	$id 			= $_GET['id'];
	$judul 			= $_GET['judul'];
	$tanggal_kembali = $_GET['tanggal_kembali'];
	$lambat 		= $_GET['lambat'];

	if ($lambat > 7) {
		echo "<script language='javascript'>alert('Pinjam Buku Tidak Dapat Di Perpanjang, karena lebih dari 7 hari.. Kembalikan dahulu kemudian pinjam kembali');
				window.location.href = '/transactions'</script>";
	}
	else {
		$pecah_TanggalKembali = explode("-", $tanggal_kembali);
		$next_7_hari = mktime(0,0,0, $pecah_TanggalKembali[1], $pecah_TanggalKembali[0]+7, $pecah_TanggalKembali[2]);
		$hari_next = date("d-m-Y", $next_7_hari);

		$sql = mysqli_query($link, "UPDATE transactions SET tanggal_kembali = '$hari_next' WHERE id = '$id'");

		if ($sql) {
			echo "<script language='javascript'>alert('Proses Perpanjang Buku Berhasil');
					window.location.href = '/transactions'</script>";
		}
		else {
			echo "<script language='javascript'>alert('Proses Perpanjang Buku Gagal');
					window.location.href = 'transactions'</script>";
		}
	}
}

?>
