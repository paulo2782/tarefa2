<?php
class Primo {
    public $start;
    public $end;
    public $array = array();

    public function __construct($start, $end){

        $this->start = $start;
        $this->end = $end;
        
        // $array = array();

        $dif = $end - $start;

        for($i = 1 ; $i <= $dif ; $i++){
            $div = 0;
            for($count = 1 ; $count <= $start ; $count++){
                if($start % $count == 0){
                    $div++;
                }
            }

            if($div == 2){
                
                array_push($this->array,$start);
            }
            $start++;
        }
        
        
    }

    public function arrayResult(){
        return $this->array;
    }
    public function getStart(){
        return $this->start;
    }
    public function getEnd(){
        return $this->end;
    }

}
?>