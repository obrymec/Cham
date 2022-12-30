<!--@Alaska GeForce gtx-->
<!--Creation date: 19/02/2020-->
<!--Last update: 28/02/2020-->

<!--Money drop request view-->
<div class = "Money-drop-request-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/money-drop-request-view.css" type = "text/css"/>
    <!--Title text header-->
    <header class = "Money-drop-request-view_Header-title">
        <br/><strong><label>Dépôt d'argent</label></strong><br/>
    </header>
    <br/>
    <!--Left arrow image-->
    <div class = "Money-drop-request-view_Left-arrow" title = "Retour."><img src = "../icons/black_left_arrow.png"/></div>
    <!--Money drop request platform-->
    <div class = "Money-drop-request-view_Platform" align = "center">
        <br/>
        <!--Image zone-->
        <div class = "Money-drop-request-view_Image">
            <figure>
                <img src = "../icons/money_drop_request.png"/>
                <figcaption><label>Augmentez votre épargne et atteignez plus vite vos objectifs financiers.</label></figcaption>
            </figure>
        </div>
        <!--Money amount field-->
        <span id = "Money-drop-request-view_Money-amount">
            <input type = "text" placeholder = "Montant du Dépôt" title = "Entrez ici la somme à déposée."/>
        </span>
        <br/><br/>
        <!--Money amount confirm field-->
        <span id = "Money-drop-request-view_Confirm-money">
            <input type = "text" placeholder = "Confirmation" title = "Confirmez la somme à déposée."/>
        </span>
        <br/>
        <!--Error message-->
        <label id = "Money-drop-request-view_Error"></label>
        <br/>
        <!--Drop button-->
        <button id = "Money-drop-request-view_Drop" title = "déposez son argent maintenant !">
            Effectuer le dépôt
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <!--Code-->
        <script type = "text/javascript" src = "../js/money-drop-request-view.js"></script>
    </div>
</div>