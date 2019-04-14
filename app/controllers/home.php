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
            $headers .= "From: <".$_POST['email'].">". "\r\n" . "CC: waghtot@gmail.com";
            
            mail($to,$subject,$txt,$headers);
            echo json_encode('ok');
        }

    }
}
