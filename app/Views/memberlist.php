<?php if (isset($_SESSION['userID']) && $_SESSION['userID'] == 1): ?>
    <h1>LISTE DES UTILISATEURS :</h1>
    <?php if (count($users) > 0): ?>
        <table border='1'>
            <tr>
                <th>idUtilisateur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>email</th>
                <th>dateNaissance</th>
                <th>Adresse</th>
                <th>Pseudo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <form action="<?= base_url('memberlist') ?>" method='post'>
                    <input type='hidden' name='cle' value='<?= $user['idUtilisateur'] ?>'>
                    <tr>
                        <td><?= $user['idUtilisateur'] ?></td>
                        <td><input type='text' name='nom' size='20' value='<?= $user['nom'] ?>'></td>
                        <td><input type='text' name='prenom' size='20' value='<?= $user['prenom'] ?>'></td>
                        <td><input type='text' name='email' size='20' value='<?= $user['email'] ?>'></td>
                        <td><input type='text' name='dateNaissance' size='20' value='<?= $user['dateNaissance'] ?>'></td>
                        <td><input type='text' name='adresse' size='20' value='<?= $user['adresse'] ?>'></td>
                        <td><input type='text' name='nomUtilisateur' size='20' value='<?= $user['nomUtilisateur'] ?>'></td>
                        <td><input type='submit' name='update' value='Modifier'></td>
                        <td><input type='submit' name='delete' value='Supprimer'></td>
                    </tr>
                </form>
            <?php endforeach; ?>
        </table>
        <p>Nombre d'utilisateurs : <?= $user_count ?></p>
        <p>La moyenne d'âge est : <?= $average_age ?></p>
    <?php else: ?>
        <p>Aucun enregistrement, désolé</p>
    <?php endif; ?>
<?php else: ?>
    <p>Accès refusé</p>
<?php endif; ?>