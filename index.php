<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Телефонный Справочник">
    <title>Телефонный Справочник</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </header>
    <div id="content">
        <div class="container">
            <h1>Телефонный справочник</h1>		

<?php
    include 'db.php';
?>
            <div class="row">
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
                                            <a id="editButton" href="update.php?id=<?=$row['id']?>" class='btn btn-primary' data-toggle='modal' data-target="#editModal">Редактировать</a>
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
    <div id="footer">
        <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">УрГЭУ СИНХ 2020&copy. ИНО ЗИВТ-18 <br> Викторов / Лукьяница</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>
<!--     Create Modal Form      -->
	<?= include 'create.php'; ?>
<!--     Update / Delete Modal Form      -->
	<?= include 'update.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).on("click", "#editButton", function() {
            $.ajax ({
                url: "/update.php",
                method: "POST",
                data: {
                    id: $(this).attr("href")
                }

            })
        });
    </script>
  </body>
</html>