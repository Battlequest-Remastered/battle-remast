<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BattleQuest - Rebattled</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/battlequest.css">
</head>
<body>
@yield('content')

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">
	function jqUpdateSize(){
	    // Get the dimensions of the viewport
	    var width = $(window).width();
	    var height = $(window).height();

	    console.log(width);
	    if(width <= 770 && width > 500) {
	    	$(".commandline").addClass("mobile");
	    	$(".commandline").removeClass("supersmall");
	    	$(".commandline").removeClass("reallysupersmall");
	    } else if(width <= 500 && width > 410) {
	    	$(".commandline").removeClass("mobile");
	    	$(".commandline").addClass("supersmall");
	    	$(".commandline").removeClass("reallysupersmall");
	    } else if(width <= 410) {
	    	$(".commandline").addClass("reallysupersmall");
	   		$(".commandline").removeClass("mobile");
	    	$(".commandline").removeClass("supersmall");
		} else {
	    	$(".commandline").removeClass("mobile");
	    	$(".commandline").removeClass("supersmall");
	    	$(".commandline").removeClass("reallysupersmall");
	    }
	};
	$(document).ready(jqUpdateSize);
	    // When the page first loads
	$(window).resize(jqUpdateSize); 
</script>
</body>
</html>