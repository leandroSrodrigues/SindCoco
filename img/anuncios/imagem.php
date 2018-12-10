<?php /**/ ?><?php

// pega a imagem pelo link 
$imagem = $_GET['imagem']; 

$extensao = $_GET['imagem']; 
$extensao = substr("$imagem", -3); 

if($extensao=="gif") { 
header("Content-type: image/gif"); 
} 
if($extensao=="jpg") { 
header("Content-type: image/jpeg"); 
} 

// se for passar os valores abaixo pelo link
// de preferência passe somente a largura 
$largura = $_GET['l']; 
$altura = $_GET['a']; 

$imagem = $imagem; 
$max_x = $largura; 
$max_y = $altura; 

if($extensao=="gif") { 
$im = imagecreatefromgif($imagem); 
} 
if($extensao=="jpg") { 
$im = imagecreatefromjpeg($imagem); 
} 

//rescale proportionaly 
if ($max_x != 0 && $max_y != 0) { 
$x = imagesx($im); 
$y = imagesy($im); 

if ($x > $max_x) { 
$y = (int)floor($y * ($max_x / $x)); 
$x = $max_x; 
} 

if ($y > $max_y) { 
$x = (int)floor($x * ($max_y / $y)); 
$y = $max_y; 
} 
} 

$img_dest = ImageCreateTrueColor($x, $y); 

ImageCopyResampled($img_dest,$im,0,0,0,0,$x,$y,imagesx($im),imagesy($im)); 

if($extensao=="jpg") { 
imagejpeg($img_dest, $arquivo_miniatura); 
} 
if($extensao=="gif") { 
imagegif($img_dest, $arquivo_miniatura); 
} 

if($extensao=="jpg") { 
imagejpeg($img_dest); 
echo $arquivo_miniatura; 
} 
if($extensao=="gif") { 
imagegif($img_dest); 
echo $arquivo_miniatura; 
} 

?> 
