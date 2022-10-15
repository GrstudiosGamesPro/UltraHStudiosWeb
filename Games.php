<?php
$DPip = "localhost";
$DBUser = "root";
$DBPassword="";
$DBName = "ultrahstudios";

$conn = new mysqli($DPip, $DBUser, $DBPassword, $DBName);

if ($conn->connect_error){
die("Conexion fallida " . $conn->connect_error);
}

/*$NameTable = "MetaWorlds";
$Plataform = "VR";

$SqlInsertNewGame = "INSERT INTO gamedata SET ID = '1', GameName = '$NameTable', Plataform = '$Plataform'";

if (mysqli_query($conn, $SqlInsertNewGame)){
}*/

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UltraHstudios | Juegos</title>


    <script type="text/javascript" src="Assets/scripts/"></script>
    <link rel="stylesheet" href="Assets/style/estilo.css">
</head>

<body>

    <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
        <li><a id="ChangeLoader"onclick="LoadIndexPage()" href='#'>Inicio</a></li>
          <li><a class='dropdown-arrow' href='#'>Products</a>
            <ul class='sub-menus'>
              <li><a id="ChangeLoader" onclick="LoadGamePage()" href='#'>Juegos</a></li>
              <li><a id="ChangeLoader" onclick="LoadPluginsPage()" href='#'>Plugins</a></li>
              <li><a id="ChangeLoader" onclick="LoadProgramsPage()" href='#'>Programas</a></li>
            </ul>
          </li>
      </nav>
    
<h1 class="title">UltraHStudios</h1>
<h2 class="SubTittle">Juegos</h2>


<div class="container">

<?php
$TemplateHTML = '
<div class="item">
<img src="Assets/images/Icons/VR.png" style="width: 64; Height: 64px; position: absolute; margin: 10px 235px;"/>
  <img style="height: 400px; width: 316px;" src="Assets/images/Games/MetaWorldsBG.png"/>
  <a class="CardTypeName" style="background-color:white; width: 100px; height: 25px;">Quest 2</a>
  <a href="https://www.oculus.com/experiences/quest/5393650840690206/" target="_blank" class="CardMargin" style="background-color:white; width: 316px; height: 25px;">Download</a>
</div>


';

for ($i = 0; $i < 5; $i++){
  echo ($TemplateHTML);
}

?>
</div>
    
</body>
</html>