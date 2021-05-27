<?php include('header.php'); ?>

<div class="container col-md-3">
    <h1 class="site-name text-center">Регистрация</h1>
    <form action="check.php" method="POST">
        <input type="email" class="form-control" name="email" id="email" placeholder="Введите Email">
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
    </form>
</div>
<?php include('footer.php'); ?>