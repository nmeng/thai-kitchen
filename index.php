<?php get_header(); ?>

<script>
var bgnum = Math.floor((Math.random()*4)+0);

function rotatebg(){
	$(".bg" + bgnum).fadeOut(500);
	if(bgnum == 4){
		bgnum = 0; //reset
	}else{
		bgnum++;
	}
	$(".bg" + bgnum).fadeIn(500);
}

$(document).ready(function(){

	setInterval("rotatebg()", 5000);
	$(".bg"+bgnum).fadeIn(0);
	main();
});

</script>

 
<?php get_footer(); ?>