<?php
if (!isset($_GET["texto1"]) || !isset($_GET["texto2"])) {
    exit("Favor preencher as informações . . .");
}


$rotaFonte = __DIR__ . "/" . "Poppins-ExtraBold.ttf";
$rotaFonte2 = __DIR__ . "/" . "Poppins-SemiBold.ttf";
$rotaFonte3 = __DIR__ . "/" . "Poppins-Medium.ttf";
$nomeImagem = "imagem2.png";
$imagem = imagecreatefrompng($nomeImagem);
$color = imagecolorallocate($imagem, 0, 0, 0);
$texto1 = $_GET["texto1"];
$texto2 = $_GET["texto2"];
$texto3 = $_GET["texto3"];
$texto5 = $_GET["texto5"];
$texto6 = "R. Luís Carlos Zani, 3199 - Ibiporã - PR, 86200-000";
$texto7 = "+55 43 3178 5000 ramal:";

$tamanho2 = 14;
$tamanho = 8;
$angulo = 0;
$espaco = 5;
$x = 294;
$y = 49;
$x2 = 297;
$y2 = $y + $espaco + $tamanho;
$x3 = 449.8;
$y3 = 95.2;
$x4 = 310;
$y4 = 115;
$x6 = 310;
$y6 = 136;
$x7 = 310;
$y7 = 95.2;
imagettftext($imagem, $tamanho2, $angulo, $x, $y, $color, $rotaFonte, $texto1);
imagettftext($imagem, $tamanho, $angulo, $x2, $y2, $color, $rotaFonte2, $texto2);
imagettftext($imagem, $tamanho, $angulo, $x3, $y3, $color, $rotaFonte3, $texto3);
imagettftext($imagem, $tamanho, $angulo, $x4, $y4, $color, $rotaFonte3, $texto5);
imagettftext($imagem, $tamanho, $angulo, $x6, $y6, $color, $rotaFonte3, $texto6);
imagettftext($imagem, $tamanho, $angulo, $x7, $y7, $color, $rotaFonte3, $texto7);

header("Content-Type: image/png");
imagepng($imagem);
imagedestroy($imagem);
