<div class="container">
    <h1>Portail Admin</h1>
<form method="post" action="admin-connexion">
    <div class="form-group">
    <label for="identifiant">Identifiant</label>
    <input class='form-control' type="text" name="identifiant">
    </div>
    <div class="form-group">
    <label for="password" >Mot de passe : </label>
    <input class='form-control' type="password" name="password">
    </div>
    <div class="form-group">
        <input class='btn btn-primary' type="submit">
    </div>
</form>
    <?php if(isset($data['error']) && $data['error']){?>
    <p style="color: red">Login ou Mot de passe incorrect</p>
    <?php } ?>
</div>