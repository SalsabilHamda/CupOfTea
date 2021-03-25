<main>
    <div>
        <h1>Se Connecter</h1>
    </div>
    <div class="container">
        <?php if(isset($message)): ?>
                    <div class="red">
                        <?php foreach($message as $mes) : ?>
                        <p><?= $mes ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif;?>
        <form method="POST" id="connectForm">
            <label for="email">Email:</label>
            <input type="text" id="mail" name="mail" <?php if(array_key_exists('mail',$_SESSION)) :?>value="<?= $_SESSION['mail'] ?>"<?php endif;?>>
            <label for="psw">Mot de passe :</label>
            <input type="text" id="psw" name="psw">
            <input type="submit" value="login">
        </form>
        <a href="index.php?action=sign">Créer un compte</a>
    </div>
</main>