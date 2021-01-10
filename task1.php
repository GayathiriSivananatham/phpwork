<?php
for($i=0;$i<5;$i++)
    {
        
        for($j=0;$j<5;$j++)
        {
            
            if(($j+$i)%2==0)
            {
                echo "*";
            }
            else
            {
                echo "#";
            }
        }
        echo "<br>";
    }

?>