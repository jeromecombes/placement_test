<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
<head>
<title>Examen de Placement</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h1>Examen de Placement</h1>
Merci d'avoir compl&eacute;t&eacute; ce formulaire.
</body>
</html>

<?php


// Last update : 2017-03-16, Jerome Combes


require_once 'db.php';
include "reponses.php";


$mail_dest="ek2829@columbia.edu , cc3684@columbia.edu , jc4069@columbia.edu , sm1153@columbia.edu , cdd2114@columbia.edu";



$post = FILTER_INPUT_ARRAY(INPUT_POST,FILTER_SANITIZE_STRING);
$post = array_map('sanitize',$post);

function sanitize($s){
	$s = stripslashes($s);
	$s = trim($s);
	$s = htmlentities($s,ENT_QUOTES|ENT_IGNORE,'UTF-8',false);
	$s = addslashes($s);
	return $s;
}


$reponse = array();
$points = array("0"=> 0, "1"=> 0, "2"=> 0, "3"=> 0, "4"=> 0, "5"=> 0, "6"=> 0, "7"=> 0);

foreach($post as $k => $v){
	$post[$k] = trim($post[$k]);
	$post[$k] = preg_replace('/\s{2,}/', ' ', $post[$k]);
	
	if(trim($v)==''){
		$post[$k] = '[vide]';
	}
	$reponse[$k] = null;
	
	if(in_array(strtolower($post[$k]), $reponses[$k])){
		$reponse[$k] = 'reponse-ok';
		$points[substr($k,0,1)]++;
		$points["0"]++;
		
		if(substr($k,0,1) == "2" or substr($k,0,1) == "7" or $k=="3_12" or $k=="5_3" or $k=="5_4" or $k=="5_8"){
			$points[substr($k,0,1)]++;
			$points["0"]++;
		}
	}
}

$nom_prenom = html_entity_decode($post['Nom'].' '.$post['Prenom'], ENT_QUOTES|ENT_IGNORE, 'ISO-8859-1');
$subject="French Exam Form $nom_prenom";
$message=
"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> 
<html>
<head>
<title>Examen de Placement</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<style type='text/css'>
.question{
	color:blue;
	}
.reponse,
.points{
	color:red;
	}
.reponse-ok{
	color:green;
	}
</style>
</head>

<body style=\"margin:0px 0px 0px 0px;font-size:12pt;font-family:Arial;\">
<p>R&eacute;sultats des examens disponibles sur 
<a href='https://intranet.reidhall.com/?menuaction=Placement.placement_ui.index&cd=yes'>https://intranet.reidhall.com</a></p>
<h1>Examen de Placement</h1>
Please complete the following exam without the use of a dictionary or other aid. 
<div class=\"Welcome\" style=\"margin: 5px; text-align: justify;\">
<table>
<tr><td><b>NOM:</b></td>
<td><b class='reponse-ok'>{$post['Nom']}</b></td></tr>
<tr><td><b>Pr&eacute;nom:</b></td>
<td><b class='reponse-ok'>{$post['Prenom']}</b></td></tr>
<tr><td><b>Adresse &eacute;lectronique:</b></td>
<td><b class='reponse-ok'>{$post['AdresseElectronique']}</b></td></tr>
<tr><td><b>Nombre d'ann&eacute;es de grammaire fran&ccedil;aise que vous avez suivies jusqu'&agrave; pr&eacute;sent:</b></td>
<td><b class='reponse-ok'>{$post['Grammaire']}</b></td></tr>
<tr><td><b>Nombre total de points:</b></td>
<td><b class='reponse'>{$points['0']}</b></td></tr>
</table>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>1) Compl&eacute;tez le texte en utilisant ou non des articles (22 points): <span class='points'>{$points[1]}</span></b>
</p>
<p>

