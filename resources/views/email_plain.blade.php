{{ config('app.name', 'Laravel') }}

Nom : {{ $answers->lastname }}
Prénom : {{ $answers->firstname }}
Adresse électronique : {{ $answers->email }}
Nombre d'années de grammaire française que vous avez suivies jusqu'à présent : {{ $answers->years }}

Nombre total de points : {{ $scores->total }}


1 ) Complétez le texte en utilisant ou non des articles ({{ $scores->q1 }} / 22 points) :

Aujourd'hui, j'ai beaucoup {{ $answers->q1_1->value}}
courses à faire. Je dois d'abord aller acheter {{ $answers->q1_2->value}}
viande. Il me faut aussi {{ $answers->q1_3->value}}
pain. Enfin, je dois aller à {{ $answers->q1_4->value}}
banque pour retirer {{ $answers->q1_5->value}}
argent. Mais il fait {{ $answers->q1_6->value}}
temps horrible. Il y a {{ $answers->q1_7->value}}
pluie et {{ $answers->q1_8->value}}
vent. Je prends {{ $answers->q1_9->value}}
parapluie et je descends. A ce moment-là, {{ $answers->q1_10->value}}
voisine m'appelle: elle ne peut pas ouvrir {{ $answers->q1_11->value}}
porte {{ $answers->q1_12->value}}
garage. Elle porte {{ $answers->q1_13->value}}
belles chaussures vernies et {{ $answers->q1_14->value}}
grand chapeau blanc. Elle a {{ $answers->q1_15->value}}
peur de se salir, moi aussi ! Ensemble, nous poussons et enfin, {{ $answers->q1_16->value}}
porte s'ouvre ! Il pleut toujours et {{ $answers->q1_17->value}}
chapeau de {{ $answers->q1_18->value}}
jeune femme tombe dans {{ $answers->q1_19->value}}
flaque {{ $answers->q1_20->value}}
eau. Nous rions, mais nous avons {{ $answers->q1_21->value}}
mains toutes sales et {{ $answers->q1_22->value}}
pieds mouillés.


2 ) Mettez les verbes au mode et au temps qui conviennent ({{ $scores->q2 }} / 12 points) :

Il faut qu'elle (finir) {{ $answers->q2_1->value}}
cette toile avant demain pour que son propriétaire ne la (mettre) {{ $answers->q2_2->value}}
pas à la porte. Elle aimerait que son nom (être) {{ $answers->q2_3->value}}
déjà célèbre et qu'elle (pouvoir) {{ $answers->q2_4->value}}
se consacrer à son art.
Quand je pense que sa mère souhaitait qu'elle (devenir) {{ $answers->q2_5->value}}
notaire. Selon elle, la vie d'artiste ne lui (correspondre) {{ $answers->q2_6->value}}
pas.


3 ) Mettez les verbes soit au passé composé, soit à l'imparfait, soit au plus-que-parfait ({{ $scores->q3 }} / 21 points) :

Il (faire) {{ $answers->q3_1->value}}
très froid cette nuit-là et Jean n' (arriver) {{ $answers->q3_2->value}}
pas à dormir. Alors, il (se lever) {{ $answers->q3_3->value}}
, il (aller) {{ $answers->q3_4->value}}
au salon où la température (être) {{ $answers->q3_5->value}}
plus agréable et il (commencer) {{ $answers->q3_6->value}}
à lire le journal.

Il (lire) {{ $answers->q3_7->value}}
depuis un moment lorsqu'il (entendre) {{ $answers->q3_8->value}}
du bruit à la porte. Il (être) {{ $answers->q3_9->value}}
surpris car à cette heure tardive tout le monde (dormir) {{ $answers->q3_10->value}}
dans l'immeuble. Il (se diriger) {{ $answers->q3_11->value}}
vers la porte, qu'il (ouvrir) {{ $answers->q3_12->value}}
et il (se trouver) {{ $answers->q3_13->value}}
nez à nez avec le fils des voisins qui (rentrer) {{ $answers->q3_14->value}}
d'une soirée.

Alors, ce dernier (s'excuser) {{ $answers->q3_15->value}}
et il (expliquer) {{ $answers->q3_16->value}}
qu'il (oublier) {{ $answers->q3_17->value}}
ses clés avant de sortir et que, comme il (voir) {{ $answers->q3_18->value}}
un trait de lumière sous la porte de Jean, il (se permettre) {{ $answers->q3_19->value}}
de frapper. Jean l'(inviter) {{ $answers->q3_20->value}}
à entrer chez lui.


4 ) Complétez le dialogue en utilisant les pronoms personnels appropriés (le, la, les, lui, leur, y, en...) ({{ $scores->q4 }} / 10 points) :

