/* ce script sert � d�rouler le sous-menu sur lequel on a cliqu� */

$(document).ready(function() {
	$('.jeu').hide();
	$('.menu_gauche_jeux > span').click(function(){
			$(this).next('.jeu').slideToggle('slow');
	}); 
});

/* ce script sert � d�rouler le sous-menu de la navigation sur lequel on a cliqu� */

$(document).ready(function() {
	$('.sous_navigation').hide();
	$('.navigation > a').click(function(){
			$(this).next('.sous_navigation').slideToggle(400);
	});
});