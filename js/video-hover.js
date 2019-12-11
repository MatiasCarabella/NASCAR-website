var $watkinsGlenFinalVideo = $('.watkinsGlenFinalVideo');
var $posterImage = $('.posterImage');

$posterImage.on('mouseenter focus', function(){
	$watkinsGlenFinalVideo.get(0).play();
}) 

$posterImage.on('mouseout blur', function(){
	setTimeout(function() {
		$watkinsGlenFinalVideo.get(0).currentTime = 0;
		$(posterImage).removeClass( 'opacidadPoster' );
	}, 500);
	$watkinsGlenFinalVideo.get(0).pause();
})

window.onload = function(){
	var video = document.getElementById('watkinsGlenFinalVideo');
	if(video){
    	video.addEventListener("timeupdate", cercaFinal,false);
	}
}

function cercaFinal(){
	if(this.currentTime > this.duration-0.4){
		$(posterImage).addClass( 'opacidadPoster' );
	}
}






