<!--@Alaska GeForce gtx-->
<!--Creation date: 16/02/2020-->
<!--Last update: 28/02/2020-->

<!--Login view-->
<div class = "Login-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/login-view.css" type = "text/css"/>
    <br/><br/>
    <!--Login view platform-->
    <div class = "Login-view_Platform" align = "center">
        <!--Header text-->
        <label id = "Login-view_Cham-text">
            <label id = "Chr1">C</label><label id = "Chr2">h</label><label id = "Chr3">a</label><label id = "Chr4">m</label>
        </label>
        <br/><br/>
        <!--Phone number field-->
        <span id = "Login-view_Phone-number-field">
            <input type = "tel" placeholder = "Numéro de Téléphone" title = "Entrez ici votre contact."/>
        </span>
        <br/><br/>
        <!--Password field-->
        <span id = "Login-view_Password-field">
            <input type = "password" placeholder = "Mot de passe" title = "Insérez ici votre mot de passe."/>
        </span>
        <br/>
        <!--Error message-->
        <label id = "Login-view_Error"></label>
        <br/>
        <!--Login button-->
        <button id = "Login-view_Connection" title = "Connectez-vous maintenant sur Cham.">
            <label>Connexion</label>
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <br/><br/>
        <!--Forgot password text-->
        <label id = "Login-view_Forgot-password" title = "J'ai oublié mon mot de passe.">Mot de passe oublié ?</label>
        <br/><br/><br/><br/><br/><br/>
        <!--Sign up button-->
        <button id = "Login-view_Sign-up" title = "Inscrivez-vous maintenant sur Cham.">Inscription</button>
    </div>
    <!--Code-->
    <script type = "text/javascript" src = "../js/login-view.js"></script>
</div>