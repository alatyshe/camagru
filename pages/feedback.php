<!DOCTYPE html>
<html lang="ru">

<head>
<?php
  $title = "Обратная связь";
  $path = $_SERVER['DOCUMENT_ROOT'] . "/camagru/pages/blocks/head.php";
  require_once $path;
?>

</head>
<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . "/camagru/pages/blocks/header.php";
  require_once $path;
?>

<div class="container mt-5">
  <form action="check.php" method="post">
    <h3>Контактная форма</h3>
    <br>
    <input type="email" name="email" placeholder="Введите Email" class="form-control">
    <br>
    <textarea name='message' class="form-control" placeholder="Введите ваше сообщение"></textarea>
    <br>
    <button type="submit" name="send" class="btn btn-lg btn-block btn-success">Отправить</button>
    <br>
  </form>
</div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . "/camagru/pages/blocks/footer.php";
  require_once $path;
?>


</body>
</html>