var compteur = 0; 
var nbContent = $('.slider ul li').length;
var largeurUl = nbContent * 1170; 
$('.slider ul').css('width',largeurUl);
compteurtotal = -(largeurUl - 1170);


$('.suivant').click(function(event){
  

  // evite que le a href se déclenche. 
  event.preventDefault();
  
  //compteur met à jour le margin left à appliquer
  compteur = compteur - 1170; 
  
  //applique la règle du margin avec la variable compteur. 
  $('.slider ul').css('margin-left',compteur+'px');
  
});

$('.precedent').click(function(event){
  
    event.preventDefault();
  
    compteur = compteur + 1170; 
  
  $('.slider ul').css('margin-left',compteur+'px');
});