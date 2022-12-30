/*
 *@Alaska GeForce gtx
 *Creation date: 26/20/2020
 *Last update: 28/02/2020
*/

//Stop loading.
new ChamIndex ().stopLoading ('div.Global-menu-view');

//Show cham menu bar.
new ChamIndex ().showMenu ();

//Remove connecting button.
setTimeout (() => {
    new ChamIndex ().removeObject ('div.Connecting-button-view');
}, 500);

//Load all options views.
new ChamIndex ().load ('section.Money-bag', '_br4x7294_');
new ChamIndex ().load ('section.Activities', '_actopts573_');
new ChamIndex ().load ('section.Notifications', '_ntfopts684_');
new ChamIndex ().load ('section.Settings', '_fgnd496011_');

//Cham menu bar object.
function ChamMenuBar () {
    //Money bag option.
    this.moneyBagOption = () => {
        new ChamIndex ().goToMoneyBagViewSection ();
        //Money bag menu option.
        $ ('div.Global-menu-view_Money-bag-option figcaption label').css ('color', '#00A651');
        $ ('div.Global-menu-view_Money-bag-option img').attr ('src', '../icons/green_money_bag.png');
        //Activities menu option.
        $ ('div.Global-menu-view_Activities-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Activities-option img').attr ('src', '../icons/black_activities.png');
        //Notifications menu option.
        $ ('div.Global-menu-view_Notifications-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Notifications-option img').attr ('src', '../icons/black_notifications.png');
        //Settings menu option.
        $ ('div.Global-menu-view_Settings-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Settings-option img').attr ('src', '../icons/black_settings.png');
    };

    //Activities option.
    this.activitiesOption = () => {
        new ChamIndex ().goToActivitiesViewSection ();
        //Money bag menu option.
        $ ('div.Global-menu-view_Money-bag-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Money-bag-option img').attr ('src', '../icons/black_money_bag.png');
        //Activities menu option.
        $ ('div.Global-menu-view_Activities-option figcaption label').css ('color', '#00A651');
        $ ('div.Global-menu-view_Activities-option img').attr ('src', '../icons/green_activities.png');
        //Notifications menu option.
        $ ('div.Global-menu-view_Notifications-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Notifications-option img').attr ('src', '../icons/black_notifications.png');
        //Settings menu option.
        $ ('div.Global-menu-view_Settings-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Settings-option img').attr ('src', '../icons/black_settings.png');
    };

    //Notifications option.
    this.notificationsOption = () => {
        new ChamIndex ().goToNotificationsViewSection ();
        //Money bag menu option.
        $ ('div.Global-menu-view_Money-bag-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Money-bag-option img').attr ('src', '../icons/black_money_bag.png');
        //Activities menu option.
        $ ('div.Global-menu-view_Activities-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Activities-option img').attr ('src', '../icons/black_activities.png');
        //Notifications menu option.
        $ ('div.Global-menu-view_Notifications-option figcaption label').css ('color', '#00A651');
        $ ('div.Global-menu-view_Notifications-option img').attr ('src', '../icons/green_notifications.png');
        //Settings menu option.
        $ ('div.Global-menu-view_Settings-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Settings-option img').attr ('src', '../icons/black_settings.png');
    };

    //Settings option.
    this.settingsOption = () => {
        new ChamIndex ().goToSettingsViewSection ();
        //Money bag menu option.
        $ ('div.Global-menu-view_Money-bag-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Money-bag-option img').attr ('src', '../icons/black_money_bag.png');
        //Activities menu option.
        $ ('div.Global-menu-view_Activities-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Activities-option img').attr ('src', '../icons/black_activities.png');
        //Notifications menu option.
        $ ('div.Global-menu-view_Notifications-option figcaption label').css ('color', 'gray');
        $ ('div.Global-menu-view_Notifications-option img').attr ('src', '../icons/black_notifications.png');
        //Settings menu option.
        $ ('div.Global-menu-view_Settings-option figcaption label').css ('color', '#00A651');
        $ ('div.Global-menu-view_Settings-option img').attr ('src', '../icons/green_settings.png');
    };
}

//Select money bag option.
new ChamMenuBar ().moneyBagOption ();

//Money bag option event.
$ ('div.Global-menu-view_Money-bag-option').click (() => {
    new ChamMenuBar ().moneyBagOption ();
});

//Activities option event.
$ ('div.Global-menu-view_Activities-option').click (() => {
    new ChamMenuBar ().activitiesOption ();
});

//Transactions option event.
$ ('div.Global-menu-view_Transactions-option').click (() => {
    new ChamIndex ().transaction ();
});

//Notifications option event.
$ ('div.Global-menu-view_Notifications-option').click (() => {
    new ChamMenuBar ().notificationsOption ();
});

//Settings option event.
$ ('div.Global-menu-view_Settings-option').click (() => {
    new ChamMenuBar ().settingsOption ();
});

//Remove script.
$ ('script').remove ();