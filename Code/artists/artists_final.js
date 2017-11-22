var g=0;
//audio1.onecanplaythrough=function(){}
audio1[parseInt(g)].onended=function(){
var d=document.getElementById("au");
d.src="play1.png";
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
}
function pause(){
audio1[g].pause();
var d=document.getElementById("au");
d.src="play1.png";
d.removeEventListener("click",pause,false);
d.addEventListener("click",play,false);
}

function play(){

audio1[g].play();
var d=document.getElementById("au");
d.src="pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
}

function replay()
{
audio1[g].load();
play();
}

function prev(){
for(var i=0;i<=9;i++)
{
audio1[parseInt(g)].pause();
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}
}
audio1[parseInt(g)-1].load();
audio1[parseInt(g)-1].play();
var d=document.getElementById("au");
d.src="pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
au[parseInt(g)].style="color:#006773;"
au[parseInt(g)-1].style="color:white;"
if(id==0){
var i=document.createElement("img");
i.src="musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)-1].appendChild(i);
id=1;
}
g=parseInt(g)-1;
}

function next(){
for(var i=0;i<=9;i++)
{
audio1[parseInt(g)].pause();
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}
}
audio1[parseInt(g)+1].load();
audio1[parseInt(g)+1].play();
var d=document.getElementById("au");
d.src="pause1.png";
d.removeEventListener("click",play,false);
d.addEventListener("click",pause,false);
au[parseInt(g)].style="color:#006773;"
au[parseInt(g)+1].style="color:white;"
if(id==0){
var i=document.createElement("img");
i.src="musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)+1].appendChild(i);
id=1;
}
g=parseInt(g)+1;
}

function vol()
{
var d=document.getElementById("au5");
if(count1==0)
{
d.src="speaker2.png";
audio1[g].volume=0.5;
count1=1;
}
else if(count1==1)
{
d.src="speaker1.png";
audio1[g].volume=0.0;
count1=2;
}
else if(count1==2)
{
audio1[g].volume=1.0;
d.src="speaker3.png";
count1=0;
}
}


function playsong(e)
{
for(var i=0;i<=9;i++)
{
audio1[parseInt(g)].pause();
au[parseInt(g)].style="color:#006773;"
if(id==1)
{
au[parseInt(g)].removeChild(au[parseInt(g)].lastChild);
id=0;
}

}
var img=document.getElementById("img");
img.style.background="linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('"+bg+".jpg') no-repeat center";

img.innerHTML="<input class='aud' id='au2' type='image' src='music1.png' onclick='lyric()' height='50px' width='50px' style='float:center;outline:none;'><input class='aud' id='au3' type='image' src='prev.png' height='75px' width='75px' onclick='prev()' style='float:center;outline:none;'><input class='aud' id='au' type='image' src='pause1.png' height='130px' width='130px' onclick='pause()' style='float:center;outline:none;'><input class='aud' id='au4' type='image' src='next1.png' height='75px' width='75px' onclick='next()' style='float:center;outline:none;'><input class='aud' id='au1' type='image' src='replay.png' height='50px' width='50px' onclick='replay()' style='float:center;outline:none;'><br/><input class='aud' id='au5' type='image' src='speaker3.png' height='45px' width='45px' onclick='vol()' style='float:center;outline:none;margin-top:120px;'>";
var d=e.target;
g=d.id;
audio1[parseInt(g)].load();
audio1[parseInt(g)].play();
au[parseInt(g)].style="color:white;"
if(id==0){
var i=document.createElement("img");
i.src="musical.png";
i.style="height:30px;width:30px;padding-left:10px;"
au[parseInt(g)].appendChild(i);
id=1;
}
}
for(var i=0;i<10;i++)
{
au[i].addEventListener("click",playsong,false);
}

  // Get the modal
var modall = document.getElementById('myModall');

// Ge

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closel")[0];

// When the user clicks the button, open the modal 
function lyric() {
    modall.style.display = "block";
	
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modall.style.display = "none";
}