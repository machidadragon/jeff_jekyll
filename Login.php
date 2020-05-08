<?php
$result1 = $_GET['data'];

$result2 = $_GET['data2'];
//echo $result1;
echo "<br>";

define('DB_SERVER', 'lv426db.ccop1vv8dp8o.us-west-1.rds.amazonaws.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'therocks');
define('DB_DATABASE', 'lv426db');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT  name,password FROM Skynet";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $valName = $row["name"];
  //      echo $valName;
  //      echo "<br>";
        $valPass = $row["password"];
  //      echo $valPass;
  //      echo "<br>";
        $num =  strcmp( $valName, $result1 );
        $num2 = strcmp( $valPass, $result2 );
        if ( $num == 0 && $num2 == 0 ) {
                  echo "User and Password Accepted ";
                  header("Location: http://www.lv426sitea.com/page2.php?name=$result1");

                  exit;

        }
    }
echo "Skynet Access Denied";                                                                                            }


?>
