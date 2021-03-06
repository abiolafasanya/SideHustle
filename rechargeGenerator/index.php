


<h1>Recharge pin</h1>
<ol>

  
               
<?php
                // recharge pin generator
                
                for($x = 0; $x <200; $x++ ){
                    echo 
                        '<li>'.
                            'Recharge Pin Number:'. '<br>'
                           . $pinRand =  random_int(1000000000000000, 9000000000000000).
                        '</li>'
                    ;                
                }
                ?>

</ol>


