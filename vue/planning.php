<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>
	  <table width="800" border="1">
  <tr>
    <td>Heures</td>
    <td>J-1 01/03/15</td>
	<td>J-2 02/03/15</td>
	<td>J-3 03/03/15</td>
	<td>J-4 04/03/15</td>
	<td>J-5 05/03/15</td>
  </tr>

 

  <?php 
$host = "localhost";  
$user = "root";
$bdd = "cannes";
$password  = "";

mysql_connect($host, $user,$password) or die("erreur de connexion au serveur");
mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");
  
$querydate= "select NOM_FILM, TIME(DATE_DEBUT_PROJECTION), TIME(DATE_FIN_PROJECTION) FROM projeter p INNER JOIN films f WHERE f.ID_FILM = p.ID_FILM ORDER BY NOM_FILM";
$result = mysql_query($querydate);

if($result === FALSE) { 
    die(mysql_error()); 
}



while($row = mysql_fetch_row($result)){
$Nom = $row[0];
$DateDeb = $row[1];
$DateFin = $row[2];

var_dump($row);
//if($DateDeb==""){

echo"<tr>  <td>9:30</td>";
if($DateDeb>= "07:45:00" && $DateDeb<= "07:59:00"){
echo  "<td>$Nom<br>$DateDeb - $DateFin</td>"; }
if($DateFin>= "08:00:00" && $DateFin<= "08:14:00"){
echo "</tr>";}

echo"<tr>  <td>10:00</td>";
if($DateDeb>= "08:00:00" && $DateDeb<= "08:14:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "08:15:00" && $DateFin<= "08:29:00"){
echo "</tr>";}

echo"<tr>  <td>10:30</td>";
if($DateDeb>= "08:15:00" && $DateDeb<= "08:29:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "08:30:00" && $DateFin<= "08:44:00"){
echo "</tr>";}


echo"<tr>  <td>11:00</td>";
if($DateDeb>= "08:30:00" && $DateDeb<= "08:44:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "08:45:00" && $DateFin<= "08:59:00"){
echo "</tr>";}


echo"<tr>  <td>14:00</td>";
if($DateDeb>= "08:45:00" && $DateDeb<= "08:59:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "09:00:00" && $DateFin<= "09:14:00"){
echo "</tr>";}

echo"<tr>  <td>14:30</td>";
if($DateDeb>= "09:00:00" && $DateDeb<= "09:14:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "09:15:00" && $DateFin<= "09:29:00"){
echo "</tr>";}

echo"<tr>  <td>15:00</td>";
if($DateDeb>= "09:15:00" && $DateDeb<= "09:29:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "09:30:00" && $DateFin<= "09:44:00"){
echo "</tr>";}


echo"<tr>  <td>15:30</td>";
if($DateDeb>= "09:30:00" && $DateDeb<= "09:44:00"){
echo  "<td>$Nom<br>".$DateDeb." - ".$DateFin."</td>"; }
if($DateFin>= "09:45:00" && $DateFin<= "09:59:00"){
echo "</tr>";}



//}




else{echo  "<td></td>"; }}?>
</body>
</html>