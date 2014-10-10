/* ce script sert à dérouler le sous-menu sur lequel on a cliqué */

$(document).ready(function() {
	$('.jeu').hide();
	$('.menu_gauche_jeux > span').click(function(){
			$(this).next('.jeu').slideToggle('slow');
	}); 
});

/* ce script sert à dérouler le sous-menu de la navigation sur lequel on a cliqué */

$(document).ready(function() {
	$('.sous_navigation').hide();
	$('.navigation > a').click(function(){
			$(this).next('.sous_navigation').slideToggle(400);
	});
});