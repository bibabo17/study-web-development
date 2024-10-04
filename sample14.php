<?php
try {
    
    $host = 'localhost';
    $dbname = 'mysql'; 
    $username = 'root';
    $password = 'root'; 

    
    $dsn = "mysql:host=$host;dbname=$dbname;port=8889";
    $pdo = new PDO($dsn, $username, $password);

    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "INSERT INTO user (user, host) VALUES (:user, :host)";
    $stmt = $pdo->prepare($sql);

    
    $user = 'new_user';   
    $host = 'localhost';   

    
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':host', $host);
    $stmt->execute();

    echo "成功!";

} catch (PDOException $e) {
    
    echo "失敗: " . $e->getMessage();
}
?>