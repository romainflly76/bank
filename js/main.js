//******************** POPUP ***************************** */
// Appel element de la section id btnPopup
let btnPopup = document.getElementById('btnPopup');
let overlay = document.getElementById('overlay');
// Prend la totalité de la fenetre et charge directement la fonction openModal
window.addEventListener('load',openMoadl);
// affichage en styleCSS Block la div Overlay
function openMoadl() {
overlay.style.display='block';
}
// Appel du bouton pour fermer la PopUp
let btnClose = document.getElementById('btnClose');
btnClose.addEventListener('click',closeModal);
function closeModal() {
    overlay.style.display='none';
    }