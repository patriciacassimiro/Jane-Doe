 <?php include 'includes/header.php' ?>

<h1>Registro</h1>

<form class="form-page form-narrow" action="process_register.php"
      method="POST"
      enctype="multipart/form-data">

    <label for="username">Nome:</label>
    <input type="text"
           class="form-control"
           id="username"
           name="username"
           placeholder="Nome">

    <br><br>

    <label for="email">Email:</label>
    <input type="email"
           class="form-control"
           id="email"
           name="email"
           placeholder="Email">

    <br><br>

    <label for="password">Palavra-passe:</label>
    <input type="password"
           class="form-control"
           id="password"
           name="password"
           placeholder="Senha">

    <br><br>

    <label for="confirm_password">Confirmar palavra-passe:</label>
    <input type="password"
           class="form-control"
           id="confirm_password"
           name="confirm_password"
           placeholder="Confirmar Senha">

    <br><br>

    <label for="profile_pic">Fotografia de perfil:</label>
    <input type="file"
           class="form-control"
           id="profile_pic"
           name="profile_pic">

    <br><br>

    <button class="cta" type="submit">
        Registar
    </button>

</form>

</body>
 <?php include 'includes/footer.php' ?>
