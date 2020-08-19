<!-- <?php
	//$conn = mysqli_connect("localhost", "root", "", "magis");

	//$sql = "SELECT * FROM scholar_a";
	//$result = $conn->query($sql);

	//if ($result->num_rows > 0) {
	  //echo "Year - Bangkal" . "<br>"	;
	  //while($row = $result->fetch_assoc()) {
	    //echo $row["year"] . " - " . $row["Bangkal"] . "<br>";
	  //}
	//} else {
	  //echo "0 results";
	//}
	//$conn->close();

?> -->

<?php
//setting header to json
header('Content-Type: application/json');

//database
$conn = mysqli_connect("localhost", "root", "", "magis");


if(!$conn){
  die("Connection failed: " . $conn->error);
}

//query to get data from the table
$query = sprintf("SELECT * FROM scholar_a");

//execute query
$result = $conn->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);