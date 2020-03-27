<?php
$get_id = $_GET['id'];

    $avatar = $_POST['edit_avatar'];
    $name = $_POST['edit_name'];
    $lastname = $_POST['edit_lastname'];
    $birthdate = $_POST['edit_birthdate'];
    $phone = $_POST['edit_phone'];
    $mail = $_POST['edit_mail'];


if (isset($_POST['edit_submit'])) {
    $update = "UPDATE items SET avatar=' . $avatar . ', name=' . $name . ', lastname=' . $lastname . ', birthdate=' . $birthdate . ', phone=' . $phone . ', mail=' . $mail . ' WHERE id=' . $get_id . '";
    mysqli_query($link, $update);
}

?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактировать запись #<?=$_GET['id'] ?>:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $result = mysqli_query($link ,"SELECT * FROM items WHERE id='$get_id'");
				var_dump($item)
				?>
                    <form action="" method="post">
                        <div class="form-group">
                            <p><?=$get_id?></p>
                            <label for="edit_avatar"><?= $item['avatar'] ?></label>
                            <input type="text" class="form-control" name="edit_avatar" value="" placeholder="Avatar"/>
                        </div>
                        <div class="form-group">
                            <label for="edit_avatar"><?= $item['name'] ?></label>
                            <input type="text" class="form-control" name="edit_name" value="<?= $item['name'] ?>" placeholder="Имя"/>
                        </div>
                        <div class="form-group">
                            <label for="edit_avatar"><?= $item['lastname'] ?></label>
                            <input type="text" class="form-control" name="edit_lastname" value="<?= $item['lastname'] ?>" placeholder="Фамилия"/>
                        </div>
                        <div class="form-group">
                            <label for="edit_avatar"><?= $item['birthdate'] ?></label>
                            <input type="text" class="form-control" name="edit_birthdate" value="<?= $item['birthdate'] ?>" placeholder="Дата рождения"/>
                        </div>
                        <div class="form-group">
                            <label for="edit_avatar"><?= $item['phone'] ?></label>
                            <input type="text" class="form-control" name="edit_phone" value="<?= $item['phone'] ?>" placeholder="Телефон"/>
                        </div>
                        <div class="form-group">
                            <label for="edit_avatar"><?= $item['mail'] ?></label>
                            <input type="text" class="form-control" name="edit_mail" value="<?= $item['mail'] ?>" placeholder="Email"/>
                        </div>
                        <input type="submit" name="edit_submit" class="btn btn-primary" value="Изменить">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>