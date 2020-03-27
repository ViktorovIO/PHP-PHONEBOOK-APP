<?php
include_once 'db.php';

$get_id = $_GET['id'];

    $avatar = $_POST['edit_avatar'];
    $name = $_POST['edit_name'];
    $lastname = $_POST['edit_lastname'];
    $birthdate = $_POST['edit_birthdate'];
    $phone = $_POST['edit_phone'];
    $mail = $_POST['edit_mail'];


if (isset($_GET['id'])) {
	$query = "SELECT * FROM items WHERE id='$get_id'";
	$result = mysqli_query($link, $query);
}
	
if (isset($_POST['edit_submit'])) {
    $update = "UPDATE items SET avatar='$avatar', name='$name', lastname='$lastname', birthdate='$birthdate', phone='$phone', mail='$mail' WHERE id='$get_id'";
    mysqli_query($link, $update);
}

include_once 'header.php';

?>
<div class='container'>
	<div class="row">
        <a href="index.php"><- Назад</a>
    </div>
<?php
	while($item = mysqli_fetch_array($result)) {
?>
    <form action="" method="post">
        <div class="form-group">
            <h3>Редактирование записи #<?=$get_id?>:</h3>
            <label for="edit_avatar">Аватар: <?= $item['avatar'] ?></label>
            <input type="text" class="form-control" name="edit_avatar" value="<?= $item['avatar'] ?>" placeholder="Avatar"/>
        </div>
        <div class="form-group">
            <label for="edit_avatar">Имя: <?= $item['name'] ?></label>
            <input type="text" class="form-control" name="edit_name" value="<?= $item['name'] ?>" placeholder="Имя"/>
        </div>
        <div class="form-group">
            <label for="edit_avatar">Фамилия: <?= $item['lastname'] ?></label>
            <input type="text" class="form-control" name="edit_lastname" value="<?= $item['lastname'] ?>" placeholder="Фамилия"/>
        </div>
        <div class="form-group">
            <label for="edit_avatar">Дата рождения: <?= $item['birthdate'] ?></label>
            <input type="text" class="form-control" name="edit_birthdate" value="<?= $item['birthdate'] ?>" placeholder="Дата рождения"/>
        </div>
        <div class="form-group">
            <label for="edit_avatar">Телефон: <?= $item['phone'] ?></label>
            <input type="text" class="form-control" name="edit_phone" value="<?= $item['phone'] ?>" placeholder="Телефон"/>
        </div>
        <div class="form-group">
            <label for="edit_avatar">Email: <?= $item['mail'] ?></label>
            <input type="text" class="form-control" name="edit_mail" value="<?= $item['mail'] ?>" placeholder="Email"/>
        </div>
        <input type="submit" name="edit_submit" class="btn btn-primary" value="Изменить">
    </form>
<?php
	}
?>
</div>

<?php
include_once 'footer.php';
?>