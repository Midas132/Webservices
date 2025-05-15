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
<title>LAB3</title>
<style>
body{background-color:powderblue;}
h1{text-align:center;}
table, th, td {
  border-collapse: collapse;
}
th, td {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  padding-right: 40px;
}

img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
figcaption{

	margin-left: auto;
	margin-right: auto;
text-align:center;
}
.btn{
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}
</style>

</head>
<body>
<h1>LAB3</h1>
<table>
<tr id="t1">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. 
</tr>
<tr>
<td id="t2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>

<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>

<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>

<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>
</tr>

</table>
<table>
<tr id="t3">
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>

<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>

<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra ex. In viverra iaculis purus nec blandit. Vestibulum nec fermentum mauris. Vivamus eleifend eros a fringilla dignissim. Fusce nec felis quis urna vestibulum tempor. Donec ut turpis nec nisi mattis iaculis. Sed et felis in dui finibus sagittis. Cras aliquam non arcu non maximus.

Aenean at iaculis nunc. Sed ac tortor dictum, vehicula lorem lacinia, congue quam. Nulla quis nulla quis neque euismod eleifend. Vestibulum ac eros est. Donec finibus nunc a ipsum interdum dapibus. Aenean eget nulla facilisis, pulvinar ligula ac, vestibulum enim. Sed aliquet, odio eget fermentum vehicula, odio felis bibendum orci, a fermentum leo ex quis lacus. Vestibulum cursus turpis id ex accumsan semper. Integer auctor nisi egestas sem scelerisque, vel accumsan magna luctus. Curabitur iaculis consequat magna a accumsan. Phasellus laoreet leo sem, nec tincidunt ante blandit id. In tincidunt volutpat nisl, vitae ullamcorper urna cursus nec. </td>
</tr>
</table>
<table style="width:100%;">
<tr>
<td><figure><img src="photo/photo1.jpg" width="128" height="128" alt="Góry"><figcaption>Góry</figcaption></figure></td>
<td><figure><img src="photo/photo2.jpg" width="128" height="128" alt="Drzewo i zachód"><figcaption>Drzewo i zachód</figcaption></figure></td>
<td><figure><img src="photo/photo3.jpg" width="128" height="128" alt="Drzewo"><figcaption>Drzewo</figcaption></figure></td>
<td><figure><img src="photo/photo4.jpg" width="128" height="128" alt="Kot w okularach"><figcaption>Kot w okularach</figcaption></figure></td>
</tr>
<tr>
<td><figure><img src="photo/photo5.jpg" width="128" height="128" alt="Człowiek z Balonikami"><figcaption>Człowiek z Balonikami</figcaption></figure></td>
<td><figure><img src="photo/photo6.jpg" width="128" height="128" alt="Para młoda"><figcaption>Para młoda</figcaption></figure></td>
<td><figure><img src="photo/photo7.jpg" width="128" height="128" alt="Bizon"><figcaption>Bizon</figcaption></figure></td>
<td><figure><img src="photo/photo8.jpg" width="128" height="128" alt="Motyle"><figcaption>Motyle</figcaption></figure></td>
</tr>
</table>
</br></br>
<a href="index.php" class="btn">
	Przejdź do strony głównej
</a></br></br></br></br>
</body>
</html> 	