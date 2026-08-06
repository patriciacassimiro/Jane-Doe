 <?php include 'includes/header.php' ?>

<h1>Registro</h1>

<form action="process_register.php"
      method="POST"
      enctype="multipart/form-data">

    <input type="text"
           name="username"
           placeholder="Nome">

    <br><br>

    <input type="email"
           name="email"
           placeholder="Email">

    <br><br>

    <input type="password"
           name="password"
           placeholder="Senha">

    <br><br>

    <input type="password"
           name="confirm_password"
           placeholder="Confirmar Senha">

    <br><br>

    <select name="user_type">

        <option value="user">
            Utilizador
        </option>

        <option value="admin">
            Administrador
        </option>

    </select>

    <br><br>

    <input type="file"
           name="profile_pic">

    <br><br>

    <button class="cta" type="submit">
        Registar
    </button>

</form>

</body>
 <?php include 'includes/footer.php' ?>
