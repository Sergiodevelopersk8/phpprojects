<?php
var_dump("1111111");
die();
include("Mailer/src/PHPMailer.php");

$mail= new PHPMailer();

try{
$mail->isSMTP();
$mail->SMTPDebug=0;
$mail->Host = this->_host;
$mail->Port=this->_port;
$mail->SMTPAuth=this->SMTPauth;
$mail->SMTPAsecure=this->SMTPsecure;
$mail->SMPToptions=array(
    'ssl'=> array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>true
    )
);
$mail->Username = $this->_Username;
$mail->Password=$this->Password;
$mail->setFrom($this->_Username,$this->_nameEmail);

if(is_array($emailTo)){
    foreach($email as key=> $value){
        $mail->addAddress($value);
    }
}
else{

}


}
catch (Exception $e){

}



?>