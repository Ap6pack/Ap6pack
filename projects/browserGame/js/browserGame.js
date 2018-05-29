var canvasSupported = Modernizr.canvas;

var element = document.getElementById("game");

var element = jQuery("#game").get(0);

var element = $("#game").get(0);

var top = $("#game").css("top");
var width = $("#game").width();
var divs = $("div");

var BubbleShoot = window.BubbleShoot || {};
BubbleShoot.Game = (function ($) {
    var Game = function () {};
    return Game;
})(jQuery);