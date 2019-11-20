<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen de placement</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
		/*color: #636b6f;*/
		color: #000000;
		/*font-family: 'Raleway', sans-serif;*/
                font-family: 'Verdana', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 25px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /*align-items: center;
                display: flex;
		justify-content: center;*/
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
/*                text-align: center;*/
            }

            .title {
                font-size: 26px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

	<script type='text/JavaScript'>
	<!--
		function validation()
  		{
  			var err=false;
  			if (!document.form.Nom.value) {
  				err=true;
			}
 			if (!document.form.Prenom.value) {
				err=true;
			}
			if (!document.form.AdresseElectronique.value) {
				err=true;
			}
			if (!document.form.Grammaire.value) {
				err=true;
			}
			if (err) {
				alert("Les champs suivant sont obligatoire :\n- NOM\n- Prénom\n- Adresse électronique\n- Nombre d'années de grammaire");
				return false;
			}
			rep=confirm("Etes vous sûr(e) ?");
			return rep;
		}
	-->
	</script>
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

			<form name="form" action="validate.php" method="post" onsubmit='return validation();'>
				<table>
					<tr><td><b>NOM:</b></td>
						<td><input size="30" maxlength="50" name="Nom" type="text" autocomplete="off" /></td></tr>
					<tr><td><b>Prénom:</b></td>
						<td><input size="30" maxlength="50" name="Prenom" type="text" autocomplete="off" /></td></tr>
					<tr><td><b>Adresse électronique:</b></td>
						<td><input size="30" maxlength="50" name="AdresseElectronique" type="text" autocomplete="off" /></td></tr>
					<tr><td><b>Nombre d'années de grammaire fran&ccedil;aise que vous avez suivies jusqu'à présent:</b></td>
						<td><input size="30" maxlength="15" name="Grammaire" type="text" autocomplete="off" /></td></tr>
				</table>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>1) Complétez le texte en utilisant ou non des articles (22 points):</b>
				</p>

				<p>
					Aujourd'hui, j'ai beaucoup <input size="10" maxlength="30" name="1_1" type="text" autocomplete="off" />
					courses à faire. Je dois d'abord aller acheter <input size="10" maxlength="30" name="1_2" type="text" autocomplete="off" />
					viande. Il me faut aussi <input size="10" maxlength="30" name="1_3" type="text" autocomplete="off" />
					pain. Enfin, je dois aller à <input size="10" maxlength="30" name="1_4" type="text" autocomplete="off" />
					banque pour retirer <input size="10" maxlength="30" name="1_5" type="text" autocomplete="off" />
					argent. Mais il fait <input size="10" maxlength="30" name="1_6" type="text" autocomplete="off" />
					temps horrible. Il y a <input size="10" maxlength="30" name="1_7" type="text" autocomplete="off" />
					pluie et <input size="10" maxlength="30" name="1_8" type="text" autocomplete="off" />
					vent. Je prends <input size="10" maxlength="30" name="1_9" type="text" autocomplete="off" />
					parapluie et je descends. A ce moment-là, <input size="10" maxlength="30" name="1_10" type="text" autocomplete="off" />
					voisine m'appelle: elle ne peut pas ouvrir <input size="10" maxlength="30" name="1_11" type="text" autocomplete="off" />
					porte <input size="10" maxlength="30" name="1_12" type="text" autocomplete="off" />
					garage. Elle porte <input size="10" maxlength="30" name="1_13" type="text" autocomplete="off" />
					belles chaussures vernies et <input size="10" maxlength="30" name="1_14" type="text" autocomplete="off" />
					grand chapeau blanc. Elle a <input size="10" maxlength="30" name="1_15" type="text" autocomplete="off" />
					peur de se salir, moi aussi! Ensemble, nous poussons et enfin, <input size="10" maxlength="30" name="1_16" type="text" autocomplete="off" />
					porte s'ouvre! Il pleut toujours et <input size="10" maxlength="30" name="1_17" type="text" autocomplete="off" />
					chapeau de <input size="10" maxlength="30" name="1_18" type="text" autocomplete="off" />
					jeune femme tombe dans <input size="10" maxlength="30" name="1_19" type="text" autocomplete="off" />
					flaque <input size="10" maxlength="30" name="1_20" type="text" autocomplete="off" />
					eau. Nous rions, mais nous avons <input size="10" maxlength="30" name="1_21" type="text" autocomplete="off" />
					mains toutes sales et <input size="10" maxlength="30" name="1_22" type="text" autocomplete="off" />
					pieds mouillés.
				</p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>2) Mettez les verbes au mode et au temps qui conviennent (12 points):</b>
				</p>

				<p>
					Il faut qu'elle (finir) <input size="20" maxlength="30" name="2_1" type="text" autocomplete="off" />
					cette toile avant demain pour que son propriétaire ne la (mettre) <input size="20" maxlength="30" name="2_2" type="text" autocomplete="off" />
					pas à la porte. Elle aimerait que son nom (être) <input size="20" maxlength="30" name="2_3" type="text" autocomplete="off" />
					déjà célèbre et qu'elle (pouvoir) <input size="20" maxlength="30" name="2_4" type="text" autocomplete="off" />
					se consacrer à son art. 
					Quand je pense que sa mère souhaitait qu'elle (devenir) <input size="20" maxlength="30" name="2_5" type="text" autocomplete="off" />
					notaire. Selon elle, la vie d'artiste ne lui (correspondre) <input size="20" maxlength="30" name="2_6" type="text" autocomplete="off" />
					pas.
				</p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>3) Mettez les verbes soit au passé composé, soit à l'imparfait, soit au plus-que-parfait (21 points):</b>
				</p>

				<p>
					Il (faire) <input size="20" maxlength="30" name="3_1" type="text" autocomplete="off" />
					très froid cette nuit-là et Jean n' (arriver) <input size="20" maxlength="30" name="3_2" type="text" autocomplete="off" />
					pas à dormir. Alors, il (se lever) <input size="20" maxlength="30" name="3_3" type="text" autocomplete="off" />
					, il (aller) <input size="20" maxlength="30" name="3_4" type="text" autocomplete="off" />
					au salon o&ugrave; la température (être) <input size="20" maxlength="30" name="3_5" type="text" autocomplete="off" />
					plus agréable et il (commencer) <input size="20" maxlength="30" name="3_6" type="text" autocomplete="off" />
					à lire le journal. 
				</p>

				<p>
					Il (lire) <input size="20" maxlength="30" name="3_7" type="text" autocomplete="off" />
					depuis un moment lorsqu'il (entendre) <input size="20" maxlength="30" name="3_8" type="text" autocomplete="off" />
					du bruit à la porte. Il (être) <input size="20" maxlength="30" name="3_9" type="text" autocomplete="off" />
					surpris car à cette heure tardive tout le monde (dormir) <input size="20" maxlength="30" name="3_10" type="text" autocomplete="off" />
					dans l'immeuble. Il (se diriger) <input size="20" maxlength="30" name="3_11" type="text" autocomplete="off" />
					vers la porte, qu'il (ouvrir) <input size="20" maxlength="30" name="3_12" type="text" autocomplete="off" />
					et il (se trouver) <input size="20" maxlength="30" name="3_13" type="text" autocomplete="off" />
					nez à nez avec le fils des voisins qui (rentrer) <input size="20" maxlength="30" name="3_14" type="text" autocomplete="off" />
					d'une soirée. 
				</p>

				<p>
					Alors, ce dernier (s'excuser) <input size="20" maxlength="30" name="3_15" type="text" autocomplete="off" />
					et il (expliquer) <input size="20" maxlength="30" name="3_16" type="text" autocomplete="off" />
					qu'il (oublier) <input size="20" maxlength="30" name="3_17" type="text" autocomplete="off" />
					ses clés avant de sortir et que, comme il (voir) <input size="20" maxlength="30" name="3_18" type="text" autocomplete="off" />
					un trait de lumière sous la porte de Jean, il (se permettre) <input size="20" maxlength="30" name="3_19" type="text" autocomplete="off" />
					de frapper. Jean l'(inviter) <input size="20" maxlength="30" name="3_20" type="text" autocomplete="off" />
					à entrer chez lui. 
				</p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>4) Complétez le dialogue en utilisant les pronoms personnels appropriés (le, la, les, lui, leur, y, en...) (10 points):</b>
				</p>

				<p>
					Le livreur (L): J'ai un petit message pour Madame Lise.
				</p>

				<p>
					Le concierge (C): Laissez <input size="10" maxlength="30" name="4_1" type="text" autocomplete="off" />
					moi. Je vais <input size="10" maxlength="30" name="4_2" type="text" autocomplete="off" />
					voir tout à l'heure. </p>

				<p>
					L: Mais je dois <input size="10" maxlength="30" name="4_3" type="text" autocomplete="off" /> 
					<input size="10" maxlength="30" name="4_4" type="text" autocomplete="off" /> 
					remettre en mains propres. </p>

				<p>
					C: Vous n'avez pas confiance en moi? </p>

				<p>
					L: Je regrette, j'ai des ordres.</p>

				<p>
					C: Des ordres! J' <input size="10" maxlength="30" name="4_5" type="text" autocomplete="off" />
					ai moi aussi! Madame Lise <input size="10" maxlength="30" name="4_6" type="text" autocomplete="off" />
					a demandé de prendre tous les messages pour <input size="10" maxlength="30" name="4_7" type="text" autocomplete="off" />. </p>

				<p>
					L: Vous <input size="10" maxlength="30" name="4_8" type="text" autocomplete="off" />
					direz que je suis passé, mais dites- <input size="10" maxlength="30" name="4_9" type="text" autocomplete="off" />au moins o&ugrave; elle travaille. </p>

				<p>
					C: Allez au studio 400. Je crois qu'elle <input size="10" maxlength="30" name="4_10" type="text" autocomplete="off" />
					est à cette heure-ci. </p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>5) Complétez le dialogue avec les pronoms relatifs appropriés (que, qui, dont, ce qui, ce que...) (13 points):</b>
				</p>
			
				<p>
					Voilà trois jours que je suis arrivé à Amboise. Moi <input size="10" maxlength="30" name="5_1" type="text" autocomplete="off" />
					n'avais jamais voyagé, je trouve que les gens ici sont très sympathiques. Ils veulent tout de suite savoir <input size="10" maxlength="30" name="5_2" type="text" autocomplete="off" />
					vous vivez, <input size="10" maxlength="30" name="5_3" type="text" autocomplete="off" />
					vous faites dans la vie, les choses <input size="10" maxlength="30" name="5_4" type="text" autocomplete="off" />
					vous vous intéressez. C'est du moins le cas de tous ceux <input size="10" maxlength="30" name="5_5" type="text" autocomplete="off" />
					j'ai rencontrés jusqu'à maintenant. Je me plais à regarder les magasins devant <input size="10" maxlength="30" name="5_6" type="text" autocomplete="off" />
					je m'arrête à chaque pas, les marchés <input size="10" maxlength="30" name="5_7" type="text" autocomplete="off" />
					on trouve tout <input size="10" maxlength="30" name="5_8" type="text" autocomplete="off" />
					on a envie. Un de mes plus grands plaisirs, c'est de monter en haut du clocher de l'église <input size="10" maxlength="30" name="5_9" type="text" autocomplete="off" />
					on domine toute la ville. C'est un spectacle <input size="10" maxlength="30" name="5_10" type="text" autocomplete="off" />
					on ne peut pas se fatiguer. 
				</p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>6) Complétez le texte suivant en choisissant l'un des termes proposés entre parenthèses (10 points):</b>
				</p>

				<p>
					Trois <input size="20" maxlength="30" name="6_1" type="text" autocomplete="off" />
					(ans / années) après son diplôme, John Smith est parti <input size="20" maxlength="30" name="6_2" type="text" autocomplete="off" />
					(pour / à / vers) Paris. Là, il a cherché un poste de traducteur. Après avoir <input size="20" maxlength="30" name="6_3" type="text" autocomplete="off" />
					(posé / appliqué / adressé) sa candidature auprès d'une cinquantaine d'entreprises et espéré en vain une réponse <input size="20" maxlength="30" name="6_4" type="text" autocomplete="off" />
					(vite / hâtive / rapide) pour signer un contrat, il a décidé de <input size="20" maxlength="30" name="6_5" type="text" autocomplete="off" />
					(rendre compte / prendre en compte / tenir compte) des réalités du marché et de travailler en free-lance pour commencer. 
					Il a alors traduit des articles pour plusieurs agences. Parfois il restait plusieurs jours à ne rien faire, 
					parfois il écrivait dix à douze heures <input size="20" maxlength="30" name="6_6" type="text" autocomplete="off" />
					(par suite / de suite / ensuite). Il éprouvait dans ce cas un grand besoin de sortir au grand air pour <input size="20" maxlength="30" name="6_7" type="text" autocomplete="off" />
					(clarifier / s'éclairer / s'éclaircir) les idées. 
				</p>

				<p>
					(Ainsi / aussi) <input size="20" maxlength="30" name="6_8" type="text" autocomplete="off" />
					ont passé <input size="20" maxlength="30" name="6_9" type="text" autocomplete="off" />
					(les premiers deux / les deux premiers / deux premiers) mois, puis il a réussi <input size="20" maxlength="30" name="6_10" type="text" autocomplete="off" />
					(d'être recruté / à être recruté / à être recru) sur un contrat à durée indéterminée. 
				</p>

				<div style="padding-top: 15px;">
				</div>

				<p>
					<b>7) Mettez les verbes entre parenthèses au passé composé (12 points):</b>
				</p>

				<p>
					Les premières fraises sont arrivées, j'en (acheter) 
					<input size="20" maxlength="30" name="7_1" type="text" autocomplete="off" /> une livre. </p>

				<p>
					Pour son mariage, elle (se faire) 
					<input size="20" maxlength="30" name="7_2" type="text" autocomplete="off" /> habiller par un grand couturier. </p>

				<p>
					Elle (se blesser) 
					<input size="20" maxlength="30" name="7_3" type="text" autocomplete="off" /> en tombant dans l'escalier: elle (se casser) 
					<input size="20" maxlength="30" name="7_4" type="text" autocomplete="off" /> le bras. </p>

				<p>
					Ils (se parler) 
					<input size="20" maxlength="30" name="7_5" type="text" autocomplete="off" /> hier une heure au téléphone mais ils (ne pas encore se voir) 
					<input size="20" maxlength="30" name="7_6" type="text" autocomplete="off" /> .</p>

				<div style="padding-top: 15px;">
				</div>

				<div style='text-align:center; margin-bottom:25px;'>
					<input name="recipient" type="hidden" />
					<input name="print_blank_fields" type="hidden" />
					<input value="Submit Exam" name="submit" type="submit" />
				</div>

			</form>

                </div>

                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>
