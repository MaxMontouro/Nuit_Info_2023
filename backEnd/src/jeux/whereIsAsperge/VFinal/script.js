let timer;
let minutes = 5;
let seconds = 0;

function startTimer() {
  // Masque le bouton PLAY une fois qu'il est cliqué
  document.querySelector('.playButton').style.display = 'none';

  // Affiche le conteneur du minuteur
  document.getElementById('timerContainer').style.display = 'flex'; // Utilise 'flex' au lieu de 'block'

  timer = setInterval(updateTimer, 1000);
}

function updateTimer() {
  // Met à jour le minuteur
  const timerDisplay = document.getElementById('timer');
  timerDisplay.textContent = formatTime(minutes) + ':' + formatTime(seconds);
  console.log("Affiche l'image");
  document.getElementById('imageContainer').style.display = 'block';
  document.getElementById('customImage').src = 'charlie.jpg'; // Remplacez par le chemin complet de l'image

  // Vérifie si le minuteur a atteint 0
  if (minutes === 0 && seconds === 0) {
    clearInterval(timer);
    document.getElementById('timerContainer').style.display = 'none';
    window.location = "../../../../../frontEnd/pageEaster.html";
    
  } else {
    // Décrémente le temps
    if (seconds === 0) {
      minutes--;
      seconds = 59;
    } else {
      seconds--;
    }
  }
}

function formatTime(time) {
  return time < 10 ? '0' + time : time;
}
