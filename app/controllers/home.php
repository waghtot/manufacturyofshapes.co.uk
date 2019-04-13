<?php


class Home {

    public function __construct($inmethod){
        if(!empty($inmethod)){
            $this->$inmethod();
        }
        else{
            return $this->index();
        }
    }

    public function index(){

        $data = array();
        View::template(VIEW.'home.php', $data);
    }

    public function enquiry(){

        if(isset($_POST)){

            $to = "info@manufacturyofshapes.co.uk";
            $subject = "Enquiry";
            $messge = 'This is test message';
            $txt = $_POST['message'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // $headers .= "From: <".$_POST['email'].">". "\r\n" . "CC: waghtot@gmail.com";

            // error_log('email header: '.print_r($headers, 1));
            
            // mail($to,$subject,$txt,$headers);
            // error_log('Send email: '.print_r(mail($to,$subject,$txt,$headers), 1));
            // imap_mail($to, $subject, $messge, $headers);
            mail($to, $subject, $messge, $headers);
            error_log('Send email: '.print_r(mail($to, $subject, $messge, $headers), 1));
            echo json_encode('ok');
        }

    }
}
