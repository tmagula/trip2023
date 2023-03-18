<!DOCTYPE html>
<html lang="sk-SK">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Trip 2023">
    <meta name="keywords" content="Trip,Rakusko,Svajciarsko,Francuzko,Spanielsko,Portugalsko">
    <meta name="author" content="Tomas Magula">
    <link href="styly.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Zoznam</title>
    <style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		.list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.item {
  margin: 0;
  padding: 1em;
  border-bottom: 1px solid #ccc;
  position: relative;
}

.item:hover {
  background-color: #f5f5f5;
}

.item::before {
  content: "";
  position: absolute;
  top: 50%;
  right: 1em;
  transform: translateY(-50%);
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: #ccc;
  opacity: 0;
  transition: opacity 0.2s ease-in-out;
}

.item:hover::before {
  opacity: 1;
}

.item a {
  color: #333;
  text-decoration: none;
}

.item a:hover {
  color: #0077cc;
}
	</style>
</head>
<body>
<?php
include('C:\Users\magul\Documents\VS\WA1\xampp-portable-windows-x64-8.2.0-0-VS16\xampp\htdocs\magul\Trip 2023\Parts\navigation.php');
?>

<h1>Grocery List</h1>
<ul class="list">
	<li class="item">Korenie</li>
	<li class="item">Olej</li>
	<li class="item">Tyčinky</li>
	<li class="item">Sardinky tuniak</li>
	<li class="item">Čaj</li>
	<li class="item">Poháre</li>
	<li class="item">Chlast</li>
	<li class="item">Vrapy</li>
	<li class="item">Vifonky</li>
	<li class="item">Ryžové nudle</li>
	<li class="item">Kečup</li>
</ul>

<p>Staf:</p>
<ul class="list">
	<li class="item">Koťogó (káva mnoztvo idk)</li>
	<li class="item">Horák 4 x bomba</li>
	<li class="item">2 velke ešusy na varenie</li>
	<li class="item">Svetlo</li>
	<li class="item">Vymyslieť sprchovanie</li>
	<li class="item">Karimatka</li>
	<li class="item">Spacák</li>
	<li class="item">Príbor</li>
	<li class="item">Stan</li>
	<li class="item">Hamak (moskitiera😅) debilinka proti komarom</li>
	<li class="item">Powerbanky</li>
	<li class="item">Nabíjačka</li>
	<li class="item">Navigačný telefon</li>
	<li class="item">Opalovací krém</li>
	<li class="item">Slnecne okuliare</li>
	<li class="item">Čiapku/klobuk</li>
	<li class="item">Manikurove nožničky</li>
	<li class="item">Lekárnička</li>
	<li class="item">Náradie na auto</li>
	<li class="item">Štart káble</li>
	<li class="item">Voda do auta</li>
	<li class="item">Reprák</li>
	<li class="item">Počítač</li>
	<li class="item">Rordbávčka na elktrinu (predlžovačka)</li>
	<li class="item">Sracie servitky alias vlhčené</li>
</ul>






<footer>
<p>©Tomáš Magula 2023</p>
</footer>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>