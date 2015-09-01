var bgunhide = Math.floor((Math.random()*4)+0);
$("body").addClass("bgproperties bg"+bgunhide);

$(window).scroll(function () {
	if($( window ).width() > 731){
		var addresspos = $("#address").position().top;
		if ($(window).scrollTop() > addresspos) {
			$("nav").css({"position":"fixed", "top":"60px"});
		} else {
			$("nav").css({"position":"absolute", "top":""});
		}
	}
});

