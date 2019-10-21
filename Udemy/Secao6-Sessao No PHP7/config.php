<?php
/*

É interessante sempre deixar as seções iniciarem automáticamente essa configuração é feito na configuração do php, porém em hospedagens compartilhadas isso não é permitido, já em VPS você consegue editar esse parâmetro.

*/

session_start();

$_SESSION["nome"] = "David";


?>