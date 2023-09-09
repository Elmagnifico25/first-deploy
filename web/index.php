<?php
echo 'Автор: Павлов Артем<br /><br />';
?>

<form method="post" action="<?=$_SERVER['REQUEST_URI']?>post.php">
    <input type="text" name="name" placeholder="Введите ваше имя"><br /><br />
    <input type="submit" value="Отправить">
</form>