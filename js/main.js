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
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
var span4 = document.getElementsByClassName("close")[3];
var span5 = document.getElementsByClassName("close")[4];
var span6 = document.getElementsByClassName("close")[5];


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
    modal1.style.display = "none";
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