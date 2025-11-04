if(!window.jQuery) {
   var script = document.createElement('script');
   script.type = "text/javascript";
   script.src = "https://online.wkosciolach.pl/js/jquery.min.js";
   document.getElementsByTagName('head')[0].appendChild(script);
}

jQuery(document).ready(function() {
	jQuery.get('https://online.wkosciolach.pl/webcam/mediaelementplayer.min.css',function(style) {
	    jQuery('#online-wkosciolach-pl').append('<style>'+style+'</style>');
	    jQuery.getScript('https://online.wkosciolach.pl/webcam/mediaelement-and-player.min.js', function() {
			var width=parseInt(jQuery('#online-wkosciolach-pl').width());
			var height=parseInt(width*432/720);
			jQuery('#online-wkosciolach-pl').append('<video id="player" poster="https://online.wkosciolach.pl/img/Parafia.Dys.jpg" src="https://online-06.wkosciolach.pl/app/Parafia.Dys.m3u8" width="'+width+'" height="'+height+'" preload="auto" controls="controls" />'+
								    '<script>var player = new MediaElement("player", { pluginPath: "https://online.wkosciolach.pl/webcam/" });</script>'+
								    '<h4>Msze święte:<br />- Niedziele: 7.00, 9.00, 10.30, 12.00, 16.00; w kaplicy w Elizówce: 11.45<br />- dni powszednie: 7.00, 18.00; w kaplicy w Elizówce: w I piątki i święta obowiązujące: 16.30 ( z wyjątkiem wakacji)</h4>');
	    });
	});
});