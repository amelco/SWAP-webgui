<h1>SWAP input file maker</h1>
<font color="red">*</font><font size="2">Indicates mandatory fields</font></br></br>

<form action="proccess.php" method="POST" enctype="application/x-www-form-urlencoded">
Input filename<font color="red">*</font>: <input type="text" name="filename"/></br>
<font color="grey" size="2">
Dont use spaces or special characters like *,!,#,@,<,>...</br>
Use underscore '_' instead of spaces. Ex. '1st_project'
</font></br></br>

Comment:</br>
<textarea name="comment" cols="40" rows="5"></textarea></br></br>


Project name<font color="red">*</font>: <input type="text" name="project_name"/></br></br>

Paths are:</br>
<input type="radio" name="path" value="relative" checked/>relative</br>
<input type="radio" name="path" value="absolute"/>absolute</br>

Path to the project: <input type="text" name="filename"/><font color="grey" size="2">Default: blank</font></br>
Path to the weather data: <input type="text" name="filename"/><font color="grey" size="2">Default: data/weather/</font></br>
Path to the crop data: <input type="text" name="filename"/><font color="grey" size="2">Default: data/crop/</font></br>
Path to the drainage data: <input type="text" name="filename"/><font color="grey" size="2">Default: data/drainage/</font></br>
<font color="grey" size="2">Empty paths indicates that files are in the same folder as the swp file</font></br></br>

<input type="submit"/>
</br>
</form>
