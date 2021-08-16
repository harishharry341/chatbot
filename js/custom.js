<script>
function clsText(){
    var x2 = document.getElementById("myDIV");
    var clsText = document.getElementsByClassName("mychat");
    clsText.innerHTML="tttttttttttttttttttttttttt";
   if (x2.style.display === "none") {
       x2.style.display = "block";
       clsText.innerHTML="tttttttttttttttttttttttttt";
   } else {
       x2.style.display = "none";
   }
  
}
function myFunction() {
    var x = document.getElementById("myDIV");
    var clsText = document.getElementsByClassName("mychat");
    if (x.style.display === "none") {
        x.style.display = "block";
        clsText.innerHTML
    } else {
        x.style.display = "none";
    }
}

function myFunction2() {
    var x = document.getElementById("div2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
