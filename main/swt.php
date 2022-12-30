<?php
/*
*	2020/02/23   @@  New York 
*	Last update : 2020/02/28
*/


    // Initialization function :
    session_start();

    /* Device checking : */
    $verified_device = TRUE;


    if ( $verified_device ) {
        /* Locate the visitor :  */
        $verified_location = TRUE;


        if ( $verified_location ) {
            /* Login verification : */
            $verified_login = TRUE;

            /*----------------------------Whether connected or not-----------------------------------*/
            if ( isset( $_POST['req'] ) ) {
                if ( $_POST['req'] == 'c' ) {
                    echo json_encode( array( 'connected' => $verified_login ) );
                    exit;
                }
                else if ( $_POST['req'] == 'd' ){
                    echo json_encode( array( 'connected' => ( !$verified_login ) ) );
                    exit;
                }
            }
            else if ( isset( $_GET['id'] ) ) {
                if ( $_GET['id'] == '_prc_' ){
                    include( '../js/index-break.js.php' );
                    exit;
                }
            }
        
            if ( $verified_login ) {
                if ( isset( $_POST['req'] ) ){

                }
                else if ( isset( $_GET['id'] ) ) {
                    if ( $_GET['id'] == '_br4x7294_' )
                        include( '../html/money-bag-view.php' );

                    else if ( $_GET['id'] == '_actopts573_' )
                        include( '../html/activities-view.php' );
                    
                    else if ( $_GET['id'] == '_ntfopts684_' )
                        include( '../html/notifications-view.php' );
                    
                    else if ( $_GET['id'] == '_fgnd496011_' )
                        include( '../html/settings-view.php' );
                    
                    else if ( $_GET['id'] == '_46-gjgd_' )
                        include( '../html/money-drop-request-view.php' );

                    else if ( $_GET['id'] == '_584ckjg_' )
                        include( '../html/money-takedown-view.php' );
                    
                    else 
                        echo '<strong>Ooops!</strong> Toi aussi ...</br>';  
                }
                else {
                    include( '../html/menu-view.php' );
                }
            }
            else {
                if ( isset( $_POST['req'] ) ) {
                    
                }
                else if ( isset( $_GET['id'] ) ) {
                    
                    if ( $_GET['id'] == '_signin_' )
                        include( '../html/login-view.php' );

                    else if ( $_GET['id'] == '_registration_' )
                        include( '../html/sign-up-view.php' );

                    else if ( $_GET['id'] == '_welcome_' )
                        include( '../html/starting-view.php' );
                    
                    else if ( $_GET['id'] == '_frtpssd465_' )
                        include( '../html/forgot-password-view.php' );

                    else 
                        echo '<strong>Ooops!</strong> Toi aussi ...</br>';  

                }
                else {
                    /* Cookies verification : */
                    if ( isset( $_COOKIE['cham_coockies'] ) ) {
                        include( '../html/login-view.php' );
//                        echo 'main page';
                    }
                    else { 
                        setcookie( 'cham_coockies', 'M@teo21', time() + 63072000, null, null, false, true ); // 730*24*3600 = 63072000 => two (02) years.
//                        echo 'Home';
                        include( '../html/starting-view.php' );
                    }
                }
            }
        }
    }
    else {
        //Include an error page...
    }

?>
