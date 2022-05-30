<?php
    class Solution {

        /**
         * @param Integer $num
         * @return String
         */
        function intToRoman($num) {
            $symbol=array("I","V","X","L","C","D","M");
            $value=array(1,5,10,50,100,500,1000);
            $i=0;
            $current="";
            $ans=0;
            while($num>0){
                if(strlen($num)==strlen($value[$i])){
                    $ans=intval($num/$value[$i]);
                    if($ans==4 || $ans==9){
                        $current.=$symbol[$i];
                        ($ans==4)?$current.=$symbol[$i+1]:$current.=$symbol[$i+2];
                        $num=$num%$value[$i];
                        $i=0;
                    }
                    else if($ans<5){
                        for($j=1;$j<=$ans;$j++){
                            $current.=$symbol[$i];
                        }
                        $num=$num%$value[$i];
                        $i=0;
                    }
                    else{
                        $i++;
                    }
                }
                else{
                    $i++; 
                }
            }
            return $current;
        }
    }
?>