<?php

function dataUT($noLoker){
  if ($noLoker >= 1 && $noLoker <= 5){
    $lantai = 1;
  }
  else if ($noLoker >= 6 && $noLoker <= 11){
    $lantai = 2;
  }
  else if ($noLoker >= 12 && $noLoker <= 18){
    $lantai = 3;
  }
  else if ($noLoker >= 19 && $noLoker <= 23){
    $lantai = 4;
  }
  else if ($noLoker >= 24 && $noLoker <= 29){
    $lantai = 5;
  }
  else if ($noLoker >= 30 && $noLoker <= 36){
    $lantai = 6;
  }
  else {
    $lantai = "Tidak Ditemukan";
  }

  return $lantai;
}

// silahkan input parameter nomor lantai cukup 1 misal antara (1-5) pilih 3
echo "Lantai.". dataUT(3);
?>