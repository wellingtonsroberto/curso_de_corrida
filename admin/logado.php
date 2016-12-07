<?php
session_start();
if(!session_is_registered(login)){
header("location: login.php");
}
?>

<html>
<body>
Logado com sucesso!!
</body>
</html> 