/*
 *@Alaska GeForce gtx
 *Creation date: 09/03/2020
 *Last update: 09/03/2020
*/

//Stop loading.
new ChamIndex ().stopLoading ('div.Personal-infos-view');

//Cham personal infos object.
function ChamPersonalInfos () {
    //Input design on focus.
    var inputFieldFocusEvent = (_input_id, _is_focused) => {
        if (_is_focused) {
            $ (_input_id)
                .css ('border', '2px solid rgb(216, 216, 216)')
                .css ('animation-name', 'InputFocusAction')
                .css ('animation-duration', '800ms')
                .css ('animation-iteration-count', 'infinite')
                .css ('border', 'none');
            $ ('label#Personal-infos-view_Error').css ('margin-top', '0').text ('');
        } else {
            $ (_input_id).css ('animation', 'none').css ('border', '2px solid rgb(216, 216, 216)');
        }
    };

    //View activator.
    var viewActivator = (_activate) => {
        $ ('span#Personal-infos-view_Name-surnames input[type = "text"]').css ('pointer-events', _activate);
        $ ('span#Personal-infos-view_Birth-date input[type = "text"]').css ('pointer-events', _activate);
        $ ('span#Personal-infos-view_City input[type = "text"]').css ('pointer-events', _activate);
        $ ('select#Personal-infos-view_Faculty, select#Personal-infos-view_Sex').css ('pointer-events', _activate);
        $ ('div.Personal-infos-view_Left-arrow, button#Personal-infos-view_Confirm').css ('pointer-events', _activate);
    };

    //Get name and surname(s).
    this.getNameAndSurnames = () => {
        return $ ('span#Personal-infos-view_Name-surnames input[type = "text"]').val ();
    };

    //Get birth date.
    this.getBirthDate = () => {
        return $ ('span#Personal-infos-view_Birth-date input[type = "text"]').val ();
    };

    //Get city.
    this.getCity = () => {
        return $ ('span#Personal-infos-view_City input[type = "text"]').val ();
    };

    //Get faculty.
    this.getFaculty = () => {
        return $ ('select#Personal-infos-view_Faculty').val ();
    };

    //Get sex.
    this.getSex = () => {
        return $ ('select#Personal-infos-view_Sex').val ();
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
            $ ('button#Personal-infos-view_Confirm img').css ('transform', 'scale(1)');
            $ ('button#Personal-infos-view_Confirm label').css ('visibility', 'hidden');
            this.enable (false);
        } else {
            $ ('button#Personal-infos-view_Confirm img').css ('transform', 'scale(0)');
            $ ('button#Personal-infos-view_Confirm label').css ('visibility', 'visible');
            this.enable (true);
        }
    };
    
    //Error.
    this.errorAt = (_index = null, _message = null) => {
        //Check index value.
        switch (_index) {
            case 0:
                $ ('span#Personal-infos-view_Name-surnames input[type = "text"]').css ('border', '2px solid red');
                break;
            case 1:
                $ ('span#Personal-infos-view_Birth-date input[type = "text"]').css ('border', '2px solid red');
                break;
            default:
                $ ('span#Personal-infos-view_City input[type = "text"]').css ('border', '2px solid red');
                break;
        }
        //Assign the current message.
        if (_message != null) {
            $ ('label#Personal-infos-view_Error').css ('margin-top', '16px').text (_message);
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

//Back to sign up button event.
$ ('div.Personal-infos-view_Left-arrow').click (() => {
    new ChamIndex ().removeObject ('div.Personal-infos-view');
    new ChamIndex ().load ('header.Other', '_registration_');
});

//Name and surname(s) field event.
new ChamPersonalInfos ().basicInputEvent ('span#Personal-infos-view_Name-surnames input[type = "text"]');

//Birth date field event.
new ChamPersonalInfos ().basicInputEvent ('span#Personal-infos-view_Birth-date input[type = "text"]');

//City field event.
new ChamPersonalInfos ().basicInputEvent ('span#Personal-infos-view_City input[type = "text"]');

//Remove script.
$ ('script').remove ();