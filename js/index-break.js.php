<?php include ('http_request.js.php'); ?>
<script>
/*
 *@Alaska GeForce gtx
 *Creation date: 20/20/2020
 *Last update: 28/02/2020
*/
//-----------------------------------------------------------------[Attributes]----------------------------------------------------------------------
    var __view_index = 0;
    let __is_network_error = false;

//-----------------------------------------------------------------[Main class]----------------------------------------------------------------------
    //Cham index break.
    function ChamIndex () {
        //Swipe right action.
        var swipeRight = (_from_id, _to_id) => {
        $ (_from_id).css ('animation', '1500ms GlobalLeftChangeAction 0ms forwards').css ('z-index', '0');
        $ (_to_id).css ('animation', '400ms GlobalRightChangeAction 0ms forwards').css ('z-index', '1');
        };

        //Swipe right action.
        var swipeLeft = (_from_id, _to_id) => {
            $ (_from_id).css ('animation', '1500ms GlobalRightChangeRAction 0ms forwards').css ('z-index', '0');
            $ (_to_id).css ('animation', '400ms GlobalLeftChangeRAction 0ms forwards').css ('z-index', '1');
        };

        //Dynamic autoload.
        var dynamicAutoLoading = (_parent_id) => {
            if (($ (_parent_id).attr ('name')) == "Is-Loading") {
                if (($ (_parent_id).attr ('id')) != "No-Id") {
                    this.load (_parent_id, ($ (_parent_id).attr ('id')));
                } else {
                    this.load (_parent_id);
                }
            }
        };

        //Network error.
        this.networkError = (_error_message) => {
            this.systemError (_error_message);
            this.removeObject ('div.Global-Loader');
            __is_network_error = true;
        };

        //Load view.
        this.load = (_parent_id, _id_view = null, _starting_delay = 500) => {
            //Create a new loader and lauch loading data.
            $ (_parent_id).prepend ('<div class = "Global-Loader" align = "center"><img src = "../icons/green_sheet_loader.gif" width = "100px" height = "100px"/></div>');
            $ (_parent_id).attr ('name', 'Is-Loading').attr ('id', 'No-Id');
                //Loading delay.
                setTimeout (() => {
                    //Check network.
                    if (navigator.onLine) {
                        if (_id_view != null) {
                            $ (_parent_id).attr ('id', _id_view);
                            $ (_parent_id).load ("swt.php?id=" + _id_view);
                        } else {
                            $ (_parent_id).load ("swt.php");
                        }
                        //Start loading page delay.
                        setTimeout (() => {
                            if (!__is_network_error && ($ (_parent_id).attr ('name')) == "Is-Loading") {
                                this.systemError ("Votre connection est top faible. Vérifier votre réseau ou reéssayer plus tard.");
                            }
                        }, 120000);
                } else {
                    //Show network error.
                    if (!__is_network_error) {
                        this.networkError ("Echec de la connection ! Veuillez vérifier la source de votre réseau, puis reéssayer.");
                    }
                }
            }, _starting_delay);
        };

        //Remove html object.
        this.removeObject = (_object_id) => {
            $ (_object_id).remove ();
        };

        //Stop loading.
        this.stopLoading = (_view_id = null) => {
            if (_view_id != null) {
                if (!__is_network_error) {
                    if (($ (_view_id).parent ().attr ('name')) == 'Is-Loading') {
                        $ (_view_id).parent ().attr ('name', 'No-Loading');
                    }
                } else {
                    this.removeObject (_view_id);
                }
            }
        };

        //Check view state.
        this.checkViewState = () => {
            dynamicAutoLoading ('header.Other');
            dynamicAutoLoading ('section.Money-bag');
            dynamicAutoLoading ('section.Activities');
            dynamicAutoLoading ('section.Notifications');
            dynamicAutoLoading ('section.Settings');
        };
        
        //Show menu.
        this.showMenu = () => {
            $ ('footer.Menu').css ('animation', '400ms GlobalTopMenuAction 0ms forwards');
        };
        
        //Hide menu.
        this.hideMenu = () => {
            if (($ ('footer.Menu').attr ('name')) == "Button-mode") {
                $ ('footer.Menu').css ('animation', '400ms GlobalTopMenuRAction 0ms forwards');
            }
        };

        //System error.
        this.systemError = (_message) => {
            $ ('section.Cross-effect').css ('animation', '400ms GlobalCrossEffectAction 0ms forwards').css ('z-index', '4');
            $ ('section.Android-error')
                .css ('animation', '400ms GlobalOtherViewAction 0ms forwards')
                .css ('visibility', 'visible')
                .css ('z-index', '4');
            $ ('div.Error-system-view_Platform span label').text (_message);
        };

        //Clear error.
        this.clearError = () => {
            $ ('section.Cross-effect').css ('animation', '400ms GlobalCrossEffectRAction 0ms forwards');
            $ ('section.Android-error').css ('animation', '400ms GlobalOtherViewRAction 0ms forwards');
            setTimeout(() => {
                $ ('div.Error-system-view_Platform span label').text ('');
                $ ('section.Android-error').css ('visibility', 'hidden').css ('opacity', '0').css ('z-index', '0');
                $ ('section.Cross-effect').css ('opacity', '0').css ('z-index', '0');
            }, 400);
        };

        //Show transaction.
        this.transaction = () => {
            if (($ ('div.Global-menu-view_Transactions-option img').attr ('name')) == "Transaction") {
                $ ('section.Cross-effect').css ('animation', '200ms GlobalOtherEffectAction 0ms forwards').css ('z-index', '1');
                $ ('section.Transaction').css ('animation', '300ms GlobalOtherViewAction 0ms forwards').css ('z-index', '2');
                $ ('div.Global-menu-view_Transactions-option img').attr ('name', 'No-Transaction');
                setTimeout (() => {
                    $ ('section.Cross-effect').css ('animation', 'none').css ('z-index', '0');
                }, 400);
            }
        };

        //End transaction.
        this.endTransaction = () => {
            $ ('section.Transaction').css ('animation', '400ms GlobalOtherViewRAction 0ms forwards');
            $ ('div.Global-menu-view_Transactions-option img').attr ('name', 'Transaction');
            setTimeout(() => {
                $ ('section.Transaction').css ('z-index', '0');
            }, 400);
        };

        //Go to other view section.
        this.goToOtherViewSection = () => {
            if (__view_index == 1) {
                this.setView (1, 0);
            } else if (__view_index == 2) {
                this.setView (2, 0);
            } else if (__view_index == 3) {
                this.setView (3, 0);
            } else if (__view_index == 4) {
                this.setView (4, 0);
            }
        };

        //Go to money bag view section.
        this.goToMoneyBagViewSection = () => {
            //Put all views to money bag view.
            if (__view_index == 0) {
                this.setView (0, 1);
            } else if (__view_index == 2) {
                this.setView (2, 1);
            } else if (__view_index == 3) {
                this.setView (3, 1);
            } else if (__view_index == 4) {
                this.setView (4, 1);
            }
        };

        //Go to activities view section.
        this.goToActivitiesViewSection = () => {
            //Put all views to activities view.
            if (__view_index == 0) {
                this.setView (0, 2);
            } else if (__view_index == 1) {
                this.setView (1, 2);
            } else if (__view_index == 3) {
                this.setView (3, 2);
            } else if (__view_index == 4) {
                this.setView (4, 2);
            }
        };

        //Go to notifications view section.
        this.goToNotificationsViewSection = () => {
            //Put all views to notifications view.
            if (__view_index == 0) {
                this.setView (0, 3);
            } else if (__view_index == 1) {
                this.setView (1, 3);
            } else if (__view_index == 2) {
                this.setView (2, 3);
            } else if (__view_index == 4) {
                this.setView (4, 3);
            }
        };

        //Go to settings view section.
        this.goToSettingsViewSection = () => {
            //Put all views to settings view.
            if (__view_index == 0) {
                this.setView (0, 4);
            } else if (__view_index == 1) {
                this.setView (1, 4);
            } else if (__view_index == 2) {
                this.setView (2, 4);
            } else if (__view_index == 3) {
                this.setView (3, 4);
            }
        };

        //Set view.
        this.setView = (_from, _to) => {
            //View to index 0: Other.
            if (_from == 0 && _to == 1) {
                if (__view_index != _to) {
                    swipeRight ('header.Other', 'section.Money-bag');
                }
            } else if (_from == 0 && _to == 2) {
                if (__view_index != _to) {
                    swipeRight ('header.Other', 'section.Activities');
                }
            } else if (_from == 0 && _to == 3) {
                if (__view_index != _to) {
                    swipeRight ('header.Other', 'section.Notifications');
                }
            } else if (_from == 0 && _to == 4) {
                if (__view_index != _to) {
                    swipeRight ('header.Other', 'section.Settings');
                }
            } else if (_from == 1 && _to == 0) {
                if (__view_index != _to) {
                    swipeLeft ('section.Money-bag', 'header.Other');
                }
            } else if (_from == 2 && _to == 0) {
                if (__view_index != _to) {
                    swipeLeft ('section.Activities', 'header.Other');
                }
            } else if (_from == 3 && _to == 0) {
                if (__view_index != _to) {
                    swipeLeft ('section.Notifications', 'header.Other');
                }
            } else if (_from == 4 && _to == 0) {
                if (__view_index != _to) {
                    swipeLeft ('section.Settings', 'header.Other');
                }
            }
            //View to index 1: Money-bag.
            else if (_from == 1 && _to == 2) {
                if (__view_index != _to) {
                    swipeRight ('section.Money-bag', 'section.Activities');
                }
            } else if (_from == 1 && _to == 3) {
                if (__view_index != _to) {
                    swipeRight ('section.Money-bag', 'section.Notifications');
                }
            } else if (_from == 1 && _to == 4) {
                if (__view_index != _to) {
                    swipeRight ('section.Money-bag', 'section.Settings');
                }
            } else if (_from == 2 && _to == 1) {
                if (__view_index != _to) {
                    swipeLeft ('section.Activities', 'section.Money-bag');
                }
            } else if (_from == 3 && _to == 1) {
                if (__view_index != _to) {
                    swipeLeft ('section.Notifications', 'section.Money-bag');
                }
            } else if (_from == 4 && _to == 1) {
                if (__view_index != _to) {
                    swipeLeft ('section.Settings', 'section.Money-bag');
                }
            }
            //View to index 2: Activities.
            else if (_from == 2 && _to == 3) {
                if (__view_index != _to) {
                    swipeRight ('section.Activities', 'section.Notifications');
                }
            } else if (_from == 2 && _to == 4) {
                if (__view_index != _to) {
                    swipeRight ('section.Activities', 'section.Settings');
                }
            } else if (_from == 3 && _to == 2) {
                if (__view_index != _to) {
                    swipeLeft ('section.Notifications', 'section.Activities');
                }
            } else if (_from == 4 && _to == 2) {
                if (__view_index != _to) {
                    swipeLeft ('section.Settings', 'section.Activities');
                }
            }
            //View to index 3: Notifications.
            else if (_from == 3 && _to == 4) {
                if (__view_index != _to) {
                    swipeRight ('section.Notifications', 'section.Settings');
                }
            } else if (_from == 4 && _to == 3) {
                if (__view_index != _to) {
                    swipeLeft ('section.Settings', 'section.Notifications');
                }
            }
            //Throw cross effect foreach change.
            $ ('section.Cross-effect').css ('animation', '400ms GlobalCrossEffectAction 0ms backwards');
            __view_index = _to;
            setTimeout (() => {
                $ ('section.Cross-effect').css ('animation', 'none');
            }, 400);
        };
    }

