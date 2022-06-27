<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/kalku2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Kalkulator 02</title>
	</head>
	<body>
        <div class="topnav" id="myTopnav">
            <a href="index.html">Home</a>
            <a href="kalku1.html">Kalkulator 01</a>
            <a href="kalku2.php" class="active">Kalkulator 02</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
		<?php 
			if(isset($_POST['hitung'])){
				$bil1 = $_POST['bil1'];
				$bil2 = $_POST['bil2'];
				$operasi = $_POST['operasi'];
				switch ($operasi) {
					case 'tambah':
						if ($bil1==null or $bil2==null) {
							$bil1=0;
							$bil2=0;
							$hasil = $bil1+$bil2;
						}
						else {
							$hasil = $bil1+$bil2;
						}
					break;
					case 'kurang':
						if ($bil1==null or $bil2==null) {
							$bil1=0;
							$bil2=0;
							$hasil = $bil1-$bil2;
						}
						else {
							$hasil = $bil1-$bil2;
						}
					break;
					case 'kali':
						if ($bil1==null or $bil2==null) {
							$bil1=0;
							$bil2=0;
							$hasil = $bil1*$bil2;
						}
						else {
							$hasil = $bil1*$bil2;
						}
					break;
					case 'bagi':
						if ($bil1==null or $bil2==null) {
							$bil1=0;
							$bil2=1;
							$hasil = $bil1/$bil2;
						}
						else {
							$hasil = $bil1/$bil2;
						}
					break;			
				}
			}
		?>
		<div class="kalkulator">
			<h2 class="judul">KALKULATOR</h2>
			<form method="post" action="kalku2.php">			
				<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
				<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
				<select class="opt" name="operasi">
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">x</option>
					<option value="bagi">/</option>
				</select>
				<input type="submit" name="hitung" value="Hitung" class="tombol">											
			</form>	
			<?php if(isset($_POST['hitung'])){ ?>
				<input type="text" value="<?php echo $hasil; ?>" class="bil">
			<?php }else{ ?>
				<input type="text" value="0" class="bil">
			<?php } ?>	
		</div>	
		<script>
			function myFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className === "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		}
		</script>
	</body>
</html>