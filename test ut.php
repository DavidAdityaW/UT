<?php

function dataUT($awalnoLoker, $akhirnoLoker){
  if ($awalnoLoker == 1 && $akhirnoLoker == 5){
    $lantai = 1;
  }
  else if ($awalnoLoker == 6 && $akhirnoLoker == 11){
    $lantai = 2;
  }
  else if ($awalnoLoker == 12 && $akhirnoLoker == 18){
    $lantai = 3;
  }
  else if ($awalnoLoker == 19 && $akhirnoLoker == 23){
    $lantai = 4;
  }
  else if ($awalnoLoker == 24 && $akhirnoLoker == 29){
    $lantai = 5;
  }
  else if ($awalnoLoker == 30 && $akhirnoLoker == 36){
    $lantai = 6;
  }
  else {
    $lantai = "Tidak Ditemukan";
  }

  return $lantai;
}

// silahkan input parameter nomor lantai dengan paramter lengkat misal (1-5) 
echo "Lantai.". dataUT(1, 6);
?>