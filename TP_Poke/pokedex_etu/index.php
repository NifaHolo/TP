<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
          <?php
$link = mysqli_connect("localhost", "root" , "" , "pokedex");
    
    if(!$link){
    exit;
   }
$req=  'SELECT id,identifier,height,weight,base_experience FROM pokemon ;'; 
$result = mysqli_query($link,$req);

if ($result) 
{
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
           echo"<tr>";
                 if($row["base_experience"]>200){
               echo"<td><img src='sprites/" . $row["identifier"] . ".png' alt=". $row["identifier"] . "></td>";
                echo "<td class='super'>" . $row["id"] . "</td>";
                 echo "<td class='super'>" . $row["identifier"] . "</td>";
                echo "<td class='super'>" . $row["height"] . "</td>";
                 echo "<td class='super'>" . $row["weight"] . "</td>";
                 echo "<td class='super'>" . $row["base_experience"] . "</td>";
                 }else{
                  echo"<td><img src='sprites/" . $row["identifier"] . ".png' alt=". $row["identifier"] . "></td>";
                echo "<td>" . $row["id"] . "</td>";
                 echo "<td>" . $row["identifier"] . "</td>";
                echo "<td>" . $row["height"] . "</td>";
                 echo "<td>" . $row["weight"] . "</td>";
                 echo "<td>" . $row["base_experience"] . "</td>";
                 }
           echo"</tr>";

    }
}
          ?>
      </tbody>
    </table>
  </body>
</html>