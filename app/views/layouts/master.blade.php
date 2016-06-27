<!DOCTYPE html>
<html>
<head>
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

	    if(width <= 480) {
	    	$(".commandline").addClass("mobile")
	    }
	};
	$(document).ready(jqUpdateSize);
	    // When the page first loads
	$(window).resize(jqUpdateSize); 
</script>
</body>
</html>