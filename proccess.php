<?php 
$website       = "www.SWAP-webgui.com";
$filename      = $_POST["filename"];
$comment       = trim($_POST["comment"]);
$comment       = explode("\n", $comment);
$comment       = array_filter($comment, 'trim');
$project_name  = $_POST["project_name"]; 
$project_path  = $_POST["project_path"]; 
$path_weather  = $_POST["path_weather"]; 
$path_crop     = $_POST["path_crop"]; 
$path_drainage = $_POST["path_drainage"]; 
$path          = $_POST["path"]; 

if ($project_path  == "") $project_path  = "./";
if ($path_weather  == "") $path_weather  = "./";
if ($path_crop     == "") $path_crop     = "./";
if ($path_drainage == "") $path_drainage = "./";




echo "Choosen input filename: $filename.swp</br></br>";

$content  = "**********************************************************************************\n";
$content .= "* Filename: ". $filename.".swp\n";
$content .= "* Contents: Main input data\n";
$content .= "* File generated by SWAP-webgui available at: ".$website."\n";
$content .= "**********************************************************************************\n";
$content .= "* Coment area:\n";
foreach ($comment as $line) {
  $content .= "*              ".$line."\n";
}
$content .= "\n";
$content .= "*   The main input file .swp contains the following sections:\n";
$content .= "*           - General section\n";
$content .= "*           - Meteorology section\n";
$content .= "*           - Crop section\n";
$content .= "*           - Soil water section\n";
$content .= "*           - Lateral drainage section\n";
$content .= "*           - Bottom boundary section\n";
$content .= "*           - Heat flow section\n";
$content .= "*           - Solute transport section\n";
$content .= "\n";
$content .= "\n";
$content .= "*** GENERAL SECTION ***\n";
$content .= "\n";
$content .= "**********************************************************************************\n";
$content .= "* Part 1: Enviroment";
$content .= "  PROJECT   = '".$project_name."'\t\t! Project description, [A80]\n";
$content .= "  PATHWORK  = '".$project_path."'\t\t! Path to work folder, [A80]\n";
$content .= "  PATHATM   = '".$path_weather."'\t\t! Path to folder with weather files, [A80]\n";
$content .= "  PATHCROP  = '".$path_crop."'\t\t! Path to folder with crop files, [A80]\n";
$content .= "  PATHDRAIN = '".$path_drainage."'\t\t! Path to folder with drainage files, [A80]\n";
$content .= "  SWSCRE    = 1                  ! Switch, display progression of simulation run:\n";
$content .= "                             !   SWSCRE = 0:  no display to screen\n";
$content .= "                             !   SWSCRE = 1:  display water balance to screen\n";
$content .= "                             !   SWSCRE = 2:  display daynumber to screen\n";
$content .= "  SWERROR   = 1              ! Switch for printing errors to screen [Y=1, N=0]\n";
$content .= "**********************************************************************************\n";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";
$content .= "";




echo "Input file content:</br>";
echo "<PRE>$content</PRE>";
?>

