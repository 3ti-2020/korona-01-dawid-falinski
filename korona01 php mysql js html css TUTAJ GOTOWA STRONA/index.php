<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawid Faliński</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <div class="container">
     <div class="strona">
     </div>
     <div class="tytul">
         <a href="index.php"><img src="menu.jpg" width="1890px" height="330px"> </a>
            
         
     </div>

     <a href="postacie.html"> <div class="guzik1"> 
         <div class="jd"> <h4>POSTACIE</h4>  </div> </a>
     </div> 
     
     
     

    <a href="zawodnicy.html"> <div class="guzik2">
        <div class="jd1"><h4>PROFESJONALNI ZAWODNICY</h4> </div> </a>
     
    
    </div>
     <a href="skinki.html"><div class="guzik3"> 
        <div class="jd2"><h4>FAJNE SKINKI</h4> </div> </a>
     </div>
     

     <div class="tresc">
         <h1>Na tej stronce znajdziesz moje subiektywne spojrzenie na grę League of Legends</h1>
         <p> <h3>Poruszę tutaj tematy takie jak:</h3></p>
         <p><li>Postacie:</li></p>
         <p><li>Profesjonalni zawodnicy:</li></p>
         <p><li>Moim zdaniem najładniejsze skórki do postaci</li></p>
     
        <p><h2>MIŁEJ EKSPLORACJI STRONY </h2></p>
        <p><h4>Kliknięcie na obrazek u góry powoduje przeniesienie do strony domowej</h4></p>
        <p> <h4>PONIŻEJ TABELKA WYWOŁANA ZA POMOCĄ PHP</h4> </p>
        
        
        
        <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "falinski";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM zawodnicy");

    echo("<table border='5'>");
    echo("<tr>
    <th>dobrzy</th>
	<th>slabi</>
    <th>zdrajcy Polski</th>
    </tr>");
    while( $wiersz = $result->fetch_assoc() ) {
        echo("<tr>");
        echo("<td>".$wiersz['dobrzy']."</td>"."<td>".$wiersz['slabi']."</td>"."<td>".$wiersz['zdrajcy Polski']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>
<button class="guzik" onclick="darkMode()"> kliknij, aby włączyć tryb ciemny</button>
        </div>

     
     
     
     
    
 
 
 
 
 
 
 
    </div>
    <script src="main.js"></script>

</body>
</html>