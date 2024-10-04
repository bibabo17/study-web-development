<?php

$host = 'localhost';
$dbname = 'mydb'; 
$username = 'root'; 
$password = ''; 
$port = 8889; 

try {
    
    $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $sql = "SELECT * FROM your_table_name"; 
    $stmt = $pdo->query($sql);

    
    echo "<h1>Daten aus der Tabelle</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>"; 

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>"; 
        echo "<td>" . htmlspecialchars($row['name']) . "</td>"; 
        echo "<td>" . htmlspecialchars($row['email']) . "</td>"; 
        echo "</tr>";
    }
    
    echo "</table>";

} catch (PDOException $e) {
    
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
}
?>