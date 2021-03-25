<main id="profil">
    <body>
    <div class="container">
        <h1>Completer votre PROFIL</h1>
        <?php if(isset($message)): ?>
                <div class="red">
                    <?php foreach($message as $mes) : ?>
                    <p><?= $mes ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif;?>
        <div class="formProfil">
        <p>Mail : <?= $userPath['mail'] ?></p>
        
        <form method="POST" >
            <p><strong>Pseudo</strong> : <?php if(array_key_exists('pseudo',$userPath)) :?><?= $userPath['pseudo'] ?><?php endif;?></p>
            <div><input type="text" id="pseudo" name="pseudo" ><input type="submit" value="Effectuer le changement"></div>
        </form>


        <form method="POST">
            <p><strong>Adresse</strong> : <?php if(array_key_exists('adresse',$userPath)) :?><?= $userPath['adresse'] ?><?php endif;?></p>
            <div>
                <input type="text" id="adresse" name="adresse" ><input type="submit" value="Effectuer le changement">
            </div>
        </form>


        <form method="POST">
            <p><strong>Numéro</strong> : <?php if(array_key_exists('numero',$userPath)) :?><?= $userPath['numero'] ?><?php endif;?></p>
            <div><input type="number" id="numero" name="numero" ><input type="submit" value="Effectuer le changement"></div>
        </form>


        <form method="POST">
            <p><strong>Date de Naissance</strong> : <?php if(array_key_exists('birthDate',$userPath)) :?><?= $userPath['birthDate'] ?><?php endif;?></p>
            <div><input type="text" id="date" name="date" ><input type="submit" value="Effectuer le changement"></div>
        </form>
        </div>    
        
    </div>
    </body>
</main>