var i = 0;
var j = 1;
var speed = 50;
txts = ["benjamnsmith.", 'Ben.']

const container = document.getElementsByClassName('name')[0].children[0]

curTxt = txts[j]

function typeWriter() {
    if (i < curTxt.length ) {
        container.innerHTML = curTxt[0] +  curTxt.slice(1, i+1);
      i++;
      setTimeout(typeWriter, speed);
    } else {
        setTimeout(unTypeWrite, 1500)
    }
}

function unTypeWrite(){
    if (i >= 0){
        container.innerHTML = curTxt[0] + curTxt.slice(1, i);
        i--;
        setTimeout(unTypeWrite, speed);
    } else {
        j = (j + 1) % 2;
        curTxt = txts[j]
        setTimeout(typeWriter, 1500);
    }
}

typeWriter();