

<?php

function processDrpdown(
  $sv1,
  $sv2,
  $sv3,
  $sv4,
  $sv5,
  $sv6,
  $sv7,
  $sv8
  ) {
//function processDrpdown($sv1,$sv2) {
$servername = "localhost";
$username = "upiutevas";
$password = "antradienis14";
$dbname = "upiutevas_upiutevasDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//checkas ar prisijungiam
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$sql="SELECT * from Base
LEFT JOIN Suppliers ON Base.supplier_id = Suppliers.id
LEFT JOIN routes ON Base.route_id = routes.routes_id_o
LEFT JOIN water_body_composition ON Base.wbc_id = water_body_composition.wbc_id_o
LEFT JOIN car_parking ON Base.parking_id = car_parking.id
LEFT JOIN shops ON Base.shop_id = shops.id
LEFT JOIN sleeping ON Base.sleeping_id = sleeping.id

WHERE ($sv1) AND $sv2   AND $sv3 AND $sv4 AND $sv5 AND $sv6 AND $sv7 AND $sv8";

echo "WHERE ($sv1)<br> <br> AND $sv2   AND $sv3  AND $sv4 AND $sv5 AND $sv6 AND $sv7 AND $sv8<br>";

//  routes.time_to_complete_days LIKE '%$sv2%' AND
//  routes.time_to_complete_days LIKE '%$sv3%' AND
//  routes.time_to_complete_days  > '%$sv4%'";

$result = mysqli_query($conn,$sql);
//checkas ar yra ka grazinti. reikia sukurti else kai pagal paieska nieko neras
if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    
    echo  "kas plukdo:".$row["company_name"]." marsrutu ".$row["routes_id_o"]. ". kilometru: " .$row["length_km"]." per ".$row["time_to_complete_days"]."dienas. sleep gov:".$row["open_camping"]." sleep priv:".$row["private_camping"]."<br>";
  }
} 
mysqli_close($conn);
return false;
}

//dv = dropdownValue
 if(isset($_POST['dv1'])
  &&isset($_POST['dv2'])
  &&isset($_POST['dv3'])
  &&isset($_POST['dv4'])
  &&isset($_POST['dv5'])
  &&isset($_POST['dv6'])
  &&isset($_POST['dv7'])
  &&isset($_POST['dv8'])
  ) {
//if(isset($_POST['dv1'])) {
	echo processDrpdown(
    $_POST['dv1'],
    $_POST['dv2'],
    $_POST['dv3'],
    $_POST['dv4'],
    $_POST['dv5'],
    $_POST['dv6'],
    $_POST['dv7'],
    $_POST['dv8']);
//	echo processDrpdown($_POST['dv1']);
	exit();
 }

?>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js">
</script>

