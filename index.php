<?php
require "db.php";
?>

<?php if (isset($_SESSION['logget_user'])) : ?>
Авторизован <br>
Привет, <?php echo $_SESSION['logget_user']->login; ?>!
    <hr>
    <a href="/logout.php">Выйти</a>
<?php else:?>
Вы не авторизованы! <br>
<a href="/login.php">Авторизация</a><br />
<a href="/singun.php">Регистраця</a>
<?php endif;?>