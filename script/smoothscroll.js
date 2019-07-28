$("#nav ul li a[href='#']").on('click', function(e){
//Prevent default anchor click behaviour
e.preventDefault();
//store hash
var hash = this.hash;
//animate
$('html, body').animate({
	scrollTop: $(this.hash).offset().scrollTop}, 300, function(){
		//when done, add to url
		//(default click behaviour)
		window.location.hash = hash;
	});
});