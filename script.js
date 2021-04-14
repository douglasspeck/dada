function dada() {
    var words = new Array();
    words = document.getElementById('inputText').value.split(' ');
    document.getElementById('first').classList.add('hidden');
    document.getElementById('second').classList.remove('hidden');
    shuffle(words);
    for(let i=0; i<words.length; i++) {
        var newCell = stringToHTML('<div class="cell" ondrop="drop(event)"><span class="word" draggable="true" ondragstart="drag(event)">' + words[i] + '</span></div>');
        document.getElementById("words").append(newCell);
    }
}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
  
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
  }

  function stringToHTML(str) {

	var dom = document.createElement('div');
	dom.innerHTML = str;
	return dom;

};