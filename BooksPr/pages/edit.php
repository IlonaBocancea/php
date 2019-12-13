    <?php
	$result = mysqli_query($connection, "SELECT * FROM books WHERE ID = {$_GET['id']}");
   $books = mysqli_fetch_assoc($result);

    if(!empty($_POST['Title'])) {

        $result = mysqli_query($connection, "SELECT * FROM books");
        if(mysqli_query($connection, "UPDATE books SET Title = '{$_POST['Title']}', year = '{$_POST['year']}', ID_Author = {$_POST['ID_Author']}, WHERE ID = {$_GET['ID']}")) {
            echo 'Succes';
        } else {
            echo 'Eroare';
        }
    } else {
    }
?>
    <form action="" method="post">
        Titlul<input type="text" Title="Title" value="<?= $books['Title']?>">
        <br>
        Anul<input type="text" Year="Year" value="<?= $books['Year']?>">
        <br>
		ID_Author<input type="text" ID_Author="ID_Author" value="<?= $books['year']?>">
		<br>
        <input type="submit">
    </form>
