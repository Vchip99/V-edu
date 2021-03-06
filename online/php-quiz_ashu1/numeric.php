<html>
<head>
<title>On Screen Number Pad Using JavaScript</title>
<script type="text/javascript">
function number_write(x)
{
  var text_box = document.getElementById("number");
  if((x>=0 && x<=9))
  {
    if(isNaN(text_box.value))
  text_box.value = 0;

 text_box.value  =(text_box.value * 10)+x;
  }
}
function number_clear()
{
  document.getElementById("number").value = 0;
}
function Dot()                  //PUT IN "." if appropriate.
 {
  if ( Current.length == 0)     //no leading ".", use "0."
    { Current = "0.";
    } else
    {  if ( Current.indexOf(".") == -1)
         { Current = Current + ".";
    };   };
  document.Calculator.Display.value = Current;
 }
</script>
<style type="text/css">
.main_panel
{
width:185px;
height:345px;
background-color:#999999;
border-top-right-radius:20px;
border-top-left-radius:20px;
border-bottom-right-radius:20px;
border-bottom-left-radius:20px;
padding:20px;
}
.number_button
{
width:30px;
height:30px;
margin:7px;
float:left;
background-color:#FFFF99;
border-top-right-radius:7px;
border-top-left-radius:7px;
border-bottom-right-radius:7px;
border-bottom-left-radius:7px;
font-size:16px;
text-align:center;
padding:5px;
}
.number_button:hover
{
background-color:#66FF66;
}
.text_box
{
width:130px; 
height:25px;
font-size:18px;
text-align:center;
}
</style>
</head>


<body>
<div class="main_panel">
<br /> 
<center><input class="text_box" type="text" id="number" name="num" /></center>
<br /><br />

<div class="number_button" onclick="number_write(1);">1</div>
<div class="number_button" onclick="number_write(2);">2</div>
<div class="number_button" onclick="number_write(3);">3</div>
<div class="number_button" onclick="number_write(4);">4</div>
<div class="number_button" onclick="number_write(5);">5</div>
<div class="number_button" onclick="number_write(6);">6</div>
<div class="number_button" onclick="number_write(7);">7</div>
<div class="number_button" onclick="number_write(8);">8</div>
<div class="number_button" onclick="number_write(9);">9</div>
<div class="number_button" onclick="number_clear();">Clr</div>
<div class="number_button" onclick="number_write(0);">0</div>
<div class="number_button" onclick="Dot('.') ;">.</div>
</div>
</body>
</html>