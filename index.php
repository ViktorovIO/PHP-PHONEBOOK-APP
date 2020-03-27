<?php
// DataBase
include 'db.php';
// Header
include_once 'header.php';
// Create Modal Form
include 'create.php'; 
?>
            <div class="row pt-5 pb-5">
                <button class="btn btn-success" data-toggle="modal" data-target="#modal">Создать</button>
            </div>
			<div class="row">
                <table class="table table-responsive table-list-search text-center">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Дата рождения</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">E-mail</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            $query = mysqli_query($link ,"SELECT * FROM items");
                            while($row = mysqli_fetch_array($query))
                                {
                        ?>
                                    <tr>
                                        <th scope="row"><?= $row['id'] ?></th>
                                        <td><?= $row['avatar'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                        <td><?= $row['birthdate'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['mail'] ?></td>
                                        <td>
                                            <a id="editButton" href="update.php?id=<?=$row['id']?>" class='btn btn-primary'>Редактировать</a>
                                        </td>
                                        <td>
                                            <a class='btn btn-danger' href="delete.php?id=<?=$row['id']?>">Удалить</a>
                                        </td>
                                    </tr>
                        <?
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
<?php
include_once 'footer.php';
?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>