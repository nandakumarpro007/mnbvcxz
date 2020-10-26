<?php
	require_once('../InstagramAutoPilot.php');

    $iap = new InstagramAutoPilot;

    $accounts = array("girlslaying","learnedfeeds","pubity","memes_you.need","redditwanderes");
    $tags = array("wholesomememes","cutememes","memes","lmao","memesdaily");
    $comment = "Check out my profile for all the best memes and feel good feeds!";

    $iap->init("feelgoodfeeds","nandakumarpro@007",true,true,false,$accounts,$tags,$comment);
?>
