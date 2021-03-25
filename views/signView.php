<main>
    <div>
        <h1>Créez un compte</h1>
    </div>
    <form method="POST" id="connectForm" action="index.php?action=addUser">
                <?php if(isset($message)): ?>
                <div class="red">
                    <?php foreach($message as $mes) : ?>
                    <p><?= $mes ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif;?>
        <label for="email">Email:</label>
        <input type="text" id="mail" name="mail">
        <label for="email">Mot de passe :</label>
        <input type="text" id="psw" name="psw">
        <input type="submit" value="login">
    </form>
    <a href="index.php?action=login">Vous avez déjà un compte</a>
</main>