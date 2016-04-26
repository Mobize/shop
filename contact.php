<?php
require_once 'partials/header.php';

//debug($_POST);

// On réceptionne les données du formulaire
$name = !empty($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = !empty($_POST['email']) ? strip_tags($_POST['email']) : '';
$message = !empty($_POST['message']) ? strip_tags($_POST['message']) : '';

$errors = array();

// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {

    // On check les erreurs possibles
    if (empty($name)) {
        $errors['name'] = 'Veuillez renseigner votre nom';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez renseigner un email valide';
    }
    if (empty($message)) {
        $errors['message'] = 'Votre message est vide';
    } else if (strlen($message) > 65535) {
        $errors['message'] = 'Votre message ne doit pas dépasser 65535 caractères';
    }

    //debug($errors);

    // Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
    if (empty($errors)) {

        $query = $db->prepare('INSERT INTO contact SET name = :name, email = :email, message = :message, date = NOW()');

        // Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);

        // On execute la requête
        $query->execute();

        // On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
        $insert_id = $db->lastInsertId();

        if (!empty($insert_id)) {
            echo '<div class="alert alert-success" role="alert">';
            echo 'Votre message a bien été envoyé';
            echo '</div>';

            redirectJS('index.php', 3);

            exit();
        }
        $errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';
    }
}

?>

        <h1>Contact</h1>

        <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <ul>
            <?php
            foreach($errors as $error) {
                echo '<li>'.$error.'</li>';
            }
            ?>
            </ul>
        </div>
        <?php } ?>

        <form class="form-horizontal" action="" method="POST" novalidate>
            <div class="form-group <?= !empty($errors['name']) ? 'has-error' : '' ?>">
                <label for="name" class="col-sm-2 control-label">Prénom</label>
                <div class="col-sm-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre prénom" value="<?= $name ?>">
                </div>
            </div>
            <div class="form-group <?= !empty($errors['email']) ? 'has-error' : '' ?>">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" value="<?= $email ?>">
                </div>
            </div>
            <div class="form-group <?= !empty($errors['message']) ? 'has-error' : '' ?>">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-5">
                    <textarea id="message" name="message" class="form-control" placeholder="Votre message"><?= $message ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Envoyer</button>
                </div>
            </div>
        </form>

<?php require_once 'partials/footer.php'; ?>