var ptypes = document.getElementById("division").getElementsByTagName("p");
var count = ptypes.length;
var img = document.createElement("img");
img.src = "image.jfif";
var gif = document.createElement("img");
gif.src = "chat.gif";

function typeEffect(element, speed) {
	var text = element.innerHTML;
	element.innerHTML = "";
	
	var i = 0;
	var timer = setInterval(function() {
    if (i < text.length) {
      if (text.charAt(i) == "/") {
        element.append(document.createElement('br'));
      } else if (text.charAt(i) == "#") {
        element.append(img);
      } else if (text.charAt(i) == "$") {
        element.append(gif);
      } else {
        element.append(text.charAt(i));
      }      
      i++;
    } else {
      clearInterval(timer);
    }
  }, speed);
}


// application
var speed = 10;
var h1 = document.querySelector('h1');
var p = document.querySelector('p');
var delay = h1.innerHTML.length * speed + speed;

// type affect to header
typeEffect(h1, speed);

// type affect to body
setTimeout(function(){
  p.style.display = "inline-block";
  typeEffect(p, speed);
}, delay);



