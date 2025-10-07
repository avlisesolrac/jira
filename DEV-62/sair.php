<?php

setcookie('identificadorCookie',' ',time()+3600*24);
setcookie('statusDoLogin',0,time()+3600*24);

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>