//-----------------------------------------------------------------[Basic features]-----------------------------------------------------------------------------------------
    //console.log (__auth_exec);

    //Check login.
    // __auth_exec (_is_connected => {
    //     console.log (_is_connected)
    //     if (_is_connected) {
    //         //Load the first view.
    //         new ChamIndex ().goToMoneyBagViewSection ();
    //         new ChamIndex ().load ('footer.Menu');
    //     } else {
    //         //Load the first view.
    //         new ChamIndex ().load ('header.Other');
    //     }
    // });
    
    new ChamIndex ().goToMoneyBagViewSection ();
    new ChamIndex ().load ('footer.Menu');
    console.log ("lll")

    //Offline index event.
    window.addEventListener ('offline', () => {
        //Show network error.
        if (!__is_network_error) {
            new ChamIndex ().networkError ("Echec de la connection ! Veuillez vérifier la source de votre réseau, puis reéssayer.");
        }
    });

    //Online index event.
    window.addEventListener ('online', () => {
        new ChamIndex ().clearError ();
        new ChamIndex ().checkViewState ();
        __is_network_error = false;
    });

    //Transaction transparent background event.
    $ ('section.Transaction').click (() => {
        new ChamIndex ().endTransaction ();
    });

    //Error system view retry button event.
    $ ('button#Error-system-view_Retry').click (() => {
        new ChamIndex ().clearError ();
        //Check network.
        if (navigator.onLine) {
            new ChamIndex ().checkViewState ();
            __is_network_error = false;
        } else {
            setTimeout (() => {
                //Show network error.
                new ChamIndex ().networkError ("Echec de la connection ! Veuillez vérifier la source de votre réseau, puis reéssayer.");
            }, 500);
        }
    });

