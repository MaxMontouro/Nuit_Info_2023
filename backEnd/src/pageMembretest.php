<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd']))
{
    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
    echo '<br />';


    //Partie javascript
    /*echo '<p id="test"></p>
    <script>
    function sleep(delay) {
      var start = new Date().getTime();
      while (new Date().getTime() < start + delay);
    }
    /* document.addEventListener("keydown", function(event) {
        if (event.code == "KeyQ" ) {
          document.querySelector("#test").value = document.querySelector("#test").value + "q"; 
        }
      }); */
    
      /*document.addEventListener("keydown",
                                function eventHandler(event) {
                                const keyName = event.key;
                                if (keyName == "q" || keyName == "Q") {
                                  document.querySelector("#test").textContent = "premier clic q";
                                },false,);*/
      
      /*document.addEventListener(
        "keyup",
        (event) => {
          const keyName = event.key;
      
          // As the user releases the Ctrl key, the key is no longer active,
          // so event.ctrlKey is false.
          if (keyName === "Control") {
            alert("Control key was released");
          }
        },
        false,
      );*/


        // Version qui fonctionne
      /*document.addEventListener(
        "keydown",
        (event) => {
          const keyName = event.key;
      
          if (keyName === "q" || keyName ==="Q") {
            document.querySelector("#test").textContent = "premier clic q";
            window.location = "index.php";
          }
        },
        false,
      );/
    </script>
    ';*/

    echo '
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>
  <script type="text/javascript">
    var egg = new Egg();
    egg.addCode("up,up,down,down,left,right,left,right,b,a", function() {
      console.log("tout est ok");
    }, "konami-code");
    /*egg.addHook(function(){
      console.log("Hook called for: " + this.activeEgg.keys);
      console.log(this.activeEgg.metadata);
    });*/
    egg.listen();
  </script>
    <!-- /*var egg = new Egg();

    var instructions = "up,down,left,right";
    var easterEggName = "EasterEggTeam";

    var action = function () {
        console.log("Triggered");
        window.location = "index.php";
    };

    egg.addCode(instructions, action , easterEggName)
      .addHook(function () {
            console.log("Hook called for: " + this.activeEgg.keys);
            // Name of the easter egg
            console.log(this.activeEgg.metadata);
      }).listen();*/

      /*var egg = new Egg("up,down", function() {
        console.log("Easter Egg triggered");
    }).listen();*/
    </script> -->
    ';


    // On affiche un lien pour fermer notre session
    echo '<a href="./logout.php">Déconnexion</a>';
}
else
{
    echo 'Les variables ne sont pas déclarées.';
}
?>