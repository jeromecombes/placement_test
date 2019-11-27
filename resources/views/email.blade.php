@extends('layouts.email')

@section('content')
<div class="container content">
    <p class='intro'>
        Please complete the following exam without the use of a dictionary or other aid.
    </p>

        <table class='info'>
            <tr>
                <td>
                   Nom :
                </td>
                <td class='answer-ok'>
                    {{ $answers->lastname }}
                </td>
            </tr>
            <tr>
                <td>
                   Prénom :
                </td>
                <td class='answer-ok'>
                    {{ $answers->firstname }}
                </td>
            </tr>
            <tr>
                <td>
                   Adresse électronique :
                </td>
                <td class='answer-ok'>
                    {{ $answers->email }}
                </td>
            </tr>
            <tr>
                <td>
                   Nombre d'années de grammaire française que vous avez suivies jusqu'à présent :
                </td>
                <td class='answer-ok'>
                    {{ $answers->years }}
                </td>
            </tr>
        </table>

        <h1>Nombre total de points : <span class='score'>{{ $scores->total }}</span></h1>

        <h1>1 ) Complétez le texte en utilisant ou non des articles (<span class='score'>{{ $scores->q1 }}</span> / 22 points) :</h1>

        <p class='p1'>
            Aujourd'hui, j'ai beaucoup <span id='q1_1' class='{{ $answers->q1_1->css }}'>{{ $answers->q1_1->value}}</span>
            courses à faire. Je dois d'abord aller acheter <span id='q1_2' class='{{ $answers->q1_2->css }}'>{{ $answers->q1_2->value}}</span>
            viande. Il me faut aussi <span id='q1_3' class='{{ $answers->q1_3->css }}'>{{ $answers->q1_3->value}}</span>
            pain. Enfin, je dois aller à <span id='q1_4' class='{{ $answers->q1_4->css }}'>{{ $answers->q1_4->value}}</span>
            banque pour retirer <span id='q1_5' class='{{ $answers->q1_5->css }}'>{{ $answers->q1_5->value}}</span>
            argent. Mais il fait <span id='q1_6' class='{{ $answers->q1_6->css }}'>{{ $answers->q1_6->value}}</span>
            temps horrible. Il y a <span id='q1_7' class='{{ $answers->q1_7->css }}'>{{ $answers->q1_7->value}}</span>
            pluie et <span id='q1_8' class='{{ $answers->q1_8->css }}'>{{ $answers->q1_8->value}}</span>
            vent. Je prends <span id='q1_9' class='{{ $answers->q1_9->css }}'>{{ $answers->q1_9->value}}</span>
            parapluie et je descends. A ce moment-là, <span id='q1_10' class='{{ $answers->q1_10->css }}'>{{ $answers->q1_10->value}}</span>
            voisine m'appelle: elle ne peut pas ouvrir <span id='q1_11' class='{{ $answers->q1_11->css }}'>{{ $answers->q1_11->value}}</span>
            porte <span id='q1_12' class='{{ $answers->q1_12->css }}'>{{ $answers->q1_12->value}}</span>
            garage. Elle porte <span id='q1_13' class='{{ $answers->q1_13->css }}'>{{ $answers->q1_13->value}}</span>
            belles chaussures vernies et <span id='q1_14' class='{{ $answers->q1_14->css }}'>{{ $answers->q1_14->value}}</span>
            grand chapeau blanc. Elle a <span id='q1_15' class='{{ $answers->q1_15->css }}'>{{ $answers->q1_15->value}}</span>
            peur de se salir, moi aussi ! Ensemble, nous poussons et enfin, <span id='q1_16' class='{{ $answers->q1_16->css }}'>{{ $answers->q1_16->value}}</span>
            porte s'ouvre ! Il pleut toujours et <span id='q1_17' class='{{ $answers->q1_17->css }}'>{{ $answers->q1_17->value}}</span>
            chapeau de <span id='q1_18' class='{{ $answers->q1_18->css }}'>{{ $answers->q1_18->value}}</span>
            jeune femme tombe dans <span id='q1_19' class='{{ $answers->q1_19->css }}'>{{ $answers->q1_19->value}}</span>
            flaque <span id='q1_20' class='{{ $answers->q1_20->css }}'>{{ $answers->q1_20->value}}</span>
            eau. Nous rions, mais nous avons <span id='q1_21' class='{{ $answers->q1_21->css }}'>{{ $answers->q1_21->value}}</span>
            mains toutes sales et <span id='q1_22' class='{{ $answers->q1_22->css }}'>{{ $answers->q1_22->value}}</span>
            pieds mouillés.
        </p>

        <h1>2 ) Mettez les verbes au mode et au temps qui conviennent (<span class='score'>{{ $scores->q2 }}</span> / 12 points) :</h1>

        <p class='p2'>
            Il faut qu'elle (finir) <span id='q2_1' class='{{ $answers->q2_1->css }}'>{{ $answers->q2_1->value}}</span>
            cette toile avant demain pour que son propriétaire ne la (mettre) <span id='q2_2' class='{{ $answers->q2_2->css }}'>{{ $answers->q2_2->value}}</span>
            pas à la porte. Elle aimerait que son nom (être) <span id='q2_3' class='{{ $answers->q2_3->css }}'>{{ $answers->q2_3->value}}</span>
            déjà célèbre et qu'elle (pouvoir) <span id='q2_4' class='{{ $answers->q2_4->css }}'>{{ $answers->q2_4->value}}</span>
            se consacrer à son art.
            Quand je pense que sa mère souhaitait qu'elle (devenir) <span id='q2_5' class='{{ $answers->q2_5->css }}'>{{ $answers->q2_5->value}}</span>
            notaire. Selon elle, la vie d'artiste ne lui (correspondre) <span id='q2_6' class='{{ $answers->q2_6->css }}'>{{ $answers->q2_6->value}}</span>
            pas.
        </p>

        <h1>3 ) Mettez les verbes soit au passé composé, soit à l'imparfait, soit au plus-que-parfait (<span class='score'>{{ $scores->q3 }}</span> / 21 points) :</h1>

        <p class='p3'>
            Il (faire) <span id='q3_1' class='{{ $answers->q3_1->css }}'>{{ $answers->q3_1->value}}</span>
            très froid cette nuit-là et Jean n' (arriver) <span id='q3_2' class='{{ $answers->q3_2->css }}'>{{ $answers->q3_2->value}}</span>
            pas à dormir. Alors, il (se lever) <span id='q3_3' class='{{ $answers->q3_3->css }}'>{{ $answers->q3_3->value}}</span>
            , il (aller) <span id='q3_4' class='{{ $answers->q3_4->css }}'>{{ $answers->q3_4->value}}</span>
            au salon où la température (être) <span id='q3_5' class='{{ $answers->q3_5->css }}'>{{ $answers->q3_5->value}}</span>
            plus agréable et il (commencer) <span id='q3_6' class='{{ $answers->q3_6->css }}'>{{ $answers->q3_6->value}}</span>
            à lire le journal.
        </p>

        <p class='p3'>
            Il (lire) <span id='q3_7' class='{{ $answers->q3_7->css }}'>{{ $answers->q3_7->value}}</span>
            depuis un moment lorsqu'il (entendre) <span id='q3_8' class='{{ $answers->q3_8->css }}'>{{ $answers->q3_8->value}}</span>
            du bruit à la porte. Il (être) <span id='q3_9' class='{{ $answers->q3_9->css }}'>{{ $answers->q3_9->value}}</span>
            surpris car à cette heure tardive tout le monde (dormir) <span id='q3_10' class='{{ $answers->q3_10->css }}'>{{ $answers->q3_10->value}}</span>
            dans l'immeuble. Il (se diriger) <span id='q3_11' class='{{ $answers->q3_11->css }}'>{{ $answers->q3_11->value}}</span>
            vers la porte, qu'il (ouvrir) <span id='q3_12' class='{{ $answers->q3_12->css }}'>{{ $answers->q3_12->value}}</span>
            et il (se trouver) <span id='q3_13' class='{{ $answers->q3_13->css }}'>{{ $answers->q3_13->value}}</span>
            nez à nez avec le fils des voisins qui (rentrer) <span id='q3_14' class='{{ $answers->q3_14->css }}'>{{ $answers->q3_14->value}}</span>
            d'une soirée.
        </p>

        <p class='p3'>
            Alors, ce dernier (s'excuser) <span id='q3_15' class='{{ $answers->q3_15->css }}'>{{ $answers->q3_15->value}}</span>
            et il (expliquer) <span id='q3_16' class='{{ $answers->q3_16->css }}'>{{ $answers->q3_16->value}}</span>
            qu'il (oublier) <span id='q3_17' class='{{ $answers->q3_17->css }}'>{{ $answers->q3_17->value}}</span>
            ses clés avant de sortir et que, comme il (voir) <span id='q3_18' class='{{ $answers->q3_18->css }}'>{{ $answers->q3_18->value}}</span>
            un trait de lumière sous la porte de Jean, il (se permettre) <span id='q3_19' class='{{ $answers->q3_19->css }}'>{{ $answers->q3_19->value}}</span>
            de frapper. Jean l'(inviter) <span id='q3_20' class='{{ $answers->q3_20->css }}'>{{ $answers->q3_20->value}}</span>
            à entrer chez lui.
        </p>

        <h1>4 ) Complétez le dialogue en utilisant les pronoms personnels appropriés (le, la, les, lui, leur, y, en...) (<span class='score'>{{ $scores->q4 }}</span> / 10 points) :</h1>

        <p class='p4'>
            Le livreur (L): J'ai un petit message pour Madame Lise.
        </p>

        <p class='p4'>
            Le concierge (C): Laissez <span id='q4_1' class='{{ $answers->q4_1->css }}'>{{ $answers->q4_1->value}}</span>
            moi. Je vais <span id='q4_2' class='{{ $answers->q4_2->css }}'>{{ $answers->q4_2->value}}</span>
            voir tout à l'heure.
        </p>

        <p class='p4'>
            L: Mais je dois <span id='q4_3' class='{{ $answers->q4_3->css }}'>{{ $answers->q4_3->value}}</span>
            <span id='q4_4' class='{{ $answers->q4_4->css }}'>{{ $answers->q4_4->value}}</span>
            remettre en mains propres.
        </p>

        <p class='p4'>
            C: Vous n'avez pas confiance en moi ?
        </p>

        <p class='p4'>
            L: Je regrette, j'ai des ordres.
        </p>

        <p class='p4'>
            C: Des ordres ! J' <span id='q4_5' class='{{ $answers->q4_5->css }}'>{{ $answers->q4_5->value}}</span>
            ai moi aussi ! Madame Lise <span id='q4_6' class='{{ $answers->q4_6->css }}'>{{ $answers->q4_6->value}}</span>
            a demandé de prendre tous les messages pour <span id='q4_7' class='{{ $answers->q4_7->css }}'>{{ $answers->q4_7->value}}</span>.
        </p>

        <p class='p4'>
            L: Vous <span id='q4_8' class='{{ $answers->q4_8->css }}'>{{ $answers->q4_8->value}}</span>
            direz que je suis passé, mais dites- <span id='q4_9' class='{{ $answers->q4_9->css }}'>{{ $answers->q4_9->value}}</span> au moins où elle travaille.
        </p>

        <p class='p4'>
            C: Allez au studio 400. Je crois qu'elle <span id='q4_10' class='{{ $answers->q4_10->css }}'>{{ $answers->q4_10->value}}</span>
            est à cette heure-ci.
        </p>

        <h1>5 ) Complétez le dialogue avec les pronoms relatifs appropriés (que, qui, dont, ce qui, ce que...) (<span class='score'>{{ $scores->q5 }}</span> / 13 points) :</h1>

        <p class='p5'>
            Voilà trois jours que je suis arrivé à Amboise. Moi <span id='q5_1' class='{{ $answers->q5_1->css }}'>{{ $answers->q5_1->value}}</span>
            n'avais jamais voyagé, je trouve que les gens ici sont très sympathiques. Ils veulent tout de suite savoir <span id='q5_2' class='{{ $answers->q5_2->css }}'>{{ $answers->q5_2->value}}</span>
            vous vivez, <span id='q5_3' class='{{ $answers->q5_3->css }}'>{{ $answers->q5_3->value}}</span>
            vous faites dans la vie, les choses <span id='q5_4' class='{{ $answers->q5_4->css }}'>{{ $answers->q5_4->value}}</span>
            vous vous intéressez. C'est du moins le cas de tous ceux <span id='q5_5' class='{{ $answers->q5_5->css }}'>{{ $answers->q5_5->value}}</span>
            j'ai rencontrés jusqu'à maintenant. Je me plais à regarder les magasins devant <span id='q5_6' class='{{ $answers->q5_6->css }}'>{{ $answers->q5_6->value}}</span>
            je m'arrête à chaque pas, les marchés <span id='q5_7' class='{{ $answers->q5_7->css }}'>{{ $answers->q5_7->value}}</span>
            on trouve tout <span id='q5_8' class='{{ $answers->q5_8->css }}'>{{ $answers->q5_8->value}}</span>
            on a envie. Un de mes plus grands plaisirs, c'est de monter en haut du clocher de l'église <span id='q5_9' class='{{ $answers->q5_9->css }}'>{{ $answers->q5_9->value}}</span>
            on domine toute la ville. C'est un spectacle <span id='q5_10' class='{{ $answers->q5_10->css }}'>{{ $answers->q5_10->value}}</span>
            on ne peut pas se fatiguer.
        </p>

        <h1>6 ) Complétez le texte suivant en choisissant l'un des termes proposés entre parenthèses (<span class='score'>{{ $scores->q6 }}</span> / 10 points) :</h1>

        <p class='p6'>
            Trois <span id='q6_1' class='{{ $answers->q6_1->css }}'>{{ $answers->q6_1->value}}</span>
            (ans / années) après son diplôme, John Smith est parti <span id='q6_2' class='{{ $answers->q6_2->css }}'>{{ $answers->q6_2->value}}</span>
            (pour / à / vers) Paris. Là, il a cherché un poste de traducteur. Après avoir <span id='q6_3' class='{{ $answers->q6_3->css }}'>{{ $answers->q6_3->value}}</span>
            (posé / appliqué / adressé) sa candidature auprès d'une cinquantaine d'entreprises et espéré en vain une réponse <span id='q6_4' class='{{ $answers->q6_4->css }}'>{{ $answers->q6_4->value}}</span>
            (vite / hâtive / rapide) pour signer un contrat, il a décidé de <span id='q6_5' class='{{ $answers->q6_5->css }}'>{{ $answers->q6_5->value}}</span>
            (rendre compte / prendre en compte / tenir compte) des réalités du marché et de travailler en free-lance pour commencer.
            Il a alors traduit des articles pour plusieurs agences. Parfois il restait plusieurs jours à ne rien faire,
            parfois il écrivait dix à douze heures <span id='q6_6' class='{{ $answers->q6_6->css }}'>{{ $answers->q6_6->value}}</span>
            (par suite / de suite / ensuite). Il éprouvait dans ce cas un grand besoin de sortir au grand air pour <span id='q6_7' class='{{ $answers->q6_7->css }}'>{{ $answers->q6_7->value}}</span>
            (clarifier / s'éclairer / s'éclaircir) les idées.
        </p>

        <p class='p6'>
            (Ainsi / aussi) <span id='q6_8' class='{{ $answers->q6_8->css }}'>{{ $answers->q6_8->value}}</span>
            ont passé <span id='q6_9' class='{{ $answers->q6_9->css }}'>{{ $answers->q6_9->value}}</span>
            (les premiers deux / les deux premiers / deux premiers) mois, puis il a réussi <span id='q6_10' class='{{ $answers->q6_10->css }}'>{{ $answers->q6_10->value}}</span>
            (d'être recruté / à être recruté / à être recru) sur un contrat à durée indéterminée.
        </p>

        <h1>7 ) Mettez les verbes entre parenthèses au passé composé (<span class='score'>{{ $scores->q7 }}</span> / 12 points) :</h1>

        <p class='p7'>
            Les premières fraises sont arrivées, j'en (acheter)
            <span id='q7_1' class='{{ $answers->q7_1->css }}'>{{ $answers->q7_1->value}}</span> une livre.
        </p>

        <p class='p7'>
            Pour son mariage, elle (se faire)
            <span id='q7_2' class='{{ $answers->q7_2->css }}'>{{ $answers->q7_2->value}}</span> habiller par un grand couturier.
        </p>

        <p class='p7'>
            Elle (se blesser)
            <span id='q7_3' class='{{ $answers->q7_3->css }}'>{{ $answers->q7_3->value}}</span> en tombant dans l'escalier: elle (se casser)
            <span id='q7_4' class='{{ $answers->q7_4->css }}'>{{ $answers->q7_4->value}}</span> le bras.
        </p>

        <p class='p7'>
            Ils (se parler)
            <span id='q7_5' class='{{ $answers->q7_5->css }}'>{{ $answers->q7_5->value}}</span> hier une heure au téléphone mais ils (ne pas encore se voir)
            <span id='q7_6' class='{{ $answers->q7_6->css }}'>{{ $answers->q7_6->value}}</span> .
        </p>

</div>
@endsection