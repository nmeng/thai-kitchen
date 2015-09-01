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

function main(){
	$(".menu-link").on("click", function(){
		$("#menu-expanded").toggle();
	});

	$("#content").fadeIn(500);
	$("#content-formatted").fadeIn(500);

	var url = window.location.pathname;
	if(url.indexOf("menu") <= 0){
		$("#menu-expanded a").each(function() {
			var _href = $(this).attr("href");
			$(this).attr("href",'menu/' + _href);
		});
	}

 }