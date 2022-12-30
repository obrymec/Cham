/*
 *@Alaska GeForce gtx
 *Creation date: 28/20/2020
 *Last update: 28/02/2020
*/

//Stop loading.
new ChamIndex ().stopLoading ('div.Money-drop-request-view');

//Back button event.
$ ('div.Money-drop-request-view_Left-arrow img').click (() => {
    new ChamIndex ().goToMoneyBagViewSection ();
    new ChamMenuBar ().moneyBagOption ();
});

//Remove script.
$ ('script').remove ();