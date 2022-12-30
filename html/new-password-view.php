<!--@Alaska GeForce gtx-->
<!--Creation date: 14/02/2020-->
<!--Last update: 28/02/2020-->

<!--New password view-->
<div class = "New-password-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/new-password-view.css" type = "text/css"/>
    <!--Title text header-->
    <header class = "New-password-view_Header-title">
        <strong><label>Paramètres</label></strong>
        <img src = "../icons/gray_down_arrow.png" width = "18px" height = "18px"/>
        <label>Mon profile</label>
        <img src = "../icons/gray_down_arrow.png" width = "18px" height = "18px"/>
        <label>Mot de passe</label>
    </header>
    <!--New password platform-->
    <div class = "New-password-view_Platform" align = "center">
        <br/>
        <!--Current password-->
        <span id = "New-password-view_Current">
            <input type = "password" placeholder = "Mot de passe actuel" title = "Saisir le mot de passe actuel."/>
        </span>
        <br/><br/>
        <!--New password field-->
        <span id = "New-password-view_New">
            <input type = "password" placeholder = "Nouveau mot de passe" title = "Mettre votre nouveau mot de passe."/>
        </span>
        <br/><br/>
        <!--Confirm new password field-->
        <span id = "New-password-view_Confirm">
            <input type = "password" placeholder = "Confirmez mot de passe" title = "Confirmez votre nouveau mot de passe."/>
        </span>
        <br/><br/>
        <!--Error message-->
        <label id = "New-password-view_Error"></label>
        <br/>
        <!--Save button-->
        <button id = "New-password-view_Save-data" title = "Sauvegarder les changements apportés !">
            Sauvegarder
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Sauvegarde en cours..."/>
        </button>
        <br/><br/>
        <!--Forgot password text-->
        <label id = "New-password-view_Forgot-password" title = "J'ai oublié mon mot de passe.">Mot de passe oublié ?</label>
    </div>
</div>