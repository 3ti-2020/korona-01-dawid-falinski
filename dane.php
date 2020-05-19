<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
</body>
</html>
