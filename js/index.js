"use strict";

function socialIcon() {
    var screenWidth = screen.width;
    var screenHeight = screen.height;
    var twitter = document.getElementById('twitter');
    var linkedin = document.getElementById('linkedin');
    var github = document.getElementById('github');
    
    if (screenWidth <= 600){
        twitter.className += "-square";
        linkedin.className += "-square";
        github.className += "-square";
    }
}

socialIcon();


//word changer
var words = ['a web developer', 'a designer', 'an engineer', 'a husband', 'a dog father', 'a sports enthusiast', 'a gamer'];

function initializeWord(id) {
    var wordChanger = document.getElementById(id);
    function chooseWord() {
        //**chooses random array element**
//        var randWord = words[Math.floor(Math.random() * words.length)];
        var i = 1;
        wordChanger.innerHTML = words[0];
        function nextWord() {
            setTimeout(function() {
                wordChanger.innerHTML = words[i];
                i++;
                if(i < words.length+1){
                    nextWord();
                } else {
                    chooseWord();
                }
            }, 5000)
        }
    nextWord();
    }
    chooseWord(); 
    
}

initializeWord('changer');

//change background
var colors = ['#16a085', '#27ae60', '#f39c12', '#e74c3c', '#9b59b6', '#FB6964', "#BDBB99", "#77B1A9", "#73A857"];

function getColor() {
  
      var color = Math.floor(Math.random() * colors.length);
      $("html body").animate({
        backgroundColor: colors[color],
        color: colors[color]
      }, 1000);
      $(".button").animate({
        backgroundColor: colors[color]
      }, 1000);
      $(".mobileNav").animate({
        color: colors[color]
      }, 1000);
	  $("#submit").animate({
		borderColor: colors[color],
		backgroundColor: colors[color]
      }, 1000);
      $(".footer").animate({
		borderColor: colors[color],
		backgroundColor: colors[color]
      }, 1000);
};

$(document).ready(function() {
  getColor();
  
});