var counter = 0;
var image1 = new Image();
var image2 = new Image();
var image3 = new Image();
var image4 = new Image();
var image5 = new Image();
var image6 = new Image();
var image7 = new Image();
var image8 = new Image();
loading();

function loader(){
    image1.src = '../assets/images/games_anime/Pokémon-Red-.jpg';
    image2.src = '../assets/images/games_anime/gold.jpg';
    image3.src = '../assets/images/games_anime/emerald.jpg';
    image4.src = '../assets/images/games_anime/diamond.jpg';
    image5.src = '../assets/images/games_anime/black.jpg';
    image6.src = '../assets/images/games_anime/x.jpg';
    image7.src = '../assets/images/games_anime/sun.jpg';
    image8.src = '../assets/images/games_anime/sword.jpg';
}

function loading(){
    if(counter == 0) {
        document.getElementById('red_placeholder').src = '../assets/images/games_anime/Pokémon-Red-.jpg';
        document.getElementById('gold_placeholder').src = '../assets/images/games_anime/gold.jpg';
        document.getElementById('emerald_placeholder').src = '../assets/images/games_anime/emerald.jpg';
        document.getElementById('diamond_placeholder').src = '../assets/images/games_anime/diamond.jpg';
        document.getElementById('black_placeholder').src = '../assets/images/games_anime/black.jpg';
        document.getElementById('x_placeholder').src = '../assets/images/games_anime/x.jpg';
        document.getElementById('sun_placeholder').src = '../assets/images/games_anime/sun.jpg';
        document.getElementById('sword_placeholder').src = '../assets/images/games_anime/sword.jpg';
    } else {
        return;
    }
    counter++;
}