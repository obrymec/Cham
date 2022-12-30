<!--@Alaska GeForce gtx-->
<!--Creation date: 18/02/2020-->
<!--Last update: 28/02/2020-->

<!--Forgot password view-->
<div class = "Forgot-password-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/forgot-password-view.css" type = "text/css"/>
    <br/>
    <!--Left arrow image-->
    <div class = "Forgot-password_Left-arrow" title = "Revenir à la page de connexion !"><img src = "../icons/black_left_arrow.png"/></div>
    <!--Personal infos platform-->
    <div class = "Forgot-password-view_Platform" align = "center">
        <br/>
        <!--Personnal informations title text-->
        <label id = "Forgot-password-view_Title"><strong>Mot de passe oublié ?</strong></label>
        <br/>
        <!--Details text-->
        <span id = "Forgot-password-view_Help">
            <label>Un lien sécurisé sera envoyé par méssage pour rénitialiser votre mot de passe.</label>
        </span>
        <br/>
        <!--Phone number field-->
        <span id = "Forgot-password-view_Phone-number">
            <input type = "tel" placeholder = "Numéro de Téléphone" title = "Saisisez votre numéro de téléphone."/>
        </span>
        <br/><br/>
        <!--Error message-->
        <span id = "Forgot-password-view_Error">
            <label>Veuillez renseigner le numéro de téléphone lié à votre compte.</label>
        </span>
        <br/><br/>
        <!--Send button-->
        <button id = "Forgot-password-view_Send" title = "Envoyer le lien !">
            Envoyer
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <br/><br/>
        <!--Code-->
        <script type = "text/javascript" src = "../js/forgot-password-view.js"></script>
    </div>
</div>