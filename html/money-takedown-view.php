<!--@Alaska GeForce gtx-->
<!--Creation date: 11/02/2020-->
<!--Last update: 28/02/2020-->

<!--Money takedown view-->
<div class = "Money-takedown-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/money-takedown-view.css" type = "text/css"/>
    <!--Title text header-->
    <header class = "Money-takedown-view_Header-title">
        <br/><strong><label>Retrait d'argent</label></strong><br/>
    </header>
    <br/>
    <!--Left arrow image-->
    <div class = "Money-takedown-view_Left-arrow" title = "Retour." style = "margin-left: 20px;">
        <img src = "../icons/black_left_arrow.png"/>
    </div>
    <!--Money takedown platform-->
    <div class = "Money-takedown-view_Platform" align = "center">
        <br/>
        <!--Image zone-->
        <div class = "Money-takedown-view_Image">
            <figure>
                <img src = "../icons/money_takedown.png"/>
                <figcaption>
                    <label>Vous ne pouvez demander avant 6 mois d'épargne. Sinon des pénalités s'appliqueront au montant à retirer.</label>
                </figcaption>
            </figure>
        </div>
        <!--Money amount field-->
        <span id = "Money-takedown-view_Money-amount">
            <input type = "text" placeholder = "Montant à retirer" title = "Entrez ici la somme à retirer."/>
        </span>
        <br/><br/>
        <!--Money amount confirm field-->
        <span id = "Money-takedown-view_Confirm-money">
            <input type = "text" placeholder = "Confirmation" title = "Confirmez la somme à retirer."/>
        </span>
        <br/>
        <!--Error message-->
        <label id = "Money-takedown-view_Error"></label>
        <br/>
        <!--Request button-->
        <button id = "Money-takedown-view_Request" title = "Retirez son argent maintenant !">
            Demander un retrait
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <!--Code-->
        <script type = "text/javascript" src = "../js/money-takedown-view.js"></script>
    </div>
</div>