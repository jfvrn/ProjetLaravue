<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Passage;

class PassagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('passages')->insert([
            [
                'title' => 'Armoire',
                'content' => <<<'EOD'
Tu ouvres l’armoire métallique. Elle grince, mais ne résiste pas.

À l’intérieur, un vieux **masque à gaz** pend au crochet. Il semble en état de marche.

Souhaites-tu le prendre ?
EOD,
            ],
            [
                'title' => 'Bibliothèque',
                'content' => <<<'EOD'
Tu examines les livres éparpillés. L’un d’eux est en meilleur état que les autres. À l’intérieur, un papier glissé :

''Année manoir - ??? = code''
EOD,
            ],
            [
                'title' => 'BoitePiegee',
                'content' => <<<'EOD'
Tu t’approches de la boîte. Elle est fermée par un loquet. Tu l’ouvres lentement...

Un petit nuage de gaz s’en échappe. Tu tousses violemment. Ta vision se trouble...

Tu t’écroules.

''Tu as été piégé. Fin prématurée.''
EOD,
            ],
            [
                'title' => 'Bureau',
                'content' => <<<'EOD'
Tu fouilles les tiroirs du bureau. Dans le deuxième, tu trouves un vieux papier avec l'inscription :

''Le mot de passe est l’âge du manoir moins le chiffre sur le mur.''  
En dessous : ''Le manoir a été construit en 1950.''
EOD,
            ],
            [
                'title' => 'Carnet',
                'content' => <<<'EOD'
Le carnet est vieux et couvert de taches. À l'intérieur, des griffonnages illisibles… sauf une phrase :

''Trois pièces. Trois épreuves. Une sortie. La lumière révèle ce que l’œil ne voit pas.''

Un avertissement ? Une énigme ? Ce n’est pas très clair, mais ça semble important.
EOD,
            ],
            [
                'title' => 'Clé',
                'content' => <<<'EOD'
Tu prends la clé rouillée. Elle semble ancienne, presque prête à se briser entre tes doigts.

En te retournant, tu remarques quelque chose que tu n’avais pas vu tout de suite : deux portes au fond de la pièce.  
L’une est en bois sombre, fissurée mais solide.  
L’autre est en métal, froide et couverte de rouille.

La clé semble pouvoir entrer dans l'une des deux serrures… mais laquelle choisiras-tu ?
EOD,
            ],
            [
                'title' => 'Code1873',
                'content' => <<<'EOD'
Tu entres 1873.  
Un bruit sourd… verrou bloqué. Ce n’est pas le bon code.
EOD,
            ],
            [
                'title' => 'Code1913',
                'content' => <<<'EOD'
Tu entres 1913.

Un déclic se fait entendre. Le coffre s’ouvre lentement.

À l’intérieur, deux clés :  
- une ''clé dorée'' brillante  
- une ''clé noire'' en métal usé
EOD,
            ],
            [
                'title' => 'Code2020',
                'content' => <<<'EOD'
Tu tapes 2020. Rien ne se passe, à part un bip d’erreur strident.

Le mécanisme reste verrouillé.
EOD,
            ],
            [
                'title' => 'Coffre',
                'content' => <<<'EOD'
Tu t’approches du coffre à combinaison. Un petit clavier numérique t’invite à entrer un code à 4 chiffres.

Tu as 2 tentative(s) restante(s).

Quels codes veux-tu essayer ?
EOD,
            ],
            [
                'title' => 'CuriositéFatale',
                'content' => <<<'EOD'
Tu es sorti... mais quelque chose te pousse à revenir. Peut-être as-tu laissé un indice ? Un objet important ?

Tu retournes à l’intérieur du manoir.

La porte claque derrière toi. Tu entends la clé tomber… et se briser.

Tu es à nouveau piégé.

''La curiosité est parfois un poison. Fin alternative.''
EOD,
            ],
            [
                'title' => 'Début',
                'content' => <<<'EOD'
Tu ouvres lentement les yeux. La pièce est plongée dans une pénombre inquiétante. Le plafond est bas, les murs sont recouverts de boiseries sombres, et une odeur de moisissure flotte dans l'air. Tu es allongé sur un vieux canapé poussiéreux, et un mal de crâne lancinant bat à tes tempes.

Tu ne te souviens pas comment tu es arrivé ici. Il n’y a pas de fenêtre apparente, juste une lumière faible filtrant sous une porte fermée à clé. Dans ce salon à l’ancienne, plusieurs objets attirent ton attention sur une table en bois au centre de la pièce :

- une clé rouillée
- un carnet déchiré
- une lampe torche éteinte
- une boîte métallique étrange

Quelque chose ne tourne pas rond. Et une seule certitude te traverse : il faut sortir d’ici… vite.
EOD,
            ],
            [
                'title' => 'Lampe',
                'content' => <<<'EOD'
Tu actionnes le bouton de la lampe torche. Après un léger bourdonnement, la lampe torche s’allume. Tu balaies la pièce du faisceau de lumière et repères un chiffre inscrit à la craie sur un mur : ''37''.

Probablement un indice...
EOD,
            ],
            [
                'title' => 'Panneau',
                'content' => <<<'EOD'
Le panneau de contrôle est ancien, mais encore fonctionnel. Il comporte trois boutons : rouge, vert et bleu. Une note est griffonnée juste au-dessus :

''Un seul active la sortie, les autres activent la sécurité.''
EOD,
            ],
            [
                'title' => 'PiegeCleDoree',
                'content' => <<<'EOD'
Tu choisis la clé dorée. Tu avances vers la porte au fond du couloir et l’insères dans la serrure.

Un instant de silence… puis un sifflement.  
Des pics surgissent du sol, trop vite. Tu n’as pas le temps de réagir.

''Tu es tombé dans un piège. Fin brutale.''
EOD,
            ],
            [
                'title' => 'PiegeElectricite',
                'content' => <<<'EOD'
Tu appuies sur le bouton rouge. Le panneau grésille, puis une décharge électrique t’électrocute sur place.

Tu t’effondres.

''La curiosité peut coûter cher. Fin brutale.''
EOD,
            ],
            [
                'title' => 'PiegeGas',
                'content' => <<<'EOD'
Tu descends lentement par l’échelle. L’air devient rapidement irrespirable, un gaz dense envahit l’espace.

Heureusement, tu as mis le masque à gaz à temps. Tu respires difficilement, mais tu tiens bon.

Tu continues jusqu’au bout du tunnel... et une lumière verte s’allume au loin.
EOD,
            ],
            [
                'title' => 'Porte1',
                'content' => <<<'EOD'
La clé tourne difficilement dans la serrure. Tu entends un déclic. La porte s’ouvre sur un couloir étroit, mal éclairé. Tu avances prudemment.

Au bout du couloir se trouve une nouvelle pièce : un bureau en désordre, une bibliothèque renversée, et un coffre fermé par une combinaison.
EOD,
            ],
            [
                'title' => 'Porte2',
                'content' => <<<'EOD'
Tu avances dans un autre couloir jusqu’à une porte massive, verrouillée par une serrure élégante.

Tu insères la clé noire. Elle glisse parfaitement. La serrure tourne.

La porte s’ouvre lentement sur un jardin abandonné. L'air frais te frappe au visage.

Tu es dehors.

Mais quelque chose te dit que ce manoir n’a pas livré tous ses secrets...

''Félicitations, tu as échappé à la maison.''
EOD,
            ],
            [
                'title' => 'PorteMetallique',
                'content' => <<<'EOD'
La clé rouillée entre dans la serrure métallique avec difficulté. Un grincement strident résonne lorsque tu tournes la poignée.

La porte s’ouvre sur une pièce remplie de vieilles machines, de câbles suspendus et de boutons rouillés.

Une lumière rouge clignote au fond. Tu entends un bourdonnement électrique. Cette pièce semble plus dangereuse…

Tu aperçois :
- un panneau de contrôle  
- une armoire métallique  
- une trappe au sol
EOD,
            ],
            [
                'title' => 'PrendreMasque',
                'content' => <<<'EOD'
Tu prends le masque à gaz et le ranges sur toi. Il pourrait t’être utile si tu dois affronter des vapeurs ou des substances toxiques.
EOD,
            ],
            [
                'title' => 'SortieAlternative',
                'content' => <<<'EOD'
Tu as choisi le bon bouton, ou tu es descendu préparé.

Une lumière verte s’allume. Un mur coulisse dans un bruit métallique, révélant un tunnel souterrain.

Tu t’y engouffres. Après quelques minutes, tu retrouves enfin l’extérieur.

Un autre chemin… plus risqué, mais plus discret.

''Félicitations, tu as trouvé une sortie secrète !''
EOD,
            ],
            [
                'title' => 'Trappe',
                'content' => <<<'EOD'
Tu soulèves la trappe. Une échelle descend dans l’obscurité. Une odeur désagréable remonte du fond.

Tu as le masque à gaz en ta possession.
EOD,
            ],
        ]);
    }
}