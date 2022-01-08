<?php
    $song = $_POST['song-name'];

    $email_from = 'stephenyin@stephenyin.com';

	$email_subject = "You have a new song recommendation!";

	$email_body = "You have received a new song recommendation.\n".
                  "Take a listen to: $song";

    $to = "knightc987@gmail.com";

    $headers = "From: $email_from";

    function IsInjected($str)
    {
        $inject = "^rec ";
        $inject = "/$inject/i";
        
        if(preg_match($inject,$str))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // var_dump($song);
    // var_dump($email_subject);
    // var_dump($email_body);
    // var_dump($headers);

    if(IsInjected($song))
    {
        echo nl2br("Bad song value! Remember to type 'rec ' with a space after rec when submitting a song recommendation!\r\n <a href=\"javascript:history.go(-1)\">GO BACK</a>");
        exit;
    }

    if(mail($to,$email_subject,$email_body,$headers)) {
        echo nl2br("Your song has been sent!\r\n <a href=\"javascript:history.go(-1)\">GO BACK</a>");
    } else {
        echo nl2br("Your song was not sent!\r\n <a href=\"javascript:history.go(-1)\">GO BACK</a>");
    }
?>