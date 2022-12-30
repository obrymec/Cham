<!--@Alaska GeForce gtx-->
<!--Creation date: 26/02/2020-->
<!--Last update: 09/03/2020-->

<!--Personal infos view-->
<div class = "Personal-infos-view">
    <!--Css importation-->
    <link rel = "stylesheet" href = "../css/personal-infos-view.css" type = "text/css"/>
    <br/>
    <!--Left arrow image-->
    <div class = "Personal-infos-view_Left-arrow" title = "Retour."><img src = "../icons/black_left_arrow.png"/></div>
    <!--Personal infos platform-->
    <div class = "Personal-infos-view_Platform" align = "center">
        <br/>
        <!--Personnal informations title text-->
        <label id = "Personal-infos-view_Title"><strong>Informations personnelles</strong></label>
        <!--Details text-->
        <span id = "Personal-infos-view_Help">
            <label>Fournissez les informations suivantes pour commencer à utliser Cham.</label>
        </span>
        <br/>
        <!--Name and surname field-->
        <span id = "Personal-infos-view_Name-surnames">
            <input type = "text" placeholder = "Noms et Prénoms" title = "Entrez ici vos noms et prénoms."/>
        </span>
        <br/><br/>
        <!--Birth date field-->
        <span id = "Personal-infos-view_Birth-date">
            <input type = "text" placeholder = "Date de naissance" title = "Entrez ici votre date de naissance."/>
        </span>
        <br/><br/>
        <!--City field-->
        <span id = "Personal-infos-view_City">
            <input type = "text" placeholder = "Ville" title = "Saisir ici votre ville."/>
        </span>
        <br/><br/>
        <!--Faculties combo box-->
        <div class = "Personal-infos-view_Faculties">
            <!--Faculty-->
            <select title = "Quel profession avez-vous ?" id = "Personal-infos-view_Faculty">
                <option value = "none" selected = "selected">Aucun</option>
                <option value = "trader">Commerçant</option>
                <option value = "student">Etudiant</option>
                <option value = "civil-servent">Fonctionnaire</option>
                <option value = "Art">Artisant</option>
                <option value = "freelance">Indépendant</option>
            </select>
            <!--Down arrow img-->
            <img src = "../icons/gray_down_arrow.png" title = "Quel profession avez-vous ?"/>
        </div>
        <br/><br/>
        <!--Sexes combo box-->
        <div class = "Personal-infos-view_Sexes">
            <!--Sex-->
            <select title = "Vous êtes de sexe, Homme ou Femme ou rien des deux ?" id = "Personal-infos-view_Sex">
                <option value = "none" selected = "selected">Aucun</option>
                <option value = "male">Homme</option>
                <option value = "female">Femme</option>
            </select>
            <!--Down arrow img-->
            <img src = "../icons/gray_down_arrow.png" title = "Vous êtes de sexe masculin ou féminin ?"/>
        </div>
        <br/>
        <!--Error message-->
        <label id = "Personal-infos-view_Error"></label>
        <br/>
        <!--Confirm button-->
        <button id = "Personal-infos-view_Confirm" title = "Je confirme ces informations.">
            <label>Continuer</label>
            <img src = "../icons/dual_loader.gif" width = "65px" height = "65px" title = "Chargement en cours..."/>
        </button>
        <br/><br/>
    </div>
    <!--Code-->
    <script type = "text/javascript" src = "../js/personal-infos-view.js"></script>
</div>