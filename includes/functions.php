<?php

function payment($apr,$n,$pv,$fv=0.0,$prec=2){
    
    /* Calculates the monthly payment rounded to the nearest penny
    ** $apr = the annual percentage rate of the loan.
    ** $n   = number of monthly payments (360 for a 30year loan)
    ** $pv    = present value or principal of the loan
    ** $fv  = future value of the loan
    ** $prec = the precision you wish rounded to
    */
    /****************************************\
    ** No Warranty is expressed or implied. **
    *****************************************/
    
    if ($apr !=0) {
        $alpha = 1/(1+$apr/12);
        $retval =  round($pv * (1 - $alpha) / $alpha / 
        (1 - pow($alpha,$n)),$prec) ;
    } else {
        $retval = round($pv / $n, $prec);
    }
    return($retval);

}