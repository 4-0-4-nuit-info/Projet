 document.getElementById("question").innerHTML = "La zone de l'accident est-elle protégée?"
	var i = 0;
  var tab = ["La zone de l'accident est-elle protégée?","Y a-t-il des blessés?","Les secours ont-ils déjà été appelés ?"];
  var anwYES=["","Si vous êtes impliqué ou que vous avez appelé les secours, restez sur les lieux de l&#39;accident jusqu&#39;à l&#39;arrivée des secours + s&#39;occuper des blessés.<br /> <br /> ","Restez sur les lieux de l&#39;accident jusqu&#39;à leur arrivée et occupez vous des blessés avec les conseils du SAMU (15)"]
  var anwNO=["Protégez la zone (triangle rouge, gilets jaunes,...)","Si vous êtes impliqué, remplissez avec les autres usagers impliqués un constat à l'amiable. Contactez le 17 (Police) si l'accident à lieu sur voie rapide ou autoroute.",
				"Appelez le SAMU (15) et suivez leurs instructions.Vous devez donner les informations suivantes :<br />- Nom<br />- Prénom<br />- numéro de téléphone<br />- Addresse de l&#39;accident<br />- Nature de l&#39;intervention<br />- Etat des blessés.<br />Restez en ligne tant que votre correspondant n'a pas raccroché.<br />Après, occupez vous des blessés sous les conseils du SAMU"]
    function questionnaireOui(){
i ++;
console.log("QuestionnaireOui")
		switch (i){
		case 1:
			document.getElementById("question2").innerHTML = tab[1];
			document.getElementById("reponse").innerHTML = "<i>Oui</i><br />D'accord...";
			break;
		
		case 2:
			document.getElementById("question3").innerHTML = tab[2];
			document.getElementById("reponse2").innerHTML = "<i>Oui</i><br />D'accord...<br /><br />";
			break;
			
		case 3:
			document.getElementById("reponse3").innerHTML = anwYES[2];
			document.getElementById("boutons").innerHTML = "";
			break;
		
		
	}
 }

 function questionnaireNon(){
 console.log("questionnaireNon")
	i ++;
	switch (i){
		case 1:
			document.getElementById("reponse").innerHTML = anwNO[0];
			document.getElementById("question2").innerHTML = tab[1];
			break;
		
		case 2:
			document.getElementById("reponse2").innerHTML = anwNO[1];
			document.getElementById("question3").innerHTML = tab[2];
			break;
		
		case 3:
			
			document.getElementById("reponse3").innerHTML = anwNO[2];
			document.getElementById("boutons").innerHTML = "";
			break;
		
	}
 }