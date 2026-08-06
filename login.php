 <?php include 'includes/header.php' ?>
 
 <h1>Login</h1>
<form action="process_login.php"
      method="POST">

    <input type="text"
           name="username">

    <br><br>

    <input type="password"
           name="password">

    <br><br>

    <button class="cta" type="submit">
        Entrar
    </button>

</form>

 <?php include 'includes/footer.php' ?>