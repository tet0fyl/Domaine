<h1>Espace Admin</h1>
<div>
<form method="post" action="admin-connexion">
    <div>
    <label for="identifiant">Identifiant</label>
    <input type="text" name="identifiant">
    </div>
    <div>
    <label for="password" >Mot de passe : </label>
    <input type="password" name="password">
    </div>
    <input type="submit">
</form>
    <?php if(isset($data['error']) && $data['error']){?>
    <p style="color: red">Login ou Mot de passe incorrect</p>
    <?php } ?>
</div>