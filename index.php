<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">CALCULATOR</h2>
		<form method="post" action="index.php">	
		<label for="exampleFormControlInput1">Masukkan Bilangan Pertama</label>		
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="">
		<label for="exampleFormControlInput1">Masukkan Bilangan Kedua</label>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="">
		<div class="row">
		<label for="exampleFormControlInput1">Pilihan</label>
	</div>
	<div class="row">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select></div><center>
			<input type="submit" name="hitung" value="Hitung" class="tombol"></center>										
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>


