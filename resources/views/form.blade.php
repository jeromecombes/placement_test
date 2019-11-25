<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen de placement</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

	<script type='text/JavaScript' src="{{ asset('js/app.js') }}"></script>
	<script type='text/JavaScript' src="{{ asset('js/script.js') }}"></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Examen de Placement
                </div>

                <div>

                    <p>
                        Please complete the following exam without the use of a dictionary or other aid. 
                    </p>

                    {{ Form::open(array('route' => 'store')) }}
                        <table class='intro'>
                            <tr>
                                <td>
                                    {{ Form::label('lastname', 'Nom :') }}
                                </td>
                                <td>
                                    {{ Form::text('lastname', null, array('autocomplete' => 'off')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::label('firtname', 'Prénom :') }}
                                </td>
                                <td>
                                    {{ Form::text('firstname', null, array('autocomplete' => 'off')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::label('email', 'Adresse électronique :') }}
                                </td>
                                <td>
                                    {{ Form::text('email', null, array('autocomplete' => 'off')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ Form::label('years', "Nombre d'années de grammaire française que vous avez suivies jusqu'à présent :") }}
                                </td>
                                <td>
                                    {{ Form::text('years', null, array('autocomplete' => 'off')) }}
                                </td>
                            </tr>

                        </table>

                        <h3>1) Complétez le texte en utilisant ou non des articles (22 points):</h3>

                        <p class='p1'>
                            Aujourd'hui, j'ai beaucoup {{ Form::text('q1_1', null, array('autocomplete' => 'off')) }}
                            courses à faire. Je dois d'abord aller acheter {{ Form::text('q1_2', null, array('autocomplete' => 'off')) }}
                            viande. Il me faut aussi {{ Form::text('q1_3', null, array('autocomplete' => 'off')) }}
                            pain. Enfin, je dois aller à {{ Form::text('q1_4', null, array('autocomplete' => 'off')) }}
                            banque pour retirer {{ Form::text('q1_5', null, array('autocomplete' => 'off')) }}
                            argent. Mais il fait {{ Form::text('q1_6', null, array('autocomplete' => 'off')) }}
                            temps horrible. Il y a {{ Form::text('q1_7', null, array('autocomplete' => 'off')) }}
                            pluie et {{ Form::text('q1_8', null, array('autocomplete' => 'off')) }}
                            vent. Je prends {{ Form::text('q1_9', null, array('autocomplete' => 'off')) }}
                            parapluie et je descends. A ce moment-là, {{ Form::text('q1_10', null, array('autocomplete' => 'off')) }}
                            voisine m'appelle: elle ne peut pas ouvrir {{ Form::text('q1_11', null, array('autocomplete' => 'off')) }}
                            porte {{ Form::text('q1_12', null, array('autocomplete' => 'off')) }}
                            garage. Elle porte {{ Form::text('q1_13', null, array('autocomplete' => 'off')) }}
                            belles chaussures vernies et {{ Form::text('q1_14', null, array('autocomplete' => 'off')) }}
                            grand chapeau blanc. Elle a {{ Form::text('q1_15', null, array('autocomplete' => 'off')) }}
                            peur de se salir, moi aussi! Ensemble, nous poussons et enfin, {{ Form::text('q1_16', null, array('autocomplete' => 'off')) }}
                            porte s'ouvre! Il pleut toujours et {{ Form::text('q1_17', null, array('autocomplete' => 'off')) }}
                            chapeau de {{ Form::text('q1_18', null, array('autocomplete' => 'off')) }}
                            jeune femme tombe dans {{ Form::text('q1_19', null, array('autocomplete' => 'off')) }}
                            flaque {{ Form::text('q1_20', null, array('autocomplete' => 'off')) }}
                            eau. Nous rions, mais nous avons {{ Form::text('q1_21', null, array('autocomplete' => 'off')) }}
                            mains toutes sales et {{ Form::text('q1_22', null, array('autocomplete' => 'off')) }}
                            pieds mouillés.
                        </p>

                        <h3>2) Mettez les verbes au mode et au temps qui conviennent (12 points):</h3>

                        <p class='p2'>
                            Il faut qu'elle (finir) {{ Form::text('q2_1', null, array('autocomplete' => 'off')) }}
                            cette toile avant demain pour que son propriétaire ne la (mettre) {{ Form::text('q2_2', null, array('autocomplete' => 'off')) }}
                            pas à la porte. Elle aimerait que son nom (être) {{ Form::text('q2_3', null, array('autocomplete' => 'off')) }}
                            déjà célèbre et qu'elle (pouvoir) {{ Form::text('q2_4', null, array('autocomplete' => 'off')) }}
                            se consacrer à son art. 
                            Quand je pense que sa mère souhaitait qu'elle (devenir) {{ Form::text('q2_5', null, array('autocomplete' => 'off')) }}
                            notaire. Selon elle, la vie d'artiste ne lui (correspondre) {{ Form::text('q2_6', null, array('autocomplete' => 'off')) }}
                            pas.
                        </p>

                        <h3>3) Mettez les verbes soit au passé composé, soit à l'imparfait, soit au plus-que-parfait (21 points):</h3>

                        <p class='p3'>
                            Il (faire) {{ Form::text('q3_1', null, array('autocomplete' => 'off')) }}
                            très froid cette nuit-là et Jean n' (arriver) {{ Form::text('q3_2', null, array('autocomplete' => 'off')) }}
                            pas à dormir. Alors, il (se lever) {{ Form::text('q3_3', null, array('autocomplete' => 'off')) }}
                            , il (aller) {{ Form::text('q3_4', null, array('autocomplete' => 'off')) }}
                            au salon o&ugrave; la température (être) {{ Form::text('q3_5', null, array('autocomplete' => 'off')) }}
                            plus agréable et il (commencer) {{ Form::text('q3_6', null, array('autocomplete' => 'off')) }}
                            à lire le journal. 
                        </p>

                        <p class='p3'>
                            Il (lire) {{ Form::text('q3_7', null, array('autocomplete' => 'off')) }}
                            depuis un moment lorsqu'il (entendre) {{ Form::text('q3_8', null, array('autocomplete' => 'off')) }}
                            du bruit à la porte. Il (être) {{ Form::text('q3_9', null, array('autocomplete' => 'off')) }}
                            surpris car à cette heure tardive tout le monde (dormir) {{ Form::text('q3_10', null, array('autocomplete' => 'off')) }}
                            dans l'immeuble. Il (se diriger) {{ Form::text('q3_11', null, array('autocomplete' => 'off')) }}
                            vers la porte, qu'il (ouvrir) {{ Form::text('q3_12', null, array('autocomplete' => 'off')) }}
                            et il (se trouver) {{ Form::text('q3_13', null, array('autocomplete' => 'off')) }}
                            nez à nez avec le fils des voisins qui (rentrer) {{ Form::text('q3_14', null, array('autocomplete' => 'off')) }}
                            d'une soirée. 
                        </p>

                        <p class='p3'>
                            Alors, ce dernier (s'excuser) {{ Form::text('q3_15', null, array('autocomplete' => 'off')) }}
                            et il (expliquer) {{ Form::text('q3_16', null, array('autocomplete' => 'off')) }}
                            qu'il (oublier) {{ Form::text('q3_17', null, array('autocomplete' => 'off')) }}
                            ses clés avant de sortir et que, comme il (voir) {{ Form::text('q3_18', null, array('autocomplete' => 'off')) }}
                            un trait de lumière sous la porte de Jean, il (se permettre) {{ Form::text('q3_19', null, array('autocomplete' => 'off')) }}
                            de frapper. Jean l'(inviter) {{ Form::text('q3_20', null, array('autocomplete' => 'off')) }}
                            à entrer chez lui. 
                        </p>

                        <h3>4) Complétez le dialogue en utilisant les pronoms personnels appropriés (le, la, les, lui, leur, y, en...) (10 points):</h3>

                        <p class='p4'>
                            Le livreur (L): J'ai un petit message pour Madame Lise.
                        </p>

                        <p class='p4'>
                            Le concierge (C): Laissez {{ Form::text('q4_1', null, array('autocomplete' => 'off')) }}
                            moi. Je vais {{ Form::text('q4_2', null, array('autocomplete' => 'off')) }}
                            voir tout à l'heure.
                        </p>

                        <p class='p4'>
                            L: Mais je dois {{ Form::text('q4_3', null, array('autocomplete' => 'off')) }} 
                            {{ Form::text('q4_4', null, array('autocomplete' => 'off')) }} 
                            remettre en mains propres.
                        </p>

                        <p class='p4'>
                            C: Vous n'avez pas confiance en moi?
                        </p>

                        <p class='p4'>
                            L: Je regrette, j'ai des ordres.
                        </p>

                        <p class='p4'>
                            C: Des ordres! J' {{ Form::text('q4_5', null, array('autocomplete' => 'off')) }}
                            ai moi aussi! Madame Lise {{ Form::text('q4_6', null, array('autocomplete' => 'off')) }}
                            a demandé de prendre tous les messages pour {{ Form::text('q4_7', null, array('autocomplete' => 'off')) }}.
                        </p>

                        <p class='p4'>
                            L: Vous {{ Form::text('q4_8', null, array('autocomplete' => 'off')) }}
                            direz que je suis passé, mais dites- {{ Form::text('q4_9', null, array('autocomplete' => 'off')) }} au moins o&ugrave; elle travaille.
                        </p>

                        <p class='p4'>
                            C: Allez au studio 400. Je crois qu'elle {{ Form::text('q4_10', null, array('autocomplete' => 'off')) }}
                            est à cette heure-ci.
                        </p>

                        <h3>5) Complétez le dialogue avec les pronoms relatifs appropriés (que, qui, dont, ce qui, ce que...) (13 points):</h3>

                        <p class='p5'>
                            Voilà trois jours que je suis arrivé à Amboise. Moi {{ Form::text('q5_1', null, array('autocomplete' => 'off')) }}
                            n'avais jamais voyagé, je trouve que les gens ici sont très sympathiques. Ils veulent tout de suite savoir {{ Form::text('q5_2', null, array('autocomplete' => 'off')) }}
                            vous vivez, {{ Form::text('q5_3', null, array('autocomplete' => 'off')) }}
                            vous faites dans la vie, les choses {{ Form::text('q5_4', null, array('autocomplete' => 'off')) }}
                            vous vous intéressez. C'est du moins le cas de tous ceux {{ Form::text('q5_5', null, array('autocomplete' => 'off')) }}
                            j'ai rencontrés jusqu'à maintenant. Je me plais à regarder les magasins devant {{ Form::text('q5_6', null, array('autocomplete' => 'off')) }}
                            je m'arrête à chaque pas, les marchés {{ Form::text('q5_7', null, array('autocomplete' => 'off')) }}
                            on trouve tout {{ Form::text('q5_8', null, array('autocomplete' => 'off')) }}
                            on a envie. Un de mes plus grands plaisirs, c'est de monter en haut du clocher de l'église {{ Form::text('q5_9', null, array('autocomplete' => 'off')) }}
                            on domine toute la ville. C'est un spectacle {{ Form::text('q5_10', null, array('autocomplete' => 'off')) }}
                            on ne peut pas se fatiguer. 
                        </p>

                        <h3>6) Complétez le texte suivant en choisissant l'un des termes proposés entre parenthèses (10 points):</h3>

                        <p class='p6'>
                            Trois {{ Form::text('q6_1', null, array('autocomplete' => 'off')) }}
                            (ans / années) après son diplôme, John Smith est parti {{ Form::text('q6_2', null, array('autocomplete' => 'off')) }}
                            (pour / à / vers) Paris. Là, il a cherché un poste de traducteur. Après avoir {{ Form::text('q6_3', null, array('autocomplete' => 'off')) }}
                            (posé / appliqué / adressé) sa candidature auprès d'une cinquantaine d'entreprises et espéré en vain une réponse {{ Form::text('q6_4', null, array('autocomplete' => 'off')) }}
                            (vite / hâtive / rapide) pour signer un contrat, il a décidé de {{ Form::text('q6_5', null, array('autocomplete' => 'off')) }}
                            (rendre compte / prendre en compte / tenir compte) des réalités du marché et de travailler en free-lance pour commencer. 
                            Il a alors traduit des articles pour plusieurs agences. Parfois il restait plusieurs jours à ne rien faire, 
                            parfois il écrivait dix à douze heures {{ Form::text('q6_6', null, array('autocomplete' => 'off')) }}
                            (par suite / de suite / ensuite). Il éprouvait dans ce cas un grand besoin de sortir au grand air pour {{ Form::text('q6_7', null, array('autocomplete' => 'off')) }}
                            (clarifier / s'éclairer / s'éclaircir) les idées. 
                        </p>

                        <p class='p6'>
                            (Ainsi / aussi) {{ Form::text('q6_8', null, array('autocomplete' => 'off')) }}
                            ont passé {{ Form::text('q6_9', null, array('autocomplete' => 'off')) }}
                            (les premiers deux / les deux premiers / deux premiers) mois, puis il a réussi {{ Form::text('q6_10', null, array('autocomplete' => 'off')) }}
                            (d'être recruté / à être recruté / à être recru) sur un contrat à durée indéterminée. 
                        </p>

                        <h3>7) Mettez les verbes entre parenthèses au passé composé (12 points):</h3>

                        <p class='p7'>
                            Les premières fraises sont arrivées, j'en (acheter) 
                            {{ Form::text('q7_1', null, array('autocomplete' => 'off')) }} une livre.
                        </p>

                        <p class='p7'>
                            Pour son mariage, elle (se faire) 
                            {{ Form::text('q7_2', null, array('autocomplete' => 'off')) }} habiller par un grand couturier.
                        </p>

                        <p class='p7'>
                            Elle (se blesser) 
                            {{ Form::text('q7_3', null, array('autocomplete' => 'off')) }} en tombant dans l'escalier: elle (se casser) 
                            {{ Form::text('q7_4', null, array('autocomplete' => 'off')) }} le bras.
                        </p>

                        <p class='p7'>
                            Ils (se parler) 
                            {{ Form::text('q7_5', null, array('autocomplete' => 'off')) }} hier une heure au téléphone mais ils (ne pas encore se voir) 
                            {{ Form::text('q7_6', null, array('autocomplete' => 'off')) }} .
                        </p>

                        <div style='text-align:center; margin: 15px 0 25px 0;'>
                            {{ Form::submit('Submit Exam') }}
                        </div>

			{{ Form::close() }}

                </div>

                <div class="links">
                    Powered by <a href='http://jeromecombes.com'>jeromecombes.com</a>
                </div>
            </div>
        </div>
    </body>
</html>