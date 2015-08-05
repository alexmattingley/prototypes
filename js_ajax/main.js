//Create GLOBAL variable below here on line 2
var global_result;
var movieName;
var firstMovie;
var firstMovieFirstImg;
var firstMovieThirdImg;
var fistMovieArtist;
var movieThirdImg;
var movieArtist;
var movieTitle;

$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result){
				console.log('loaded',result);
				global_result = result;
				firstMovie = global_result.feed.entry[0];
				firstMovieFirstImg = global_result.feed.entry[0]['im:image'][0].label;
				firstMovieThirdImg = global_result.feed.entry[0]['im:image'][2].label;
				fistMovieArtist = global_result.feed.entry[0]['im:artist'].label;
				console.log(fistMovieArtist);
				for(var i = 0; i < global_result.feed.entry.length; i++) {
					movieThirdImg = global_result.feed.entry[i]['im:image'][0].label;
					var movImg = $('<img>',{
						src: movieThirdImg
					});

					movieArtist = global_result.feed.entry[i]['im:artist'].label;
					var movArtist = $('<p>',{
						text: movieArtist
					});

					movieTitle = global_result.feed.entry[i]['im:name'].label;
					var movTitle = $('<h4>',{
						text: movieTitle
					});

					$('#main').append(movTitle);
					$('#main').append(movImg);
					$('#main').append(movArtist);
				}
			}
		});
	});
});

