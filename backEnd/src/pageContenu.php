<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>'.$_SESSION['nomJeuSouhaite'].'</title>';
    echo '</head>';

    echo '<body>';
    echo '<h1>'.$_SESSION['nomJeuSouhaite'].'</h1>';
    echo '<br />';


    //Partie javascript pour le Ajax
    echo '
    <script language="javascript">
    function getXMLHttpRequest() {
        var xhr = null;
        if (window.XMLHttpRequest || window.ActiveXObject) {
            if (window.ActiveXObject) {
                try {
                    xhr = new ActiveXObject("Msxml2.XMLHTTP");
                } catch(e) {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
            } else {
                xhr = new XMLHttpRequest(); 
            }
        } else {
            alert("Votre navigateur ne supporte pas lobjet XMLHTTPRequest...");
            return null;
        }
        return xhr;
    }

    //Déclaration de notre objet XHR à laide de notre fonction déclarer plus haut
    var xhr = getXMLHttpRequest();
    //Déclaration dune fonction sur lévénement onreadystatechange qui évolue au fur et à mesure de lappel
    xhr.onreadystatechange = function () {
    if(this.readyState == 4) //si la requête à abouti et est terminée
    {    
        if(this.status == 200) // si le code de retour est 200, le serveur à répondu et envoyé une réponse
        {
            //Le traitement à effectuer avec la réponse. Ici : affichage via alert, passage à une fonction, mise un jour du DOM (réponse dans xhr.responseText et dans xhr.responseXML).
            var resultat = JSON.parse(this.responseText);
            document.getElementById("infoJeu").innerHTML = "Nom : " + resultat.nom + " Nom de la page : " + resultat.nomPage + " File à lancer : " + resultat.fileALancer +"\n\n\n";
            //document.getElementById("jeu").innerHTML = ("jeux/"+resultat.fileALancer);
            window.location= "jeux/"+resultat.fileALancer;
        }
        else 
        {
            //traitement dans le cas dun retour en erreur code != 200 : affichage par alert, console, mise à jour du DOM. 
            alert("Le serveur na pas répondu à la requête : code derreur : " + this.status);
        }
    }
    }
    xhr.open("GET","getJeu.php?nomJeu='.$_SESSION['nomJeuSouhaite'].'",true); //Requête AJAX en mode GET sur lurl donnée.
    xhr.send(null); //Puisque cest une requête en GET
    </script>
    <div id="infoJeu"></div>
    <div id="jeu"></div>
    ';


    // On affiche un lien pour fermer notre session
    echo '<a href="./logout.php">Déconnexion</a>';
?>

