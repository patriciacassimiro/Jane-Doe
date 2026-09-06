 <?php include 'includes/header.php' ?>
 
 <h1>Login</h1>
<form class="form-page form-narrow" action="process_login.php"
      method="POST">

    <label for="username">Utilizador:</label>
    <input type="text"
           class="form-control"
           id="username"
           name="username">

    <br><br>

    <label for="password">Palavra-passe:</label>
    <input type="password"
           class="form-control"
           id="password"
           name="password">

    <br><br>

    <button class="cta" type="submit">
        Entrar
    </button>

</form>

 <?php include 'includes/footer.php' ?>