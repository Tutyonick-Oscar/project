<?php
function secure ($data){
   return trim(strip_tags(stripslashes($data)));
}
if(isset($_POST['submit'])){
    $name =secure($_POST['nom']);
    $mail = secure($_POST['mail']);
    $message = secure($_POST['message']);
    if(!empty($name && $mail && $message)){
        // $db = new mysqli ('localhost','root','','yudildb');
        // $request = "INSERT INTO `visiteurs` (nom,mail,`message`) VALUES ('$name','$mail','$message')";
        // $con = mysqli_query($db,$request);
        // if($con) {
        //     header('location:../index.html');
        // }
        $message = wordwrap($message,70,'\r\n');
        $headers = ['From'=>$mail,'Reply-To'=>$mail];
        mail('tuliamtendji@gmail.com',
         'je suis '.$name.';à mon visite sur votre site internet',
         $message,$headers);
    }
    else{
        echo 'remplissez tout les champs';
    }
}
?>