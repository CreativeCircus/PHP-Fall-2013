<style>
.namesContainer {
	text-align: center;
	padding: 5px;
	color: #FFF;
	width: 50%;
}
.name {
	background-color: red;
}
.age {
	background-color: orange;
}
.sex {
	background-color: blue;
}
</style>
<header><h1>Hello world!</h1></header>
<?php
include ('connection.php');

				// select "ALL" from our table of users
$sql = "SELECT * FROM users";
$results = mysql_query($sql, $connection);
echo "<br />";
echo '<section class="namesContainer">';
while ($row = mysql_fetch_array($results)) {
	echo '<div class="name"><strong>Name: </strong>' . $row['name'] . "</div>";
	echo '<div class="age"><strong>Age: </strong>' . $row['age'] . "</div>";
	echo '<div class="sex"><strong>Sex: </strong>' . $row['sex'] . "</div>";
	//echo "ID: ".$row['id']." <br />Name: ".$row['name']." <br />Age: ".$row['age']." <br />Sex: ".$row['sex'];
	echo "<hr>";
}
echo "</section>";

// Close the DB Connection
mysql_close($connection);
?>
