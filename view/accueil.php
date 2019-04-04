<div>
    <h3>Mon profil</h3>

    <?php

        isset($_SESSION["login"]) ? $login = $_SESSION["login"] : header("Location: index.php");
        $acc = new Account($login);
        $profil = $acc->get_profil();
        if($profil == null){
            header("Location: index.php");
        }
        if($profil['TPC'] == ""){
            $profil['TPC'] = $acc->generate_tpc($login);
        }

        

        if($profil['LOL_ACCOUNT'] == null){
            $thirdpartycode = ""
    ?>
        <div>
            <h4>Associer votre compte : </h4>
            <p>- Votre Third-Party-Code : <input value="<?php echo $profil['TPC']; ?>" onclick="this.focus();this.select()" readonly="readonly"/></p>
            <p>Pour associer votre compte LoL :</p>
             <!-- Mémo pour savoir où mettre les balises UL et LI : Il manque ul sur ton li -->
            <ul>
                <li>Aller dans le client LoL</li>
                <li>Aller dans Paramètres > Vérification</li>
                <li>Coller le Third-Party-Code</li>
                <li>Entrer votre pseudo ici puis valider</li>
            </ul>
            <input name="pseudo" placeholder="Pseudo LoL"/>
            <input type="submit"/>
        </div>
        
        
        
        
    <?php
        }else{
    ?>
        <div>
            <h4>Quêtes et challenges :</h4>
            <ul>
                <li>Quêtes effectuées : 0</li>
                <li>Challenges gagnés : 0</li>
            </ul>
        </div>
        <div>
            <h4>Succès :</h4>
            KEDAL
        </div>
        <div>
            <h4>Développeur :</h4>
            <p>Clé de développement : ##############</p>
        </div>
    <?php
        }
    ?>

    

</div>