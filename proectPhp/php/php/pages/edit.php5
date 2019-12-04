<?php
    /**
     * Created by PhpStorm.
     * User: User
     * Date: 28.11.2019
     * Time: 10:10
     */
    ?>
    <?php
    $result = mysqli_query($connection, "DELETE FROM book WHERE id = {$_GET['id']}" )) {
    $book = mysqli_fetch_assoc($result);

    if(!empty($_POST['title'])) {

        $result = mysqli_query($connection, "SELECT * FROM book");
        if(mysqli_query($connection, "UPDATE book SET title = '{$_POST['title']}', id_author = '{$_POST['id_author']}', pages = {$_POST['pages']}, WHERE id = {$_GET['id']}")) {
            echo 'Succes';
        } else {
            echo 'Eroare';
        }
    } else {
    }
?>
    <form action="" method="post">
        Titlul<input type="text" title="title" value="<?= $book['title']?>">
        <br>
        id_autor<input type="text" id_author="id_author" value="<?= $book['id_author']?>">
        <br>
        Pagini<input type="text" pages="pages" value="<?= $book['pages']?>">
        <br>
        <input type="submit">
    </form>
<?}?>