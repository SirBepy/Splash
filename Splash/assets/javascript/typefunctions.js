function changeTo(n) {
    var slideList = document.getElementsByClassName("exchangeSlide");

    for (var x = 0; x < slideList.length; x++) {
        slideList[x].style.display = "none";
    }

    slideList[n - 1].style.display = "block";
}

function initAllSlides() {
    // Bug
    createSlide("Bug",
        ["Dark", "Grass", "Psychic"],
        ["Fighting", "Grass", "Ground"],
        ["Fighting", "Fire", "Flying", "Fairy", "Ghost", "Poison", "Steel"],
        ["Fire", "Flying", "Rock"]);
    // Dark
    createSlide("Dark",
        ["Ghost", "Psychic"],
        ["Dark", "Ghost", "Psychic"],
        ["Dark", "Fighting", "Fairy"],
        ["Bug", "Fighting", "Fairy"]);
    // Dragon
    createSlide("Dragon",
        ["Dragon"],
        ["Electric", "Fire", "Grass", "Water"],
        ["Steel", "Fairy"],
        ["Dragon", "Fairy", "Ice"]);
    // Electric
    createSlide("Electric",
        ["Flying", "Water"],
        ["Electric", "Flying", "Steel"],
        ["Dragon", "Electric", "Grass", "Ground"],
        ["Ground"]);
    // Fairy
    createSlide("Fairy",
        ["Dark", "Dragon", "Fighting"],
        ["Bug", "Dark", "Fighting", "Dragon"],
        ["Fire", "Poison", "Steel"],
        ["Poison", "Steel"]);
    // Fighting
    createSlide("Fighting",
        ["Dark", "Ice", "Normal", "Rock", "Steel"],
        ["Bug", "Dark", "Rock"],
        ["Bug", "Fairy", "Flying", "Poison", "Psychic", "Ghost"],
        ["Fairy", "Flying", "Psychic"]);
    // Fire
    createSlide("Fire",
        ["Bug", "Grass", "Ice", "Steel"],
        ["Bug", "Fire", "Fairy", "Grass", "Ice", "Steel"],
        ["Dragon", "Fire", "Rock", "Water"],
        ["Ground", "Rock", "Water"]);
    // Flying
    createSlide("Flying",
        ["Bug", "Fighting", "Grass"],
        ["Bug", "Fighting", "Grass", "Ground"],
        ["Electric", "Rock", "Steel"],
        ["Electric", "Ice", "Rock"]);
    // Ghost
    createSlide("Ghost",
        ["Ghost", "Psychic"],
        ["Bug", "Poison", "Fighting", "Normal"],
        ["Dark", "Normal"],
        ["Dark", "Ghost"]);
    // Grass
    createSlide("Grass",
        ["Ground", "Rock", "Water"],
        ["Electric", "Grass", "Ground", "Water"],
        ["Bug", "Dragon", "Fire", "Flying", "Grass", "Poison", "Steel"],
        ["Bug", "Fire", "Flying", "Ice", "Poison"]);
    // Ground
    createSlide("Ground",
        ["Electric", "Fire", "Poison", "Rock", "Steel"],
        ["Poison", "Rock", "Electric"],
        ["Bug", "Grass", "Flying"],
        ["Grass", "Ice", "Water"]);
    // Ice
    createSlide("Ice",
        ["Dragon", "Flying", "Grass", "Ground"],
        ["Ice"],
        ["Fire", "Ice", "Steel", "Water"],
        ["Fighting", "Fire", "Rock", "Steel"]);
    // Normal
    createSlide("Normal",
        ["Normal"],
        ["Ghost"],
        ["Rock", "Steel", "Ghost"],
        ["Fighting"]);
    // Poison
    createSlide("Poison",
        ["Grass", "Fairy"],
        ["Bug", "Fighting", "Fairy", "Grass", "Poison"],
        ["Ghost", "Ground", "Poison", "Rock", "Steel"],
        ["Ground", "Psychic"]);
    // Psychic
    createSlide("Psychic",
        ["Fighting", "Poison"],
        ["Fighting", "Psychic"],
        ["Psychic", "Steel", "Dark"],
        ["Bug", "Dark", "Ghost"]);
    // Rock
    createSlide("Rock",
        ["Bug", "Fire", "Flying", "Ice"],
        ["Fire", "Flying", "Normal", "Poison"],
        ["Fighting", "Ground", "Steel"],
        ["Fighting", "Grass", "Ground", "Steel", "Water"]);
    // Steel
    createSlide("Steel",
        ["Fairy", "Ice", "Rock"],
        ["Bug", "Dragon", "Flying", "Fairy", "Grass", "Ice", "Normal", "Psychic", "Rock", "Steel", "Poison"],
        ["Electric", "Fire", "Steel", "Water"],
        ["Fighting", "Fire", "Ground"]);
    // Water
    createSlide("Water",
        ["Fire", "Ground", "Rock"],
        ["Fire", "Ice", "Steel", "Water"],
        ["Dragon", "Grass", "Water"],
        ["Electric", "Grass"]);

    changeTo(1);
}

function createSlide(title, goodTypes1, goodTypes2, badTypes1, badTypes2) {
    document.getElementById("allSlides").innerHTML +=
        '<div class="exchangeSlide container bg-darkred">' +
        '<h1 class="center-content paddingtop-20px">' + title + '</h1>' +
        '<div class="row">' +
        addTypeIcons("Effective Against", "Double damage to", goodTypes1) +
        addTypeIcons("Resistant to", "Half damage from", goodTypes2) +
        '</div> <div class="row">' +
        addTypeIcons("Weak Against", "Half damage to", badTypes1) +
        addTypeIcons("Weak To", "Double damage from", badTypes2) +
        '</div> </div>';
}

function addTypeIcons(subtitle, explanation, list) {
    var newHtml =
    '<div class="col-md align_horizontally border-radius description bg-red center-content">' +
    '<h2>' + subtitle + '</h2> <br>' +
    '<p>' + explanation + '</p>';
    if(list.length > 4) {
        newHtml += '<div class="types-holder">';
    } else {
        newHtml += '<div class="types-holder margintop-3em">';
    }

    for (var x = 0; x < list.length; x++) {
        if(((list.length == 5 || list.length == 6 ) && x == 3) || (list.length >= 7 && x == 4)){
            newHtml += '</div> <div class="types-holder">'
        }
        var str = list[x];
        newHtml += '<div class="showdesc_on_hover">' +
            '<img src="../assets/images/types/' + str.toLowerCase() + '.svg" alt="' + str + '-type icon">' +
            '<div class="text center-content">' + str + '</div></div>'
    }
    newHtml += '</div> </div>';

    return newHtml;
}
