<?php
$sql ="SELECT * from bindata where uid ='".$crunchid."' ORDER BY time;";
            $cret = $db->query($sql);
            $pointCount=1;
            $emptycount = 0;
            $firstrow = $cret->fetchArray(SQLITE3_ASSOC);
            $emptytime =$firstrow['time'];
            while($crow = $cret->fetchArray(SQLITE3_ASSOC)){
                if ($crow['level'] < $lastrow['level']){
                    $emptycount++;
                    
                }
                $pointCount++;
                $lastrow=$crow;
            }
            $avgfilltime = ($lastrow['time']-$firstrow['time'])/($emptycount);
            $fill = round(100*($lastrow['level']/$lastrow['levelmax']));
            $etf = $avgfilltime*(100-$fill)/100;
?>