Aujourd'hui, j'ai beaucoup <font class='question'>1_1</font><b class='reponse {$reponse['1_1']}'> {$post['1_1']}</b>
courses &agrave; faire. Je dois d'abord aller acheter <font class='question'>1_2</font><b class='reponse {$reponse['1_2']}'> {$post['1_2']}</b>
viande. Il me faut aussi <font class='question'>1_3</font><b class='reponse {$reponse['1_3']}'> {$post['1_3']}</b>
pain. Enfin, je dois aller &agrave; <font class='question'>1_4</font><b class='reponse {$reponse['1_4']}'> {$post['1_4']}</b>
banque pour retirer <font class='question'>1_5</font><b class='reponse {$reponse['1_5']}'> {$post['1_5']}</b>
argent. Mais il fait <font class='question'>1_6</font><b class='reponse {$reponse['1_6']}'> {$post['1_6']}</b>
temps horrible. Il y a <font class='question'>1_7</font><b class='reponse {$reponse['1_7']}'> {$post['1_7']}</b>
pluie et <font class='question'>1_8</font><b class='reponse {$reponse['1_8']}'> {$post['1_8']}</b>
vent. Je prends <font class='question'>1_9</font><b class='reponse {$reponse['1_9']}'> {$post['1_9']}</b>
parapluie et je descends. A ce moment-l&agrave;, <font class='question'>1_10</font><b class='reponse {$reponse['1_10']}'> {$post['1_10']}</b>
voisine m'appelle: elle ne peut pas ouvrir <font class='question'>1_11</font><b class='reponse {$reponse['1_11']}'> {$post['1_11']}</b>
porte <font class='question'>1_12</font><b class='reponse {$reponse['1_12']}'> {$post['1_12']}</b>
garage. Elle porte <font class='question'>1_13</font><b class='reponse {$reponse['1_13']}'> {$post['1_13']}</b>
belles chaussures vernies et <font class='question'>1_14</font><b class='reponse {$reponse['1_14']}'> {$post['1_14']}</b>
grand chapeau blanc. Elle a <font class='question'>1_15</font><b class='reponse {$reponse['1_15']}'> {$post['1_15']}</b>
peur de se salir, moi aussi! Ensemble, nous poussons et enfin, <font class='question'>1_16</font><b class='reponse {$reponse['1_16']}'> {$post['1_16']}</b>
porte s'ouvre! Il pleut toujours et <font class='question'>1_17</font><b class='reponse {$reponse['1_17']}'> {$post['1_17']}</b>
chapeau de <font class='question'>1_18</font><b class='reponse {$reponse['1_18']}'> {$post['1_18']}</b>
jeune femme tombe dans <font class='question'>1_19</font><b class='reponse {$reponse['1_19']}'> {$post['1_19']}</b>
flaque <font class='question'>1_20</font><b class='reponse {$reponse['1_20']}'> {$post['1_20']}</b>
eau. Nous rions, mais nous avons <font class='question'>1_21</font><b class='reponse {$reponse['1_21']}'> {$post['1_21']}</b>
mains toutes sales et <font class='question'>1_22</font><b class='reponse {$reponse['1_22']}'> {$post['1_22']}</b>
pieds mouill&eacute;s. 
</p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>2) Mettez les verbes au mode et au temps qui conviennent (12 points): <span class='points'>{$points[2]}</span></b>
</p>
<p>
Il faut qu'elle (finir) <font class='question'>2_1</font><b class='reponse {$reponse['2_1']}'> {$post['2_1']}</b> 
cette toile avant demain pour que son propri&eacute;taire ne la (mettre) <font class='question'>2_2</font><b class='reponse {$reponse['2_2']}'> {$post['2_2']}</b> 
pas &agrave; la porte. Elle aimerait que son nom (&ecirc;tre) <font class='question'>2_3</font><b class='reponse {$reponse['2_3']}'> {$post['2_3']}</b> 
d&eacute;j&agrave; c&eacute;l&egrave;bre, et qu'elle (pouvoir) <font class='question'>2_4</font><b class='reponse {$reponse['2_4']}'> {$post['2_4']}</b> 
se consacrer &agrave; son art. Quand je pense que sa m&egrave;re souhaitait qu'elle (devenir) <font class='question'>2_5</font><b class='reponse {$reponse['2_5']}'> {$post['2_5']}</b>
notaire. Selon elle, la vie d'artiste ne lui (correspondre) <font class='question'>2_6</font><b class='reponse {$reponse['2_6']}'> {$post['2_6']}</b>
pas.
</p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>3) Mettez les verbes soit au pass&eacute; compos&eacute;, soit &agrave; l'imparfait, soit au plus-que-parfait (21 points): <span class='points'>{$points[3]}</span></b>
</p>
<p>
Il (faire) <font class='question'>3_1</font><b class='reponse {$reponse['3_1']}'> {$post['3_1']}</b>
tr&egrave;s froid cette nuit-l&agrave; et Jean n' (arriver) <font class='question'>3_2</font><b class='reponse {$reponse['3_2']}'> {$post['3_2']}</b>
pas &agrave; dormir. Alors, il (se lever) <font class='question'>3_3</font><b class='reponse {$reponse['3_3']}'> {$post['3_3']}</b>, il (aller) <font class='question'>3_4</font><b class='reponse {$reponse['3_4']}'> {$post['3_4']}</b>
au salon o&ugrave; la temp&eacute;rature (&ecirc;tre) <font class='question'>3_5</font><b class='reponse {$reponse['3_5']}'> {$post['3_5']}</b>
plus agr&eacute;able et il (commencer) <font class='question'>3_6</font><b class='reponse {$reponse['3_6']}'> {$post['3_6']}</b>
&agrave; lire le journal. 
</p>
<p>
Il (lire) <font class='question'>3_7</font><b class='reponse {$reponse['3_7']}'> {$post['3_7']}</b>
depuis un moment lorsqu'il (entendre) <font class='question'>3_8</font><b class='reponse {$reponse['3_8']}'> {$post['3_8']}</b>
du bruit &agrave; la porte. Il (&ecirc;tre) <font class='question'>3_9</font><b class='reponse {$reponse['3_9']}'> {$post['3_9']}</b>
surpris car &agrave; cette heure tardive tout le monde (dormir) <font class='question'>3_10</font><b class='reponse {$reponse['3_10']}'> {$post['3_10']}</b>
dans l'immeuble. Il (se diriger) <font class='question'>3_11</font><b class='reponse {$reponse['3_11']}'> {$post['3_11']}</b>
vers la porte qu'il (ouvrir) <font class='question'>3_12</font><b class='reponse {$reponse['3_12']}'> {$post['3_12']}</b>
et il (se trouver) <font class='question'>3_13</font><b class='reponse {$reponse['3_13']}'> {$post['3_13']}</b>
nez &agrave; nez avec le fils des voisins qui (rentrer) <font class='question'>3_14</font><b class='reponse {$reponse['3_14']}'> {$post['3_14']}</b>
d'une soir&eacute;e. 
</p>
<p>
Alors, ce dernier (s'excuser) <font class='question'>3_15</font><b class='reponse {$reponse['3_15']}'> {$post['3_15']}</b>
et il (expliquer) <font class='question'>3_16</font><b class='reponse {$reponse['3_16']}'> {$post['3_16']}</b>
qu'il (oublier) <font class='question'>3_17</font><b class='reponse {$reponse['3_17']}'> {$post['3_17']}</b>
ses cl&eacute;s avant de sortir, et que comme il (voir) <font class='question'>3_18</font><b class='reponse {$reponse['3_18']}'> {$post['3_18']}</b>
un trait de lumi&egrave;re sous la porte de Jean, il (se permettre) <font class='question'>3_19</font><b class='reponse {$reponse['3_19']}'> {$post['3_19']}</b>
de frapper. Jean l'(inviter) <font class='question'>3_20</font><b class='reponse {$reponse['3_20']}'> {$post['3_20']}</b>
&agrave; entrer chez lui. 
</p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>4) Compl&eacute;tez le dialogue en utilisant les pronoms personnels appropri&eacute;s (le, la, les, lui, leur, y, en...) (10 points): <span class='points'>{$points[4]}</span></b>
</p>
<p>
Le livreur (L): J'ai un petit message pour Madame Lise.
</p>
<p>
Le concierge (C): Laissez <font class='question'>4_1</font><b class='reponse {$reponse['4_1']}'> {$post['4_1']}</b>
moi. Je vais <font class='question'>4_2</font><b class='reponse {$reponse['4_2']}'> {$post['4_2']}</b>
voir tout &agrave; l'heure. </p>
<p>
L: Mais je dois <font class='question'>4_3</font><b class='reponse {$reponse['4_3']}'> {$post['4_3']}</b> 
<font class='question'>4_4</font><b class='reponse {$reponse['4_4']}'> {$post['4_4']}</b> 
remettre en mains propres. </p>
<p>
C: Vous n'avez pas confiance en moi? </p>
<p>
L: Je regrette, j'ai des ordres. </p>
<p>
C: Des ordres! J' <font class='question'>4_5</font><b class='reponse {$reponse['4_5']}'> {$post['4_5']}</b>
ai moi aussi! Madame Lise <font class='question'>4_6</font><b class='reponse {$reponse['4_6']}'> {$post['4_6']}</b>
a demand&eacute; de prendre tous les messages pour <font class='question'>4_7</font><b class='reponse {$reponse['4_7']}'> {$post['4_7']}</b>. </p>
<p>
L: Vous <font class='question'>4_8</font><b class='reponse {$reponse['4_8']}'> {$post['4_8']}</b>
direz que je suis pass&eacute;, mais dites- <font class='question'>4_9</font><b class='reponse {$reponse['4_9']}'> {$post['4_9']}</b> au moins o&ugrave; elle travaille. </p>
<p>
C: Allez au studio 400. Je crois qu'elle <font class='question'>4_10</font><b class='reponse {$reponse['4_10']}'> {$post['4_10']}</b>
est &agrave; cette heure-ci. </p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>5) Compl&eacute;tez le dialogue avec les pronoms relatifs appropri&eacute;s (que, qui, dont, ce qui, ce que...) (13 points): <span class='points'>{$points[5]}</span></b>
</p>
<p>
Voil&agrave; trois jours que je suis arriv&eacute; &agrave; Amboise. Moi <font class='question'>5_1</font><b class='reponse {$reponse['5_1']}'> {$post['5_1']}</b>
n'avais jamais voyag&eacute;, je trouve que les gens ici sont tr&egrave;s sympathiques. Ils veulent tout de suite savoir <font class='question'>5_2</font><b class='reponse {$reponse['5_2']}'> {$post['5_2']}</b>
vous vivez, <font class='question'>5_3</font><b class='reponse {$reponse['5_3']}'> {$post['5_3']}</b>
vous faites dans la vie, les choses <font class='question'>5_4</font><b class='reponse {$reponse['5_4']}'> {$post['5_4']}</b>
vous vous int&eacute;ressez. C'est du moins le cas de tous ceux <font class='question'>5_5</font><b class='reponse {$reponse['5_5']}'> {$post['5_5']}</b>
j'ai rencontr&eacute;s jusqu'&agrave; maintenant. Je me plais &agrave; regarder les magasins devant <font class='question'>5_6</font><b class='reponse {$reponse['5_6']}'> {$post['5_6']}</b>
je m'arr&ecirc;te &agrave; chaque pas, les march&eacute;s <font class='question'>5_7</font><b class='reponse {$reponse['5_7']}'> {$post['5_7']}</b>
on trouve tout <font class='question'>5_8</font><b class='reponse {$reponse['5_8']}'> {$post['5_8']}</b>
on a envie. Un de mes plus grands plaisirs, c'est de monter en haut du clocher de l'&eacute;glise <font class='question'>5_9</font><b class='reponse {$reponse['5_9']}'> {$post['5_9']}</b>
on domine toute la ville. C'est un spectacle <font class='question'>5_10</font><b class='reponse {$reponse['5_10']}'> {$post['5_10']}</b>
on ne peut pas se fatiguer. 
</p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>6) Compl&eacute;tez le texte suivant en choisissant l'un des termes propos&eacute;s entre parenth&egrave;ses (10 points): <span class='points'>{$points[6]}</span></b>
</p>
<p>
Trois <font class='question'>6_1</font><b class='reponse {$reponse['6_1']}'> {$post['6_1']}</b>
(ans / ann&eacute;es) apr&egrave;s son dipl&ocirc;me, John Smith est parti <font class='question'>6_2</font><b class='reponse {$reponse['6_2']}'> {$post['6_2']}</b>
(pour / &agrave; / vers) Paris. L&agrave;, il a cherch&eacute; un poste de traducteur. Apr&egrave;s avoir <font class='question'>6_3</font><b class='reponse {$reponse['6_3']}'> {$post['6_3']}</b>
(pos&eacute; / appliqu&eacute; / adress&eacute;) sa candidature aupr&egrave;s d'une cinquantaine d'entreprises et esp&eacute;r&eacute; en vain une r&eacute;ponse <font class='question'>6_4</font><b class='reponse {$reponse['6_4']}'> {$post['6_4']}</b>
(vite / h&acirc;tive / rapide) pour signer un contrat, il a d&eacute;cid&eacute; de <font class='question'>6_5</font><b class='reponse {$reponse['6_5']}'> {$post['6_5']}</b>
(rendre compte / prendre en compte / tenir compte) des r&eacute;alit&eacute;s du march&eacute; et de travailler en free-lance pour commencer. Il a alors traduit des articles pour plusieurs agences. Parfois il restait plusieurs jours &agrave; ne rien faire, parfois il &eacute;crivait dix &agrave; douze heures <font class='question'>6_6</font><b class='reponse {$reponse['6_6']}'> {$post['6_6']}</b>
(par suite / de suite / ensuite). Il &eacute;prouvait dans ce cas un grand besoin de sortir au grand air pour <font class='question'>6_7</font><b class='reponse {$reponse['6_7']}'> {$post['6_7']}</b>
(clarifier / s'&eacute;clairer / s'&eacute;claircir) les id&eacute;es. 
</p>
<p>
(Ainsi / aussi) <font class='question'>6_8</font><b class='reponse {$reponse['6_8']}'> {$post['6_8']}</b>
ont pass&eacute; <font class='question'>6_9</font><b class='reponse {$reponse['6_9']}'> {$post['6_9']}</b>
(les premiers deux / les deux premiers / deux premiers) mois, puis il a r&eacute;ussi <font class='question'>6_10</font><b class='reponse {$reponse['6_10']}'> {$post['6_10']}</b>
(d'&ecirc;tre recrut&eacute; / &agrave; &ecirc;tre recrut&eacute; / &agrave; &ecirc;tre recru) sur un contrat &agrave; dur&eacute;e ind&eacute;termin&eacute;e. 
</p>
<div style=\"padding-top: 15px;\">
</div>
<p>
<b>7) Mettez les verbes entre parenth&egrave;ses au pass&eacute; compos&eacute; (12 points): <span class='points'>{$points[7]}</span></b>
</p>

