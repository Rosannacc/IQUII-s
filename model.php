<?php
define("LOCALHOST", "http://localhost/");

	
	
if(isset($_POST['artID'])){
	$data['artID'] = $_POST['artID'];		
	wishlist($data);
	//echo json_encode($data);
	//exit;
}
	
function caricaArticoli($variabile){
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "iquiis";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($variabile == 'true'){
		$sql = "SELECT id, title, tag, text, wishlist FROM articolo ORDER BY title ASC";
		$news = $conn->query($sql);
	}else{
		$sql = "SELECT id, title, tag, text, wishlist FROM articolo";
		$news = $conn->query($sql);
	}
	return $news;
}

function leggiArticolo($id){
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "iquiis";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT id, title, tag, text, wishlist FROM articolo WHERE id = ".$id;
	$art = $conn->query($sql);
	$articolo = $art->fetch_assoc();
	return $articolo;
	
}

function cerca($search){
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "iquiis";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT id, title, tag, text, wishlist FROM articolo WHERE tag  LIKE '%".$term."%'";
	$s = $conn->query($sql);
	$articoli = $s->fetch_assoc();
	return $articoli;
}

function wishlist($artID){
	$ai = $artID['artID'];
	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "iquiis";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$query = "SELECT id, wishlist FROM articolo WHERE id = ".$ai;
	$result = $conn->query($query);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
	if($row['wishlist'] == 0){
		
		$query1 = "UPDATE articolo SET wishlist = 1 WHERE id = ".$ai;
	}else{
		$query1 = "UPDATE articolo SET wishlist = 0 WHERE id = ".$ai;
	}
	$result1 = $conn->query($query1);
	$query2 = "SELECT id, wishlist FROM articolo WHERE id = ".$ai;
	$result2 = $conn->query($query2);
	$row1 = $result2->fetch_array(MYSQLI_ASSOC);
	$data['wish'] = $row1['wishlist'];
	echo json_encode($data);
	exit;	
	
}


?>