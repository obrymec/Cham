/*
 *@Alaska GeForce gtx
 *Creation date: 26/20/2020
 *Last update: 28/02/2020
*/

//Stop loading.
new ChamIndex ().stopLoading ('div.Forgot-password-view');

//Back button event.
$ ('div.Forgot-password_Left-arrow img').click (() => {
    new ChamIndex ().removeObject ('div.Forgot-password-view');
    new ChamIndex ().load ('header.Other');
});

//Remove script.
$ ('script').remove ();