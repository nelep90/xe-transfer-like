<?php 
require_once('vendor/autoload.php');

require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));
$urlfile = $_GET['url'];
$file = getFileDownload($urlfile);
$template = $twig->load('download.html');

echo $template->render(array());

echo "<a href=\"https://nenadp.promo-17.codeur.online/xe-transfer-like/".$file['url_file']."\"><img class='lien' width='75px' height='75' src='assets/medias/download.png'/></a>";
?>
