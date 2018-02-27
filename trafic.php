 <?php
    $timestamp = time();
    $time = date('Y-m-d H:i:s');
   
   try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO entered (ip, time, entertime, module) VALUES ('$ip' , '$timestamp', '$time', 'start_page')";
         $conn->exec($sql);
         }
         catch(PDOException $e)
         {
           echo $sql . "<br>" . $e->getMessage();
         }
         $conn = null;
?>    