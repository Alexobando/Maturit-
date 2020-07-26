

<?php

$connect =  new mysqli("localhost","root","","vivaio");
if($connect->connect_error)
{
  echo "errore di conessione";
}else
{
   echo"connessione andata a buon fine";
}

if (isset($_GET["specie"]))
{
  $specie= $_GET["specie"];
  
}
else
{
  
  echo "nessuna pianta inserita<br>";
}
if (isset($_GET["immagine"]))
{
  $immagine= $_GET["immagine"];
  
}
else
{
  
  echo "nessuna imagine inserita";
}
if (isset($_GET["descrizione"]))
{
  $descrizione= $_GET["descrizione"];
  
}
else
{
  
  echo "nessuna descrizione inserita<br>";
}
if (isset($_GET["caratteristiche"]))
{
  $caratteristiche= $_GET["caratteristiche"];
  
}
else
{
 
  echo "nessuna caratteristica inserita";
}
if (isset($_GET["tipo"]))
{
  $tipo= $_GET["tipo"];
  
  
}
else
{
  
  echo "non è stata scelta nessuna delle opzioni";
}



$query1 = "INSERT INTO `specie` (`Nome`, `Descrizione`, `Caratteristica`, `Interno/Esterno`,`Immagine`) 
VALUES ('$specie', '$descrizione', '$caratteristiche', '$tipo','$immagine');";


define('risultato','risultato');
$risultato = $connect->query($query1);
$risultato = $connect->query($query2);

/*
$risultato->bind_param(':specie',$_GET['specie']);
$risultato->bindParam(':descrizione',$_GET['descrizione']);
$risultato->bindParam(':caratteristiche',$_GET['caratteristiche']);
$risultato->bindParam(':tipo',$_GET['tipo']);*/
if(risultato){
	echo("<br>Inserimento avvenuto correttamente");
	}else{
	echo("<br>Inserimento non eseguito");
}

?>
