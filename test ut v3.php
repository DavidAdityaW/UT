<?php
    function dataGedungLoker($no_loker) {
        $lantai = 1; 
        $loker = 1; 
        $isFinish = false; 
        
        while (!$isFinish) { 
            for ($i = 5; $i <= 7; $i++) { 
                if ($no_loker >= $loker && $no_loker <= $loker + $i - 1) { 
                    $isFinish = true;
                    break; 
                }
                $lantai++;
                $loker += $i;
            }
        }
        
        return $lantai;
    }

    // silahkan input parameter nomor lantai 
    echo 'Lt. ' . dataGedungLoker(3);
?>

