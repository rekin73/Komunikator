<?php
class RespondObject
{

        function __Construct($Action,$Context){
$this->action=$Action;
        }
        
        public $action;
};

$time=time();
$data=$_REQUEST; //- dana przed wejście w pętlę
while(time()-$time<=1){
        // sprawdzam czy $data dana się zmieniła
        //$data="";
        if($data!=""){
                $obj=new RespondObject("asdfgh","asqw");
                echo $time;
                 switch ($data->action) {
                        case '_MESSAGE':
                                echo json_encode($data);
                                break;
                        
                        default:
                               // echo json_encode();
                                break;
                } 
                 /* echo json_encode($data);
                break; */
        }
        usleep(25000);
}
?>