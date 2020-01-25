<h2>Infos Pratiques</h2>

<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
    Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
    quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
    Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
    Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum,
    et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10757.47069547501!2d7.2350291!3d47.6189838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4f1774fcfc1f11!2sLe%20Domaine!5e0!3m2!1sfr!2sfr!4v1575674035996!5m2!1sfr!2sfr" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
    Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
    quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
    Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
    Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum,
    et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>


<div class="contact">
        <form class="col-12 col-md-6" id="formulaire" name="formulaire" action="infosPratiques.php" method="POST">
            <div class="form-group">
                        <label for="name">Votre nom :</label><br>
                        <input class="form-control" type="text" required id="name" name="name"><br>
            </div>
            <div class="form-group">
            <label for="email">Votre e-mail :</label><br>
                        <input class="form-control" type="text" required id="email" name="email"><br>
            </div>
            <div class="form-group">
                        <label for="message">Votre message :</label><br>
                        <textarea class="form-control" type="text" rows="3" required id="message" name="message"></textarea><br>
            </div>
            <a class="btn bg-light rounded text-white" onclick="document.getElementById('formulaire').submit();">Envoyer</a>
        </form>
</div>

<?php
if(isset($_POST['message'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis Le Domaine</h1>
        <p><b>name : </b>' . $_POST['name'] . '<br>
        <b>email : </b>' . $_POST['email'] . '<br>
        <b>message : </b>' . $_POST['message'] . '</p>';

    $retour = mail('contact@le-domaine.com', 'Envoi depuis page ma page de contact', $message, $entete);
    if($retour) {
        echo '<p style="color: black; text-align:center; ">Votre message a bien été envoyé.</p>';
    }

}
?>