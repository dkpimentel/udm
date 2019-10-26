<?php 

//$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$link = "https://i1.wp.com/www.raciociniocristao.com.br/wp-content/uploads/2014/05/wallpaper-cristao-hd-negue-se-si-mesmo-tome-cruz_1920x1200.jpg?ssl=1";

//A imagem vem toda em código ilegivel
$content = file_get_contents($link);

//Veja como a imagem vem atraves da função file_get_contents($link);
//var_dump($content);


//Transformando em um arquivo real
$parse = parse_url($link);

//var_dump($parse);
//echo "<br>";

$basename = basename($parse["path"]);

//var_dump($basename);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

 ?>

 <img src="<?=$basename?>">