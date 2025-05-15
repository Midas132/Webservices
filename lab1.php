<?php
	session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: logowanie.php");
    exit;
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<title>LAB1</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
.column1{float:left; width:21%; margin: 2%;}
.column2{float:left; width:29%; margin: 2%;}
.ftekst{margin:4%;}
p{text-align:center;}
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.btn{
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}
</style>

</head>
<body>
<h1>GALLERY</h1>
<div class="ftekst">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
</div></br></br>
<div id="stekst" class="row">
	<div class="column1">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
	<div class="column1">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
	<div class="column1">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
	<div class="column1">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
</div>
<div id="ttekst" class="row">
	<div class="column2">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
	<div class="column2">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
	<div class="column2">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

		Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
	</div>
</div>
<div class = "gallery">
	<div class="row">
		<div class="column1">
			<img src="photo/photo1.jpg" width="128" height="128" alt="Góry">
			<p>Góry</p>
		</div>
		<div class="column1">
			<img src="photo/photo2.jpg" width="128" height="128" alt="Drzewo i zachód">
			<p>Drzewo i zachód</p>
		</div>
		<div class="column1">
			<img src="photo/photo3.jpg" width="128" height="128" alt="Drzewo">
			<p>Drzewo</p>
		</div>
		<div class="column1">
			<img src="photo/photo4.jpg" width="128" height="128" alt="Kot w okularach">
			<p>Kot w okularach</p>
		</div>
	</div>
	<div class="row">
		<div class="column1">
			<img src="photo/photo5.jpg" width="128" height="128" alt="Człowiek z Balonikami">
			<p>Człowiek z Balonikami</p>
		</div>
		<div class="column1">
			<img src="photo/photo6.jpg" width="128" height="128" alt="Para młoda">
			<p>Para młoda</p>
		</div>
		<div class="column1">
			<img src="photo/photo7.jpg" width="128" height="128" alt="Bizon">
			<p>Bizon</p>
		</div>
		<div class="column1">
			<img src="photo/photo8.jpg" width="128" height="128" alt="Motyle">
			<p>Motyle</p>
		</div>
	</div>
</div></br>
<a href="index.php" class="btn">
	Przejdź do strony głównej
</a></br></br></br></br>
</body>
</html> 