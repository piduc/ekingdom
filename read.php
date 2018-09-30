<?php
require("povezivanje.php");

//connect to db
$db = new mysqli($ImeServera, $UIDServer, $PWDServer, $ImeBaze);
if ($db->connect_errno) {
	//if the connection to the db failed
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}


$query="SELECT * FROM chat ORDER BY id ASC";
//execute query
if ($db->real_query($query)) {
	//If the query was successful
	$res = $db->use_result();

    while ($row = $res->fetch_assoc()) {
        $username=$row["username"];
        $text=$row["text"];
        $time=date('G:i', strtotime($row["time"])); //outputs date as # #Hour#:#Minute#
        
        echo "<p style='background-color:white; font-weight: bold;'>$time | $username: $text</p>\n";?>
		
		<script>
			chatWindow = document.getElementById('chatOutput'); 
			var xH = chatWindow.scrollHeight+10; 
			chatWindow.scrollTo(0, xH);
		</script>
		
<?php
    }
}else{
	//If the query was NOT successful
	echo "An error occured";
	echo $db->errno;
}

$db->close();
?>
