<?php
function isPrimeNumber($iNum)
  {
    $bRet  = True;
    for ($i = 2; $i < $iNum; $i++)
    {
      if ( ($iNum % $i) == 0 )
      {
        $bRet  = False;
        break;
      }
    }
    return $bRet;
  }

  $iStart = 2;
  $iFinish = 10;

  $iSumm = 0;
  $iCount = 0;
  for ($i = $iStart; $i <= $iFinish; $i++)
  {
    if (isPrimeNumber($i))
    {
      //echo $i.'<br>';
      $iSumm += $i;
      $iCount++;
    }
  }

  echo 'Summ: '. $iSumm.'<br>';