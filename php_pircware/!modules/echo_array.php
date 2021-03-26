<?php
    function echo_array($array) {
        foreach($array as $arr_str) {
            echo $arr_str . "<br>";
        }
    }

    function echo_email_card($array_emails) {
        $div_style = 'margin-top: 30px; width: 340px; height: 60px; box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.2);';
        $email_tag_style = 'font-family: sans-serif; display: flex; justify-content: center; align-items: center; font-size: 24px; padding-top: 15px;';
        if(count($array_emails) >= 3) {
            foreach($array_emails as $emails) {
                echo 
                "<div style='$div_style'>
                    <a style='$email_tag_style'>$emails</a>
                </div>";
            }
        }
    }
?>