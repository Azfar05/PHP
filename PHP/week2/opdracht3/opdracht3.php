<?php
echo "Het langste 'officiële' woord in de Nederlandse taal is:<br>"; //leuk weetje

echo strrev("aansprakelijkheidswaardevaststellingsveranderingen"); // het woord staat nu achterstevoren
echo str_replace("dag", "nacht", "Fijne dag!<br>"); // outputs fijne nacht

$age = 24;
print "My age is {$age}<br>"; 
print "My age is " . $age;
?>