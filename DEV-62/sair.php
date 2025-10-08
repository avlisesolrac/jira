<?php

setcookie('identificarCookie',' ',time()+3600*24);
setcookie('usuarioLogado',0,time()+3600*24);

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>