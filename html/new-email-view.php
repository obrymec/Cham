<!--@Alaska GeForce gtx-->
<!--Creation date: 14/02/2020-->
<!--Last update: 28/02/2020-->

<!--New email view-->
<div class = "New-email-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/new-email-view.css" type = "text/css"/>
    <!--Title text header-->
    <header class = "New-email-view_Header-title">
        <strong><label>Paramètres</label></strong>
        <img src = "../icons/gray_down_arrow.png" width = "18px" height = "18px"/>
        <label>Mon profile</label>
        <img src = "../icons/gray_down_arrow.png" width = "18px" height = "18px"/>
        <label>E-mail</label>
    </header>
    <!--New email platform-->
    <div class = "New-email-view_Platform" align = "center">
        <br/>
        <!--New email-->
        <span id = "New-email-view_New">
            <input type = "email" placeholder = "Nouvelle addresse" title = "Saisir ici son nouvelle addresse e-mail."/>
        </span>
        <br/><br/>
        <!--Confirm new email field-->
        <span id = "New-email-view_Confirm">
            <input type = "email" placeholder = "Confirmez votre addresse" title = "Confirmez votre nouvelle addresse e-mail."/>
        </span>
        <br/><br/>
        <!--Password field-->
        <span id = "New-email-view_Password">
            <input type = "password" placeholder = "Mot de passe" title = "Saisisez votre mot de passe actuel."/>
        </span>
        <br/><br/>
        <!--Error message-->
        <label id = "New-email-view_Error"></label>
        <br/>
        <!--Save button-->
        <button id = "New-email-view_Save-data" title = "Sauvegarder les changements apportés !">
            Sauvegarder
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Sauvegarde en cours..."/>
        </button>
    </div>
</div>