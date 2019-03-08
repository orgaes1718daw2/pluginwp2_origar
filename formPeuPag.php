</html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>EXEMPLES DE FORMULARIS</title>
</head>
<body>
<h1>Creació d'un peu de pàgina per defecte</h1>
<form action="" method="POST">
Text del peu de pàgina: <input type="text" name="peupag"><br>
<input type="submit" value="OK"/>
</form>
</body>
</html>
<?php
if (isset($_POST['peupag'])){
update_option('footer_text',trim($_POST['peupag']));
echo "Peu de pàgina actual: ".get_option('footer_text')."<br>";
 }
?>
