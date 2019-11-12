<? 
session_start();
require 'db.php';
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
<? 
    include 'blocks/menu.php'?>
<?
$result = mysqli_query($connection, "SELECT * FROM Books");
?>
<form action="" method="post">
	<input type="text" placeholder="Title" name="titleB">
	<input type="text" placeholder="Author" name="authorB">
	<input type="text" placeholder="Year" name="yearB">
	<input type="submit">
	<hr>
	
</form>
<?
	$title = mysqlAdd($connection, $_POST['titleB']);
	$author = mysqlAdd($connection, $_POST['authorB']);
	$year = mysqlAdd($connection, $_POST['yearB']);
	$query = "INSERT INTO Books(Title,Year) VALUES ('{$title}','{$author}',($year})";
	if (!empty($title) || !empty($author) || !empty($year)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $title){
	return htmlentities(mysqli_real_escape_string($connect, $title));
}
?>
<table border="1">
<? while($Books = mysqli_fetch_assoc($result)){?>
<tr>
    <td>nr: <?= $Books['ID']?>  </td>
    <td><?= $Books['Title']?> </td>
    <td><?= $Books['Year']?></td>
    <td><?= $Books['ID_Author']?></td>
</tr>
<? }?>
</body>