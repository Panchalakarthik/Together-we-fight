<html>
<div id="demo">
<input type="text" id="pin" onkeyup="loadXMLDoc()">

</div>

<select id="state" disabled></select>
<select id="district" disabled></select>
<select id="country" disabled></select>
<select id="poid"></select>


<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  var village="";
  var state="";
  var district="";
  var country="";
  var pincode=document.getElementById("pin").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var obj = JSON.parse(this.responseText);
        var count_text=obj[0]['Message'];
        var str = count_text;
        var pos = str.search(":");
        var res = str.substring(pos+1,str.length);
        var count=parseInt(res);
        var obj2=obj[0]['PostOffice'];

       
      for(i=0;i<count;i++)
      {
        village+="<option value="+obj2[i]['Name']+">"+obj2[i]['Name']+"</option>";
        country+="<option value="+obj2[i]['Country']+">"+obj2[i]['Country']+"</option>";
        district+="<option value="+obj2[i]['District']+">"+obj2[i]['District']+"</option>";
        state+="<option value="+obj2[i]['State']+">"+obj2[i]['State']+"</option>";


      }
      document.getElementById("poid").innerHTML=village;
      document.getElementById("state").innerHTML=state;
      document.getElementById("district").innerHTML=district;
      document.getElementById("country").innerHTML=country;
    }
  };
  xhttp.open("GET", "https://api.postalpincode.in/pincode/"+pincode+"", true);
  xhttp.send();
}
</script>

</html>