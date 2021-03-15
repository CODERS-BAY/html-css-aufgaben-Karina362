<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="css/stylesheet.css">
<title> Spielergebnisse</title>
<meta charset="UTF-8">

</head>

<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Username</th>
      <th scope="col">Resultat</th>
      <th scope="col">Wer hat gewonnen</th>
    </tr>
  </thead>
  <tbody>

  <?php

  include ('login.inc.php');
  $sql = "SELECT * FROM codebreaker";
  $result = $con->query($sql);
  /*var_dump($result);*/
  /*Bevor wir das Objekt in ein assoziatives Array konvertieren
  überprüfen wir Anzahl der Reihen um sicher zu gehen, dass
  wir aus der Datenbank auch daten erhalten*/ 
  if($result->num_rows > 0) {
      /*Das Objekt wird zu einem assoziativen Array mit
      der while wird das Objekt so lange abgefragt wie einträge
      vorhanden sind */
      while ($row = $result->fetch_assoc()) {?>
      <tr>
        <td><?php echo $row ['created_at']; ?></td>
        <td><?php echo $row ['username']; ?></td>
        <td><?php echo $row ['result']; ?></td>
        <td><?php echo $row ['moves']; ?></td>
    </tr>
            
     <?php }
      
      
      } else {
  }
  ?>
  
   
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>