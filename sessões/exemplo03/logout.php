<?php
    session_start();
    /*session_unset - destroi uma determinada sessao*/
    /*session_destroi() - destroi tadas as sessoes*/
    session_destroy();
    header('location: index.php');
?>