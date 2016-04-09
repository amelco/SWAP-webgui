<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
  function show() { document.getElementById('abs_path').style.display = 'block';   }
  function hide() { document.getElementById('abs_path').style.display = 'none';   }
</script>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>SWAP input file maker</h1>
<font color="red">*</font><font size="2">Indicates mandatory fields</font></br></br>

<form action="proccess.php" method="POST" enctype="application/x-www-form-urlencoded">
<div class="part">
<h3>Part 1: Enviroment</h3>
<div>
  <div class="label">Input filename<font color="red">*</font>:</div>
  <div class="textbox"><input type="text" name="filename"/></div>
  <div class="help">
  Dont use spaces or special characters like *,!,#,@,<,>...</br>
  Use underscore '_' instead of spaces. Ex. '1st_project'
  </div>
</div></br>

<div>
  <div class="label">Comments:</div>
  <div class="textbox"><textarea name="comment" cols="40" rows="5"></textarea></div>
  <div style="font-size: 70%; color: grey; margin-left: 560px">Be free to write anything.</br>All characters are permitted.</div>
</div></br></br></br></br></br>

<div>
  <div class="label">Project name<font color="red">*</font>:</div>
  <div class="textbox"><input type="text" name="project_name"/></div>
  <div class="help">.</div>
</div></br>

<div>
  <div class="label">Path to the project:</div>
  <div class="textbox"><input type="text" name="filename"/></div>
  <div class="help">Default: blank</div>
</div></br>
  <div>
  <div class="label">Path to the weather data:</div>
  <div class="textbox"><input type="text" name="filename"/></div>
  <div class="help">Default: data/weather/</div>
</div></br>
<div>
  <div class="label">Path to the crop data:</div>
  <div class="textbox"><input type="text" name="filename"/></div>
  <div class="help">Default: data/crop/</div>
  </div></br>
<div>
  <div class="label">Path to the drainage data:</div> 
  <div class="textbox"><input type="text" name="filename"/></div>
  <div class="help">Default: data/drainage/</div>
</div></br>

<div class="help">Empty paths indicates that files are in the same folder as the swp file</div></br></br>

<div>
  Show simulation run:</br>
  <input type="radio" name="sim_run" value="no"/> Do not show it
  <input type="radio" name="sim_run" value="wb" checked/> Display water balance
  <input type="radio" name="sim_run" value="dn"/> Display daynumber
</div>
</br>
</div>
  <input type="checkbox" name="errors" value="yes"/> Show errors on screen
</div></br>

</div>

<div class="part">
<h3>Part 2: Simulation period</h3>
</div>

</br></br><input type="submit"/>
</br>
</form>
</body>
</html>

