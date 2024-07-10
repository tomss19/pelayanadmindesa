<?php
    $HP = 'pelayanadmindesa';
    $HEADER = 'Location:http://localhost/'.$HP.'/';

    session_start();
    session_destroy();
    unset($_SESSION['username']);
    header($HEADER);

    
