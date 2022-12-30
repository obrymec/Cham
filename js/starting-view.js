/*
*@Alaska GeForce gtx
*Creation date: 22/20/2020
*Last update: 28/02/2020
*/

//Starting break object.
function ChamStartingBreakView () {
    //View action.
    var viewsAction = (_view_index = false) => {
        switch (_view_index) {
            case 0:
                $ ('div.Easy-money-view').css ('z-index', '0').css ('animation', '1500ms GlobalLeftChangeAction 0ms forwards');
                $ ('div.Save-money-view').css ('z-index', '1').css ('animation', '400ms GlobalRightChangeAction 0ms forwards');
                break;
            case 1:
                $ ('div.Easy-money-view').css ('z-index', '0').css ('animation', '1500ms GlobalLeftChangeAction 0ms forwards');
                $ ('div.Money-security-view').css ('z-index', '1').css ('animation', '400ms GlobalRightChangeAction 0ms forwards');
                break;
            case 2:
                $ ('div.Save-money-view').css ('z-index', '0').css ('animation', '1500ms GlobalRightChangeRAction 0ms forwards');
                $ ('div.Easy-money-view').css ('z-index', '1').css ('animation', '400ms GlobalLeftChangeRAction 0ms forwards');
                break;
            case 3:
                $ ('div.Save-money-view').css ('z-index', '0').css ('animation', '1500ms GlobalLeftChangeAction 0ms forwards');
                $ ('div.Money-security-view').css ('z-index', '1').css ('animation', '400ms GlobalRightChangeAction 0ms forwards');
                break;
            case 4:
                $ ('div.Money-security-view').css ('z-index', '0').css ('animation', '1500ms GlobalRightChangeRAction 0ms forwards');
                $ ('div.Easy-money-view').css ('z-index', '1').css ('animation', '400ms GlobalLeftChangeRAction 0ms forwards');
                break;
            case 5:
                $ ('div.Money-security-view').css ('z-index', '0').css ('animation', '1500ms GlobalRightChangeRAction 0ms forwards');
                $ ('div.Save-money-view').css ('z-index', '1').css ('animation', '400ms GlobalLeftChangeRAction 0ms forwards');
                break;
        }
        $ ('div.Starting-break_Cross-effect').css ('animation', '500ms GlobalCrossEffectAction 0ms backwards');
        //Remove animation from starting break cross effect.
        setTimeout (() => {
            $ ('div.Starting-break_Cross-effect').css ('animation', 'none');
        }, 500);
    };
    
    //Basic events.
    var basicEvents = () => {
        //Easy money view.
        $ ('div.Easy-money-view_Circle2').click (() => {
            viewsAction (0);
        }); $ ('div.Easy-money-view_Circle3').click (() => {
            viewsAction (1);
        }); $ ('div.Easy-money-view').on ('swipeleft', () => {
            viewsAction (0);
        });
        //Save money view.
        $ ('div.Save-money-view_Circle1').click (() => {
            viewsAction (2);
        }); $ ('div.Save-money-view_Circle3').click (() => {
            viewsAction (3);
        }); $ ('div.Save-money-view').on ('swipeleft', () => {
            viewsAction (3);
        }).on ('swiperight', () => {
            viewsAction (2);
        });
        //Money security view.
        $ ('div.Money-security-view_Circle1').click (() => {
            viewsAction (4);
        }); $ ('div.Money-security-view_Circle2').click (() => {
            viewsAction (5);
        }); $ ('div.Money-security-view').on ('swiperight', () => {
            viewsAction (5);
        });
    };
    
    //Basic initialization.
    basicEvents ();
}

//Creating starting break view object.
new ChamStartingBreakView ();

//Show index menu bar.
new ChamIndex ().showMenu ();

//Stop loading.
new ChamIndex ().stopLoading ('div.Starting-view');

//Remove script.
$ ('script').remove ();