<p>
Les premi&egrave;res fraises sont arriv&eacute;es, j'en (acheter) 
<font class='question'>7_1</font><b class='reponse {$reponse['7_1']}'> {$post['7_1']}</b> une livre. </p>
<p>
Pour son mariage, elle (se faire) 
<font class='question'>7_2</font><b class='reponse {$reponse['7_2']}'> {$post['7_2']}</b> habiller par un grand couturier. </p>
<p>
Elle (se blesser) 
<font class='question'>7_3</font><b class='reponse {$reponse['7_3']}'> {$post['7_3']}</b> en tombant dans l'escalier: elle (se casser) 
<font class='question'>7_4</font><b class='reponse {$reponse['7_4']}'> {$post['7_4']}</b> le bras. </p>
<p>
Ils (se parler) 
<font class='question'>7_5</font><b class='reponse {$reponse['7_5']}'> {$post['7_5']}</b> hier une heure au t&eacute;l&eacute;phone mais ils (ne pas encore se voir) 
<font class='question'>7_6</font><b class='reponse {$reponse['7_6']}'> {$post['7_6']}</b>.</p>

<div style=\"padding-top: 15px;\">
</div>

</div>
</body>
</html>";



// Enregistrement dans la base de donnees

unset($post['recipient']);
unset($post['print_blank_fields']);
unset($post['submit']);
	
$keys = array_keys($post);
$fields = '`'.join('`, `', $keys).'`';
$values = ':'.join(', :', $keys);
	
$data = array();
	
foreach($post as $k => $v){
	$data[":$k"] = $v;
}
	
	
$sql = "INSERT INTO `placement` ($fields) VALUES ($values)";
$db = new dbh();
$db->prepare($sql);
$db->execute($data);


// TEST
if(in_array($post['AdresseElectronique'], array('jc4069@columbia.edu','ck2713@columbia.edu'))){
	$mail_dest='jc4069@columbia.edu, ck2713@columbia.edu ';
}
	
// Envoi du mail

$from  = "From:no-reply@reidhall.com\n";
$from .= "MIME-version: 1.0\n";
$from .= "Content-type: text/html; charset= utf-8\n";

mail($mail_dest, $subject, $message ,$from); 
?>
