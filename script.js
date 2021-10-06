function toggleMenu () {  
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', (e) => {    
    navbar.classList.toggle('show-nav');
  });    
};
toggleMenu();


var today = new Date();
var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' à '+time;



window.onload = function(){
  document.getElementById('button').onclick = function(e){
      alert ("Bonjour " + (document.getElementById("name").value) + ", votre message: \"" + document.getElementById("message").value + "\" a bien été envoyé le " + dateTime);
      return false;
  }
}


// function controle () {
//   var saisie = document.getElementById("naame");
//   alert ("ouui : ");
// };

// let message = "Essayez toujours ! Personne ne vous répondra 😜 ..."
// let button = document.getElementById("button");
// button.addEventListener("click", function (event) {
//   event.preventDefault();
//   alert(message); 
// });