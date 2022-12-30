<!--@Alaska GeForce gtx-->
<!--Creation date: 13/02/2020-->
<!--Last update: 28/02/2020-->
<!DOCTYPE html>
    <html lang = "fr">
        <!--Global head-->
        <head>
            <meta charset = "utf-8" name = "viewport" content = "width=device-width, initial-scale=1.0"/>
            <meta http-equiv = "X-UA-Compatible" content = "ie=edge"/>
            <title>Base</title>
            <!--CSS importation-->
            <link rel = "stylesheet" href = "../css/index-break.css" type = "text/css"/>
            <link rel = "stylesheet" href = "../css/menu-view.css" type = "text/css"/>
        </head>
        <!--Global body-->
        <body>
            <!--Other-->
            <header class = "Other" id = "No-Id" name = "No-Loading"></header>
            <!--Money bag-->
            <section class = "Money-bag" id = "No-Id" name = "No-Loading"></section>
            <!--Activities-->
            <section class = "Activities" id = "No-Id" name = "No-Loading"></section>
            <!--Notifications-->
            <section class = "Notifications" id = "No-Id" name = "No-Loading"></section>
            <!--Settings-->
            <section class = "Settings" id = "No-Id" name = "No-Loading"></section>
            <!--Cross effect-->
            <section class = "Cross-effect"></section>
            <!--Menu-->
            <footer class = "Menu" name = "Menu-mode">
                <!--Connecting button view-->
                <div class = "Connecting-button-view">
                    <!--Connecting platform-->
                    <div class = "Connecting-button-view_Platform" title = "Connectez-vous maintenant sur Cham."><label>Se connecter</label></div>
                </div>
            </footer>
            <!--Transaction-->
            <section class = "Transaction">
                <!--Transaction view-->
                <div class = "Transaction-view" align = "center">
                    <!--Transaction view platform-->
                    <div class = "Transaction-view_Global">
                        <!--Transaction platform-->
                        <div class = "Transaction-view_Platform">
                            <!--Transaction title text-->
                            <br/><label><strong>Effectuer une opération</strong></label><br/><br/>
                            <!--Money drop button-->
                            <button id = "Transaction-view_Drop" title = "Voulez-vous déposer de l'argent ?">Dépôt d'argent</button><br/><br/>
                            <!--Money takedown button-->
                            <button id = "Transaction-view_Takedown" title = "Souhaitez-vous retirer de l'argent ?">Retrait d'argent</button><br/><br/>
                        </div>
                    </div>
                </div>
            </section>
            <!--Error system-->
            <section class = "Android-error">
                <!--Error system view-->
                <div class = "Error-system-view" align = "center">
                    <!--Error system view platform-->
                    <div class = "Error-system-view_Global">
                        <!--Error system platform-->
                        <div class = "Error-system-view_Platform">
                            <!--Error system message text-->
                            <br/><span><label></label></span><br/><br/>
                            <!--Retry button-->
                            <button id = "Error-system-view_Retry" title = "Souhaitez-vous reéssayer à nouveau !"><span>Reéssayer !</span></button><br/><br/>
                        </div>
                    </div>
                </div>
            </section>
            <!--System components-->
            <section class = "System-components"></section>
            <!--Codes-->
            <script type = "text/javascript" src = "../js/jquery.js"></script>
            <script type = "text/javascript" src = "../js/jquery_mobile.js"></script>
            <script type = "text/javascript">$ ("section.System-components").load ("swt.php?id=_prc_");</script>
        </body>
    </html>
