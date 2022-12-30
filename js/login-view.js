/*
 *@Alaska GeForce gtx
 *Creation date: 22/20/2020
 *Last update: 09/03/2020
*/

//Stop loading.
new ChamIndex ().stopLoading ('div.Login-view');

//Hide cham menu bar.
new ChamIndex ().hideMenu ();

//Remove connecting button.
setTimeout (() => {
    new ChamIndex ().removeObject ('div.Connecting-button-view');
}, 500);

//Cham sign up object.
function ChamLogin () {
    //View activator.
    var viewActivator = (_activate) => {
        $ ('span#Login-view_Phone-number-field input[type = "tel"]').css ('pointer-events', _activate);
        $ ('span#Login-view_Password-field input[type = "password"]').css ('pointer-events', _activate);
        $ ('button#Login-view_Connection, button#Login-view_Sign-up').css ('pointer-events', _activate);
        $ ('label#Login-view_Forgot-password').css ('pointer-events', _activate);
    };

    //Input design on focus.
    var inputFieldFocusEvent = (_input_id, _is_focused) => {
        if (_is_focused) {
            $ (_input_id)
                .css ('border', '2px solid rgb(216, 216, 216)')
                .css ('animation-name', 'InputFocusAction')
                .css ('animation-duration', '800ms')
                .css ('animation-iteration-count', 'infinite')
                .css ('border', 'none');
            $ ('label#Login-view_Error').css ('margin-top', '0').text ('');
        } else {
            $ (_input_id).css ('animation', 'none').css ('border', '2px solid rgb(216, 216, 216)');
        }
    };

    //Get phone number.
    this.getPhoneNumber = () => {
        return $ ('span#Login-view_Phone-number-field input[type = "tel"]').val ();
    };

    //Get password.
    this.getPassword = () => {
        return $ ('span#Login-view_Password-field input[type = "password"]').val ();
    };

    //Enable view.
    this.enable = (_enable) => {
        if (_enable) {
            viewActivator ('all');
        } else {
            viewActivator ('none');
        }
    };

    //Enable loader.
    this.enableLoader = (_enable) => {
        if (_enable) {
            $ ('button#Login-view_Connection img').css ('transform', 'scale(1)');
            $ ('button#Login-view_Connection label').css ('visibility', 'hidden');
            this.enable (false);
        } else {
            $ ('button#Login-view_Connection img').css ('transform', 'scale(0)');
            $ ('button#Login-view_Connection label').css ('visibility', 'visible');
            this.enable (true);
        }
    };

    //Error.
    this.errorAt = (_index = null, _message = null) => {
        //Check index value.
        switch (_index) {
            case 0:
                $ ('span#Login-view_Phone-number-field input[type = "tel"]').css ('border', '2px solid red');
                break;
            default:
                $ ('span#Login-view_Password-field input[type = "password"]').css ('border', '2px solid red');
                break;
        }
        //Asign the current message.
        if (_message != null) {
            $ ('label#Login-view_Error').css ('margin-top', '16px').text (_message);
        }
    };

    //Basic input event.
    this.basicInputEvent = (_input_id) => {
        $ (_input_id).focus (() => {
            inputFieldFocusEvent (_input_id, true);
        }).blur (() => {
            inputFieldFocusEvent (_input_id, false);
        });
    };
}

//Sign up button event.
$ ('button#Login-view_Sign-up').click (() => {
    new ChamIndex ().removeObject ('div.Login-view');
    new ChamIndex ().load ('header.Other', '_registration_');
});

//Forgot password link event.
$ ('label#Login-view_Forgot-password').click (() => {
    new ChamIndex ().removeObject ('div.Login-view');
    new ChamIndex ().load ('header.Other', '_frtpssd465_');
});

//Phone number field event.
new ChamLogin ().basicInputEvent ('span#Login-view_Phone-number-field input[type = "tel"]');

//Password field event.
new ChamLogin ().basicInputEvent ('span#Login-view_Password-field input[type = "password"]');

//Remove script.
$ ('script').remove ();