//-----------------------------------------------------------------[Connecting button functionality]-----------------------------------------------------------------------
    //Connecting button index event.
    $ ('div.Connecting-button-view').click (() => {
        $ ('div.Connecting-button-view').css ('pointer-events', 'none');
        $ ('footer.Menu').attr ('name', 'Button-mode');
        new ChamIndex ().removeObject ('div.Starting-view');
        new ChamIndex ().load ('header.Other');
    });

//-----------------------------------------------------------------[Transaction functionality]-----------------------------------------------------------------------
    //Money drop button event.
    $ ('button#Transaction-view_Drop').click (() => {
        new ChamIndex ().removeObject ('div.Money-drop-request-view');
        new ChamIndex ().removeObject ('div.Money-takedown-view');
        new ChamIndex ().goToOtherViewSection ();
        $ ('header.Other').css ('z-index', '3');
        new ChamIndex ().load ('header.Other', '_46-gjgd_');
    });

    //Money takedown button event.
    $ ('button#Transaction-view_Takedown').click (() => {
        new ChamIndex ().removeObject ('div.Money-takedown-view');
        new ChamIndex ().removeObject ('div.Money-drop-request-view');
        new ChamIndex ().goToOtherViewSection ();
        $ ('header.Other').css ('z-index', '3');
        new ChamIndex ().load ('header.Other', '_584ckjg_');
    });

    //Remove script.
    $ ('script').remove ();
</script>
