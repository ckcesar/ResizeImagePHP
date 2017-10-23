<?php

require_once('ResizeImage.php');

$resize = new ResizeImage('foto.jpg');
$resize->resizeTo(400, 300, 'exact');
$url_salvar_thubm = 'fotoThumb.jpg';
$img_video = $url_salvar_thubm;
$resize->saveImage($url_salvar_thubm);

echo'Imagem Real';
echo'<br/>';
echo'<img src="http://192.168.0.114/ress/teste_zip/foto.jpg" />';
echo'<br/>';
echo'<hr/>';
echo'Imagem Thumb';
echo'<br/>';
echo'<img src="http://192.168.0.114/ress/teste_zip/fotoThumb.jpg" />';