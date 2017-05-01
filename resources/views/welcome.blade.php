<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- <ul>
      @foreach ($train_tables as $train_tables)
        <li> {{ $train_tables->city }} </li>
        <li> {{ $train_tables->distance }} </li>
      @endforeach
    </ul> -->

    <!-- <h2> Hello,  </h2> -->



    <h1> Select a city </h1>
    <select class="seCi" name="SelectCity" id="seCity" onchange="selectCity();" >
      <option> Hat Yai </option>
      <option> Chumphon </option>
      <option> Ayutthaya </option>
      <option> Chiangmai </option>
      <option> Buri Ram </option>
      <option> Si Sa Ket </option>
      <option> Uttaradit </option>
     </select>

     <p class="c" id="ct">The City is : </p>
     <span id="city" style="font-style: italic;"></span>



     <br><br>
     Select a Time: <input type="time" id="myTime">
    <button onclick="selectTime()"> ok </button>

    <p id="showTime">Your Time: </p><br>
    <p id="showTimeArr">Your will arrive at: </p>



     <br><br>
     <button class="button1" onclick="calulateTime()"> Submit </button>
     <!-- <button class="button2" onclick="cancel()"> Cancel </button> -->


<script>

function selectCity() {
	  var c = document.getElementById("seCity").value;
    document.getElementById("city").innerHTML = c;
}

function selectTime() {
    var time = document.getElementById("myTime").value;
    var t = time.split(":");
    var hour = t[0];
    var minute = t[1];
    // document.getElementById("showTime").innerHTML= "Your Time: "+
    // document.getElementById("myTime").value ;
    document.getElementById("showTime").innerHTML= "Hour: "+hour + "  Min: " +minute;
}
function calulateTime(){
  var time2 = document.getElementById("myTime").value;
  var t2 = time2.split(":");
  var hour2 = t2[0];
  var ct = document.getElementById("seCity").value;
  var citys = ["Hat Yai", "Chumphon", "Ayutthaya", "Chiangmai","Buri Ram","Si Sa Ket",
  "Uttaradit"];
  var distances = ["945", "470","70","750","375","515","485"];
  for (i = 0, len = citys.length, text = ""; i < len; i++) {
    text += citys[i];
    if (text == ct ){
      var d = distances[i];
      var t = d/80;
      var finishTime = t+hour2;
      // document.getElementById("showTimeArr").innerHTML= "Your will arrive at: "+finishTime;
      document.getElementById("showTimeArr").innerHTML= "primmm";
    }
  }
}

</script>


  </body>
</html>
