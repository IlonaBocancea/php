<? 
session_start();
require 'db.php5';
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;

}

?>
<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
<body>
<?include 'blocks/menu.php'?>
<?
$result = mysqli_query($connection, "SELECT * FROM author");
?>
<form action="" method="post">
	<input type="text" placeholder="Title" name="id_authorB">
	<input type="text" placeholder="Author" name="firstname_authorB">
	<input type="text" placeholder="Author" name="lastname_authorB">
	<input type="text" placeholder="Year" name="age">
	<input type="submit">
	<hr>
	
</form>
<?
	$id_authorB = mysqlAdd($connection, $_POST['id_authorB']);
	$firstname_authorB = mysqlAdd($connection, $_POST['firstname_authorB']);
	$lastname_authorB = mysqlAdd($connection, $_POST['lastname_authorB']);
	$age = mysqlAdd($connection, $_POST['age']);
	$query = "INSERT INTO author(id_author,age) VALUES ('{$title}','{$author}',($age})";
	if (!empty($id_author) || !empty($firstname_author) || !empty($lastname_author) || !empty($age)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $id_author){
	return htmlentities(mysqli_real_escape_string($connect, $id_author));
}
?>
<table border="2">
<? while($author = mysqli_fetch_assoc($result)){?>
<tr>
    <td>nr: <?= $author['id_author']?>  </td>
    <td><?= $author['firstname_author']?> </td>
    <td><?= $author['lastname_author']?></td>
    <td><?= $author['age']?></td>
</tr>
<? }?>
</body>