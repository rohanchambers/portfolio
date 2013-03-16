$(document).ready( function(){

	var img = new Image()
	
	$(img).load( function(){
		console.log('test')
	}).attr('src', '/img/1.jpg');

});