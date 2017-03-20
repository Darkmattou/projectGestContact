

// code pour le slide dans la vue de la page visiteur pour l'inscription permettant de faire défiler différent formulaire 

<<<<<<< HEAD
=======
var compteur = 0; 
var nbContent = $('.slider ul li').length;
var largeurUl = nbContent * 1170; 
$('.slider ul').css('width',largeurUl);
compteurtotal = -(largeurUl - 1170);


$('.suivant').click(function(){  
  
  //compteur met à jour le margin left à appliquer
  compteur = compteur - 1170; 
  
  //applique la règle du margin avec la variable compteur. 
  $('.slider ul').css('margin-left',compteur+'px');
  
});

$('.precedent').click(function(){

    // ajoute des pixels pour faire revenir en arrière le slide
    compteur = compteur + 1170; 
  
  $('.slider ul').css('margin-left',compteur+'px');
});
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
var compteur = 0; 
var nbContent = $('.slider ul li').length;
var largeurUl = nbContent * 1170; 
$('.slider ul').css('width',largeurUl);
compteurtotal = -(largeurUl - 1170);


<<<<<<< HEAD
$('.suivant').click(function(){  
=======
$('.suivant1').click(function(event){
  

  // evite que le a href se déclenche. 
  event.preventDefault();
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
  
  //compteur met à jour le margin left à appliquer
  compteur = compteur - 1170; 
  
  //applique la règle du margin avec la variable compteur. 
  $('.slider ul').css('margin-left',compteur+'px');
  
});
<<<<<<< HEAD

$('.precedent').click(function(){

    // ajoute des pixels pour faire revenir en arrière le slide
=======
$('.precedent1').click(function(event){
  
    event.preventDefault();
  
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
    compteur = compteur + 1170; 
  
  $('.slider ul').css('margin-left',compteur+'px');
});
var compteur = 0; 
var nbContent = $('.slider ul li').length;
var largeurUl = nbContent * 1170; 
$('.slider ul').css('width',largeurUl);
compteurtotal = -(largeurUl - 1170);