Le livreur (L): J'ai un petit message pour Madame Lise.

Le concierge (C): Laissez {{ $answers->q4_1->value}}
moi. Je vais {{ $answers->q4_2->value}}
voir tout à l'heure.

L: Mais je dois {{ $answers->q4_3->value}}
{{ $answers->q4_4->value}}
remettre en mains propres.

C: Vous n'avez pas confiance en moi ?

L: Je regrette, j'ai des ordres.

C: Des ordres ! J' {{ $answers->q4_5->value}}
ai moi aussi ! Madame Lise {{ $answers->q4_6->value}}
a demandé de prendre tous les messages pour {{ $answers->q4_7->value}}.

L: Vous {{ $answers->q4_8->value}}
direz que je suis passé, mais dites- {{ $answers->q4_9->value}} au moins où elle travaille.

C: Allez au studio 400. Je crois qu'elle {{ $answers->q4_10->value}}
est à cette heure-ci.


5 ) Complétez le dialogue avec les pronoms relatifs appropriés (que, qui, dont, ce qui, ce que...) ({{ $scores->q5 }} / 13 points) :

Voilà trois jours que je suis arrivé à Amboise. Moi {{ $answers->q5_1->value}}
n'avais jamais voyagé, je trouve que les gens ici sont très sympathiques. Ils veulent tout de suite savoir {{ $answers->q5_2->value}}
vous vivez, {{ $answers->q5_3->value}}
vous faites dans la vie, les choses {{ $answers->q5_4->value}}
vous vous intéressez. C'est du moins le cas de tous ceux {{ $answers->q5_5->value}}
j'ai rencontrés jusqu'à maintenant. Je me plais à regarder les magasins devant {{ $answers->q5_6->value}}
je m'arrête à chaque pas, les marchés {{ $answers->q5_7->value}}
on trouve tout {{ $answers->q5_8->value}}
on a envie. Un de mes plus grands plaisirs, c'est de monter en haut du clocher de l'église {{ $answers->q5_9->value}}
on domine toute la ville. C'est un spectacle {{ $answers->q5_10->value}}
on ne peut pas se fatiguer.


6 ) Complétez le texte suivant en choisissant l'un des termes proposés entre parenthèses ({{ $scores->q6 }} / 10 points) :

Trois {{ $answers->q6_1->value}}
(ans / années) après son diplôme, John Smith est parti {{ $answers->q6_2->value}}
(pour / à / vers) Paris. Là, il a cherché un poste de traducteur. Après avoir {{ $answers->q6_3->value}}
(posé / appliqué / adressé) sa candidature auprès d'une cinquantaine d'entreprises et espéré en vain une réponse {{ $answers->q6_4->value}}
(vite / hâtive / rapide) pour signer un contrat, il a décidé de {{ $answers->q6_5->value}}
(rendre compte / prendre en compte / tenir compte) des réalités du marché et de travailler en free-lance pour commencer.
Il a alors traduit des articles pour plusieurs agences. Parfois il restait plusieurs jours à ne rien faire,
parfois il écrivait dix à douze heures {{ $answers->q6_6->value}}
(par suite / de suite / ensuite). Il éprouvait dans ce cas un grand besoin de sortir au grand air pour {{ $answers->q6_7->value}}
(clarifier / s'éclairer / s'éclaircir) les idées.

(Ainsi / aussi) {{ $answers->q6_8->value}}
ont passé {{ $answers->q6_9->value}}
(les premiers deux / les deux premiers / deux premiers) mois, puis il a réussi {{ $answers->q6_10->value}}
(d'être recruté / à être recruté / à être recru) sur un contrat à durée indéterminée.


7 ) Mettez les verbes entre parenthèses au passé composé ({{ $scores->q7 }} / 12 points) :

Les premières fraises sont arrivées, j'en (acheter)
{{ $answers->q7_1->value}} une livre.

Pour son mariage, elle (se faire)
{{ $answers->q7_2->value}} habiller par un grand couturier.

Elle (se blesser)
{{ $answers->q7_3->value}} en tombant dans l'escalier: elle (se casser)
{{ $answers->q7_4->value}} le bras.

Ils (se parler)
{{ $answers->q7_5->value}} hier une heure au téléphone mais ils (ne pas encore se voir)
{{ $answers->q7_6->value}} .