<!--@Alaska GeForce gtx-->
<!--Creation date: 17/02/2020-->
<!--Last update: 09/03/2020-->

<!--Sign up view-->
<div class = "Sign-up-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/sign-up-view.css" type = "text/css"/>
    <br/>
    <!--Left arrow image-->
    <div class = "Sign-up-view_Left-arrow" title = "Revenir à la page de connexion !"><img src = "../icons/black_left_arrow.png"/></div>
    <!--Sign-up platform-->
    <div class = "Sign-up-view_Platform" align = "center">
        <br/>
        <!--Sign-up to Cham title text-->
        <label id = "Sign-up-view_Title"><strong>Bienvenu chez Cham</strong></label>
        <br/>
        <!--Details text-->
        <span class = "Sign-up-view_Help">
            <label>Fournissez les informations suivantes pour commencer à utliser Cham.</label>
        </span>
        <br/><br/>
        <!--Phone number field-->
        <span id = "Sign-up-view_Phone-number-field">
            <input type = "tel" placeholder = "Numéro de Téléphone" title = "Entrez ici votre contact."/>
        </span>
        <br/><br/>
        <!--Password field-->
        <span id = "Sign-up-view_Password-field">
            <input type = "password" placeholder = "Mot de passe" title = "Insérez ici votre mot de passe."/>
        </span>
        <br/>
        <!--Error message-->
        <label id = "Sign-up-view_Error"></label>
        <!--Cham Agreement-->
        <span id = "Sign-up-view_Cham-agreement">
            <input type = "checkbox" title = "J'accepte ces conditions."/>
            <label>J'accepte les <label title = "Consulter les conditions générales d'utilisation !">
                conditions générales d'utilisation</label> de Cham.
            </label>
        </span>
        <br/><br/>
        <!--Create account button-->
        <button id = "Sign-up-view_Account" title = "Créer mon compte Cham !">
            <label>Je Crée mon compte</label>
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <br/><br/><br/><br/><br/>
        <!--Sign in button-->
        <button id = "Sign-up-view_Sign-in" title = "Se connecter maintenant sur Cham.">Connexion</button>
    </div>
    <!--Code-->
    <script type = "text/javascript" src = "../js/sign-up-view.js"></script>
</div>