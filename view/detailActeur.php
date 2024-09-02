<?php
$casting = $requeteCasting->fetchAll();
foreach($casting as $cast) {
 echo $cast["acteur"]." dans le rôle de ".$cast["role"];
};

