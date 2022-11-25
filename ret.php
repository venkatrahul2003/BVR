
<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "canteen";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $query= "select name,phonenumber from orders where name!=\"Total\"&&name!=\" \";";
  
  
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo 
                $row["name"]. 
                $row["phonenumber"]. 
                $row["fooditems"].
                $row["quantity"]. 
                $row["cost"].
                $row["subtotal"]."<br>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>