
$('#sub').on('click',function(){
    var g=$('input[type="text"]').val();  
  var id = $('#artists').find('option').filter(function() { return $.trim( $(this).text() ) === g; }).attr('id');
    if (id=="1d") {
      window.open("http://localhost/Webtech_Project/artists/four.php", "_self");}
  else if(id=="ts")
      {window.open("http://localhost/Webtech_Project/artists/taylor.php", "_self");} 
  else if(id=="mj"){
      window.open("http://localhost/Webtech_Project/artists/MJ.php", "_self");}
  else if(id=="imagine"){
      window.open("http://localhost/Webtech_Project/artists/imagine.php", "_self");}
    else if(id=="beatles"){
      window.open("http://localhost/Webtech_Project/artists/beatles.php", "_self");}
  else if(id=="lp"){
      window.open("http://localhost/Webtech_Project/artists/linkin.php", "_self");}  
  else if(id=="hs"){
      window.open("http://localhost/Webtech_Project/artists/harry.php", "_self");}
  else if(id=="wh"){
    window.open("http://localhost/Webtech_Project/artists/whit.php", "_self");}   
  else if(id=="ed")
      {window.open("http://localhost/Webtech_Project/artists/sheeran.php", "_self");}  
    else if(id=="cp"){
      window.open("http://localhost/Webtech_Project/artists/coldplay.php", "_self");}
  else if(id=="bb")
      {window.open("http://localhost/Webtech_Project/artists/breaking.php", "_self");}  
  else if(id=="ad")
      {window.open("http://localhost/Webtech_Project/artists/adele.php", "_self");}
  else if(id=="sg")
      {window.open("http://localhost/Webtech_Project/artists/selena.php", "_self");}
    else if(id=="em")
      {window.open("http://localhost/Webtech_Project/artists/eminem.php", "_self");}
  else if(id=="or")
      {window.open("http://localhost/Webtech_Project/artists/republic.php", "_self");}
    else if(id=="ss")
      {window.open("http://localhost/Webtech_Project/artists/smith.php", "_self");}
    else{
      window.open("http://localhost/Webtech_Project/artists/homepage.php","_self");}

});

  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("search");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}