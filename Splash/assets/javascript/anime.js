var counter = 0;
var image = new Image();

function loader(){
    image.src = '../assets/images/games_anime/1st_film.jpg';
}

function loading(){
    

    if(counter==0){
    document.getElementById('placeholder').src = '../assets/images/games_anime/1st_film.jpg';
    }
    else
    {
        return;
    }
    
    counter++;
}