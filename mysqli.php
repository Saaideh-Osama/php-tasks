


<?php include 'headeer.html' 
?>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>customer_id</th><th>firstname</th><th>lastname</th><th>email address </th><th>number  of  complaints</th>";

class TableRows extends RecursiveIteratorIterator {
  function construct($it) {
    parent::construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT sales.costumer_id,firstname,lastname,emailaddress,purchase_number ,item_code FROM sales INNER JOIN customers ON sales.costumer_id = customers.costumer_id;
  ");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


?>
<?php 
include 'footer.html';
?>