<form class="form-categ" action="" method="post">
    <h2 class="text-center">Recherchez un membre par catégorie</h2>
    <select name="categ-select" id="categ-select">
        <option value="">Aucune catégorie</option>
        <?php foreach ($categories as $categorie) { ?>
        <option value="<?php echo $categorie['idCateg'] ?>">
            <?php echo $categorie["nomCateg"] ?>
        </option>
        <option value="mineur">catégorie -18 ans</option>
        <?php } ?>
    </select>
    <input type="submit" value="Envoyez" aria-label="categ-select" />
</form>