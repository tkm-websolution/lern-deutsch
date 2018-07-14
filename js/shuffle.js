function shuffle(array) {
  var m = array.length, t, i;

  // While there remain elements to shuffle…
  while (m) {

    // Pick a remaining element…
    i = Math.floor(Math.random() * m--);

    // And swap it with the current element.
    t = array[m];
    array[m] = array[i];
    array[i] = t;
  }

  return array;
}
var imgBoxes = document.getElementsByClassName("imgBox");
var arr = Array.prototype.slice.call(imgBoxes);


document.getElementById('shuffler').addEventListener('click', function(el){
  var shufArr = shuffle(arr);
  Array.prototype.forEach.call(shufArr, function(el){
    el.parentNode.appendChild(el);
  });
});