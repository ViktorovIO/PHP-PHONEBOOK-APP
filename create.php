<?php
$avatar = $_POST['avatar'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
// Create
if (isset($_POST['avatar']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['birthdate'])) {
	$query = "INSERT INTO `items`(avatar, name, lastname, birthdate, phone, mail) VALUES('$avatar', '$name', '$lastname', '$birthdate', '$phone', '$mail')";
	mysqli_query($link, $query);
}

?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Добавить:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="avatar" value="" placeholder="Avatar"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" value="" placeholder="Имя"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="lastname" value="" placeholder="Фамилия"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="birthdate" value="" placeholder="Дата рождения"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="phone" value="" placeholder="Телефон"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="mail" value="" placeholder="Email"/>
					</div>
					<input type="submit" name="submit" class="btn btn-primary" value="Добавить">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>
