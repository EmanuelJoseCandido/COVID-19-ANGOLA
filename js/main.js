/* Modal */
// Get the modal
var modal1 = document.getElementsByClassName("modal-covid-19")[0];
var modal2 = document.getElementsByClassName("modal-covid-19")[1];
var modal3 = document.getElementsByClassName("modal-covid-19")[2];
var modal4 = document.getElementsByClassName("modal-covid-19")[3];
var modal5 = document.getElementsByClassName("modal-covid-19")[4];
var modal6 = document.getElementsByClassName("modal-covid-19")[5];


// Get the button that opens the modal
var item1 = document.getElementsByClassName("item-covid-19")[0];
var item2 = document.getElementsByClassName("item-covid-19")[1];
var item3 = document.getElementsByClassName("item-covid-19")[2];
var item4 = document.getElementsByClassName("item-covid-19")[3];
var item5 = document.getElementsByClassName("item-covid-19")[4];
var item6 = document.getElementsByClassName("item-covid-19")[5];


// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[1];
var span2 = document.getElementsByClassName("close")[2];
var span3 = document.getElementsByClassName("close")[3];
var span4 = document.getElementsByClassName("close")[4];
var span5 = document.getElementsByClassName("close")[5];
var span6 = document.getElementsByClassName("close")[6];


// When the user clicks the button, open the modal 
item1.onclick = function() {
    modal1.style.display = "block";
}

item2.onclick = function() {
    modal2.style.display = "block";
}

item3.onclick = function() {
    modal3.style.display = "block";
}

item4.onclick = function() {
    modal4.style.display = "block";
}

item5.onclick = function() {
    modal5.style.display = "block";
}

item6.onclick = function() {
    modal6.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
   modal1.style.display = 'none';
}

span2.onclick = function() {
    modal2.style.display = "none";
}

span3.onclick = function() {
    modal3.style.display = "none";
}

span4.onclick = function() {
    modal4.style.display = "none";
}

span5.onclick = function() {
    modal5.style.display = "none";
}

span6.onclick = function() {
    modal6.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 ||event.target == modal3 ||event.target == modal4 
        ||event.target == modal5 || event.target == modal6) {
        modal1.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
    }
}
/* Modal */



/* Header:nav-links */
const open = document.querySelector('.menu-icons.open');
const close = document.querySelector('.menu-icons.close');
const navLinks = document.querySelector('.nav-links');

open.addEventListener('click', () => {
    navLinks.classList.toggle("open");
}); 

close.addEventListener('click', () => {
    navLinks.classList.remove("open");
}); 
/* Header:nav-links */

/* Go to top */
jQuery(document).ready(function(){
jQuery("#uptop").hide();

jQuery('a#uptop').click(function () {
        jQuery('body,html').animate({
        scrollTop: 0
        }, 800);
        return false;
});

jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 400) {
            jQuery('#uptop').fadeIn();
        } else {
            jQuery('#uptop').fadeOut();
        }
    });
});
/* Go to top */


/* Links */
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html,body').animate({
            scrollTop: target.offset().top
            }, 1000);
            return false;
        }
        }
    });
});
/* Links */