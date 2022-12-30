/*
 *@Alaska GeForce gtx
 *Creation date: 27/20/2020
 *Last update: 09/03/2020
*/

//Global attributes.
let __is_agree = false;

//Stop loading.
new ChamIndex ().stopLoading ('div.Sign-up-view');

//Cham sign up object.
function ChamSignUp () {
    //View activator.
    var viewActivator = (_activate) => {
        $ ('span#Sign-up-view_Phone-number-field input[type = "tel"]').css ('pointer-events', _activate);
        $ ('span#Sign-up-view_Password-field input[type = "password"]').css ('pointer-events', _activate);
        $ ('button#Sign-up-view_Account').css ('pointer-events', _activate);
        $ ('button#Sign-up-view_Sign-in, div.Sign-up-view_Left-arrow img').css ('pointer-events', _activate);
        $ ('span#Sign-up-view_Cham-agreement input[type = "checkbox"]').css ('pointer-events', _activate);
        $ ('span#Sign-up-view_Cham-agreement label label').css ('pointer-events', _activate);
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
            $ ('label#Sign-up-view_Error').css ('margin-top', '0').text ('');
        } else {
            $ (_input_id).css ('animation', 'none').css ('border', '2px solid rgb(216, 216, 216)');
        }
    };

    //Get phone number.
    this.getPhoneNumber = () => {
        return $ ('span#Sign-up-view_Phone-number-field input[type = "tel"]').val ();
    };

    //Get password.
    this.getPassword = () => {
        return $ ('span#Sign-up-view_Password-field input[type = "password"]').val ();
    };

    //Cham agreement.
    this.isAgree = () => {
        return __is_agree;
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
            $ ('button#Sign-up-view_Account img').css ('transform', 'scale(1)');
            $ ('button#Sign-up-view_Account label').css ('visibility', 'hidden');
            this.enable (false);
        } else {
            $ ('button#Sign-up-view_Account img').css ('transform', 'scale(0)');
            $ ('button#Sign-up-view_Account label').css ('visibility', 'visible');
            this.enable (true);
        }
    };

    //Error.
    this.errorAt = (_index = null, _message = null) => {
        //Check index value.
        switch (_index) {
            case 0:
                $ ('span#Sign-up-view_Phone-number-field input[type = "tel"]').css ('border', '2px solid red');
                break;
            default:
                $ ('span#Sign-up-view_Password-field input[type = "password"]').css ('border', '2px solid red');
                break;
        }
        //Assign the current message.
        if (_message != null) {
            $ ('label#Sign-up-view_Error').css ('margin-top', '16px').text (_message);
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

//Back and sign in buttons event.
$ ('div.Sign-up-view_Left-arrow img, button#Sign-up-view_Sign-in').click (() => {
    new ChamIndex ().removeObject ('div.Sign-up-view');
    new ChamIndex ().load ('header.Other');
});

//Phone number field event.
new ChamSignUp ().basicInputEvent ('span#Sign-up-view_Phone-number-field input[type = "tel"]');

//Password field event.
new ChamSignUp ().basicInputEvent ('span#Sign-up-view_Password-field input[type = "password"]');

//Checkbox event.
$ ('span#Sign-up-view_Cham-agreement input[type = "checkbox"]').click (() => {
    if (__is_agree) {
        __is_agree = false;
    } else {
        __is_agree = true;
    }
});

//Remove script.
$ ('script').remove ();