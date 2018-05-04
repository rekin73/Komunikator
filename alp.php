<?php
$time=time();
$data=$_REQUEST; //- dana przed wejście w pętlę
while(time()-$time<=5){
        // sprawdzam czy $data dana się zmieniła
        //$data="";
        if($data!=""){
                 echo json_encode($data);
                break;
        }
        usleep(25000);
}
?>