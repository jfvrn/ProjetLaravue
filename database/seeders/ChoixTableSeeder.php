<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Choix;


class ChoixTableSeeder extends Seeder
{
    public function run()
    {
        $existingPassageIds = DB::table('passages')->pluck('id')->toArray();

        $choix = [
            //choix début
            ['passage_id' => 12, 'texte' => 'Prendre la clé rouillé', 'suivant_id' => 6],
            ['passage_id' => 12, 'texte' => 'Lire le carnet déchiré', 'suivant_id' => 5],
            ['passage_id' => 12, 'texte' => 'Allumer la lampe torche', 'suivant_id' => 13],
            ['passage_id' => 12, 'texte' => 'Inspecter la boîte en métal', 'suivant_id' => 3],

            //choix boite piegée
            ['passage_id' => 3, 'texte' => 'Recommencer', 'suivant_id' => 12],

            //choix Carnet
            ['passage_id' => 5, 'texte' => 'Retourner à la table', 'suivant_id' => 12],

            //choix clé
            ['passage_id' => 6, 'texte' => 'Ouvrir la porte en bois', 'suivant_id' => 18],
            ['passage_id' => 6, 'texte' => 'Ouvrir la porte en métal', 'suivant_id' => 20],
            ['passage_id' => 6, 'texte' => 'Retourner à la table', 'suivant_id' => 12],

            //choix lampe
            ['passage_id' => 13, 'texte' => 'Retourner à la table', 'suivant_id' => 12],

            //choix portebois(1)
            ['passage_id' => 18, 'texte' => 'Explorer le bureau', 'suivant_id' => 4],
            ['passage_id' => 18, 'texte' => 'Examiner la bibliothèque', 'suivant_id' => 2],
            ['passage_id' => 18, 'texte' => 'Essayer d’ouvrir le coffre', 'suivant_id' => 10],

            //choix bureau
            ['passage_id' => 4, 'texte' => 'Retourner dans la pièce', 'suivant_id' => 18],

            //choix biblio
            ['passage_id' => 2, 'texte' => 'Retourner dans la pièce', 'suivant_id' => 18],

            //choix coffre
            ['passage_id' => 10, 'texte' => 'Entrer 1873', 'suivant_id' => 7],
            ['passage_id' => 10, 'texte' => 'Entrer 1913', 'suivant_id' => 8],
            ['passage_id' => 10, 'texte' => 'Entrer 2020', 'suivant_id' => 9],
            ['passage_id' => 10, 'texte' => 'Retour en arrière', 'suivant_id' => 18],

            //choix code 1873
            ['passage_id' => 7, 'texte' => 'Réessayer', 'suivant_id' => 10],

            //choix code 1913
            ['passage_id' => 8, 'texte' => 'Prendre la clé noire', 'suivant_id' => 19],
            ['passage_id' => 8, 'texte' => 'Prendre la clé dorée', 'suivant_id' => 15],

            //choix code 2020
            ['passage_id' => 9, 'texte' => 'Réessayer', 'suivant_id' => 10],

            //choix cleDoree
            ['passage_id' => 15, 'texte' => 'Réessayer', 'suivant_id' => 12],

            //choix cleNoire
            ['passage_id' => 19, 'texte' => 'Rejouer l’histoire', 'suivant_id' => 12],
            ['passage_id' => 19, 'texte' => 'Retourner dans le manoir', 'suivant_id' => 11],

            /////////
            //choix portemetal(2)
            ['passage_id' => 20, 'texte' => 'Inspecter le panneau de contrôle', 'suivant_id' => 14],
            ['passage_id' => 20, 'texte' => 'Ouvrir la trappe', 'suivant_id' => 23],
            ['passage_id' => 20, 'texte' => 'Revenir vers les deux portes', 'suivant_id' => 6],

            //choix panneau
            ['passage_id' => 14, 'texte' => 'Appuyer sur le bouton rouge', 'suivant_id' => 16],
            ['passage_id' => 14, 'texte' => 'Appuyer sur le bouton vert', 'suivant_id' => 22],
            ['passage_id' => 14, 'texte' => 'Appuyer sur le bouton bleu', 'suivant_id' => 17],
            ['passage_id' => 14, 'texte' => 'Revenir à la salle', 'suivant_id' => 20],

            //choix piègeElectricité
            ['passage_id' => 16, 'texte' => 'Recommencer', 'suivant_id' => 12],

            //choix SortieAlternative
            ['passage_id' => 22, 'texte' => 'Rejouer l’histoire', 'suivant_id' => 12],

             //choix PiegeGas
            ['passage_id' => 23, 'texte' => 'Recommencer', 'suivant_id' => 12],

            //choix Curiosité fatale
            ['passage_id' => 11, 'texte' => 'Recommencer', 'suivant_id' => 12],
        ];

        foreach ($choix as $choixData) {
            if (in_array($choixData['passage_id'], $existingPassageIds) &&
                (is_null($choixData['suivant_id']) || in_array($choixData['suivant_id'], $existingPassageIds))) {
                DB::table('choix')->insert($choixData);
            } else {
                echo "Invalid passage_id or suivant_id: " . json_encode($choixData) . "\n";
            }
        }
    }
}
