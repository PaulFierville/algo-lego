<?php

$etudiants_notes=["Mathieu" => ["Infographie"       => [15,10,20],
                             "Algo"                 => [18,12],
                             "Projet"               => [14,12,11],
                             "Bases de données"     => [14,20,20],
                             "Communication"        => [13,11,10]
                               ],
                    
                     "Jeff" => ["Infographie"       => [13,10],
                             "Algo"                 => [10],
                             "Projet"               => [11,10,15],
                             "Bases de données"     => [9,8,16],
                             "Communication"        => [10,11,15]
                               ]
                 ];

foreach ($etudiants_notes as $prenom => $matieres){
    foreach ($matieres as $matiere => $notes){
        $i=1;
        foreach($notes as $indice => $note){
        echo "Pour $prenom :  note  $i ( $matiere ) :  $note <br>";
        $i++;
        }
    }
}

?>