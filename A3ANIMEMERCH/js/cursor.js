let incursor = document.querySelector('.incursor');
let outercursor = document.querySelector('.outercursor');
document.addEventListener('mousemove', moveCursor);

function moveCursor(e){
    let x= e.clientX;
    let y= e.clienty;
 //   console.log(x,y);
 incursor.style.left = '${x}px';
 incursor.style.top = '${y}px';
 outercursor.style.left = '${x}px';
 outercursor.style.top = '${y}px';
}