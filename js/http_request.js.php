<script type = "text/javascript" >

    /*
     *	2020/02/28   @@  New York 
     *	Last update : 2020/02/28
     */

    /* 
     * Request sender by AJAX methode
     */
    function HTTPRequest( http_method, rec_path, request_object, json_response_callback, to = null ) {
        var state = false;
        var resumed = false;
        var timer = false;
        var timespan = null;
        var initial_time = null;
        var loader_dsg = null;
        var msgbox = null;
        var msg_con_low = '';
        var msg_con_fail = '';
        var text_abord_btn = '';
        var text_retry_btn = '';
        var loading_callback = null;

        var callbackFunction = ( response ) => {

            if ( state ) {
                //				console.log ( 'CALLBACK FUNCTION \t [ NOT OK ]' );

                state = false;
                timer = false;

                hide_loader();

                if ( json_response_callback ) {
                    setTimeout(() => {
                        json_response_callback( response );
                        return;

                    }, 500);
                }
                //				else
                //					console.log ( 'Response Ok !' );

                this.close();

            }

            //			console.log ( 'CALLBACK FUNCTION \t [ NOT OK ]' );

            return;

        };


        var start_process = () => {

            if ( http_method == 'POST' ) {
                $.post(rec_path, request_object, callbackFunction, "json");

            } else if ( http_method == 'GET' ) {
                // TODO : Here for source code for send http request by GET method.
            }
            return;

        };

        var hide_loader = () => {

            if ( loader_dsg != null )
                loader_dsg.close();

            // ...

            return;

        };

        var show_loader = ( str = null ) => {
            if (loader_dsg) {
                loader_dsg.init();

                //				setTimeout ( () => {
                if (str)
                    loader_dsg.setText(str);

                loader_dsg.show();

                //					return ;
                //				}, 250 );
            }

            return;
        }


        var show_message = ( msg, typecau = 0x1 ) => {

            if (msgbox) {
                // ...

                var opts = [

                    {
                        option_name: text_abord_btn,
                        function_callback: () => {
                            this.close();
                            return;

                        }
                    },
                    {
                        is_main: 1,
                        option_name: text_retry_btn,
                        function_callback: () => {
                            resumeProcess();
                            return;

                        }
                    }
                ];

                msgbox.init();
                msgbox.setText( msg );

                if ( typecau == 0x1 )
                    msgbox.setIcon( 'xy/icons/low_networking.png' );
                else if ( typecau == 0x2 )
                    msgbox.setIcon( 'xy/icons/network_drive_error.png' );

                msgbox.setOptions( opts );
                msgbox.show();

            }

            return;
        };

        var hide_message = () => {
            if ( msgbox )
                msgbox.close();

            return;
        };

        var initTime = () => {
            initial_time = new Date().getTime();

            if ( !timer && time_out ) {
                setTimeout( timeOutprocess, time_out );
                timer = true;

            }

            return;
        };

        var navigatorOnline = () => {
            state = true;

            hide_message();
            show_loader();
            initTime();
            start_process();


            //		    console.log ( 'NAVIGATOR ONLINE \t [ OK ]' );

            return;

        };

        var navigatorOffline = () => {
            if (state) {
                state = false;

                hide_loader();
                show_message( msg_con_fail, 0x2 );

            }

            return;
        }

        var resumeProcess = () => {
            var connected = __checkNetwork();

            if (connected) {
                //	    		console.log ( 'RESUME PROCESS \t [ OK ]' );
                navigatorOnline();
            } else
                show_message( msg_con_fail, 0x2 );

            //	    	console.log ( 'RESUME PROCESS \t [ NOT ]' );

            return;
        };

        var timeOutprocess = () => {
            if ( state && timer ) {
                //				console.log ( 'TIME OUT PROCESS \t [ CHECKING ]' );

                if ( new Date().getTime() - initial_time >= time_out ) {
                    state = false;
                    timer = false;

                    hide_loader();
                    show_message( msg_con_low );

                    //					console.log ( 'TIME OUT PROCESS \t [ OK ]' );

                } else {
                    setTimeout( timeOutprocess, time_out );
                    //					console.log ( 'TIME OUT PROCESS \t [ RESUMED ]' );

                }

                return;

            }

            //			console.log ( 'TIME OUT PROCESS \t [ NOT ]' );

            timer = false;

            return;
        };

        var __checkNetwork = () => {
            return ( window.navigator.onLine );
        };

        //Add network events.
        var __addNetworkEvents = ( _OnlineFunction, _OfflineFunction ) => {
            window.addEventListener( 'online', _OnlineFunction, false );
            window.addEventListener( 'offline', _OfflineFunction, false );
        };

        //Remove network events.
        var __removeNetworkEvents = ( _OnlineFunction, _OfflineFunction ) => {
            window.removeEventListener( 'online', _OnlineFunction, false );
            window.removeEventListener( 'offline', _OfflineFunction, false );
        };

        this.setLoadingEvent = ( callback ) => {
            loading_callback = callback;
            return;
        }


        this.initView = ( id = 'PROCESS_ID', parentid = 'body', msgload = 'Loading ...', msgconlow = 'Low connection', msgconfail = 'Failed connection', textretrybtn = 'Retry', textabordbtn = 'Abord' ) => {

            msg_con_low = msgconlow;
            msg_con_fail = msgconfail;
            text_abord_btn = textabordbtn;
            text_retry_btn = textretrybtn;


            if ( loader_dsg == null )
                loader_dsg = new XYLoaderBox( id + '_LOADER', parentid, msgload, false, true );

            if (msgbox == null)
                msgbox = new XYMessageBox( id + '_MESSAGE', parentid, null, null, null, true );

            //			console.log ( 'INIT VIEW \t [ OK ]' );

            return;

        }

        this.start = () => {

            var connected = __checkNetwork();

            if (!state) {
                __addNetworkEvents( navigatorOnline, navigatorOffline );

                if (connected) {
                    state = true;

                    show_loader();
                    initTime();
                    start_process();

                    //					console.log ( 'START \t [ OK ]' );
                    if ( loading_callback )
                        loading_callback( true );

                    return true;
                } else
                    show_message( msg_con_fail, 0x2 );

                if ( loading_callback )
                    loading_callback( true );

            }

            //			console.log ( 'START \t [ NOT OK ]' );

            return false;
        };

        this.close = () => {
            //			if ( loader_dsg ) loader_dsg.close ();
            //			if ( msgbox )     msgbox.close ();

            timer = false;
            state = false;

            __removeNetworkEvents( navigatorOnline, navigatorOffline );

            if ( loading_callback )
                loading_callback( false );

            //			console.log ( 'CLOSE \t [ OK ]' );
            // ...

            return;
        };

        // Initial source code.
        time_out = to;


    }

    var __auth_exec = ( callb ) => {
        const request = new HTTPRequest( 'POST', '../main/swt.php', { req: 'c' }, function( resp ) {
            callb (resp.connected);
        }, 10000 );

        request.start ();
    }
</script>