<div id="crudplugin-auth">
    <section>
        <?php
        $err = $_GET['err'];
        if (isset($err) && $err != '') {
            $err = htmlspecialchars($_GET['err'], ENT_QUOTES, 'UTF-8');
            echo ("<div class='errorMsg'>Wystąpił błąd:<br/>$err</div>");
        }
        ?>

        <form method="POST" action="<?php echo plugins_url('auth/login.php', __DIR__); ?>">
            <label for="login">login</label>
            <input name="login" placeholder="Twój nickname">
            <label for="password">hasło</label>
            <input type="password" name="password" placeholder="********">
            <button>Wyślij</button>
        </form>

        <button id="crudplugin-create-account-bttn">
            <h2>lub utwórz konto</h2>
        </button>

        <form id='crudplugin-account-register-form' method="POST" action="<?php echo plugins_url("auth/register.php", __DIR__) ?>">
            <label for="newLogin">login</label>
            <input name="newLogin" placeholder="nowy użytkownik" >

            <label for="newPassword">hasło</label>
            <input type="password" name="newPassword" placeholder="********">

            <label for="repeatNewPassword">powtórz hasło</label>
            <input type="password" name="repeatNewPassword" placeholder="********">
            <button>Wyślij</button>
        </form>
    </section>
</div>

<script>
    (() => {
        let createAccountBttn = document.getElementById("crudplugin-create-account-bttn");
        let createAccountForm = document.getElementById('crudplugin-account-register-form');
        if (!createAccountBttn || !createAccountForm)
            return

        createAccountBttn.addEventListener('click', () => {
            createAccountForm.style.display = createAccountForm.style.display == 'none' ? 'block' : 'none';
        })
    })()
</script>