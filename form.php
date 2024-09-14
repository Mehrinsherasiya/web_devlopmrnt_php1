<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js">
 
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form Tutorial</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="" href="dashboard.php">
 
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="highlight.js"></script>
 
</head>
 
<body>
 
 <div id="page-wrap">
  <form id="myform" method="post" action="dashboard.php">
   <div>
   <div class="field">
    <label for="abtme" >About Me:</label>
    <input class="inputfield textfield" name="abtme" type="text" /><br><br>
   </div>
   <div class="field">
    <label for="skillset" >My SkillSet:</label>
    <input class="inputfield textfield" name="skillset" type="text" /><br><br>
   </div>
   <div class="field">
    <label for="assign" >Assignments:</label>
    <input class="inputfield textfield" name="assign" type="text" /><br><br>
	
	 <label for="t1" >Task 1:</label>
    <input class="inputfield textfield" name="t1" type="text" /><br><br>
	
	 <label for="t2" >Task 2:</label>
    <input class="inputfield textfield" name="t2" type="text" /><br><br>
	
	 <label for="t3" >Task 3:</label>
    <input class="inputfield textfield" name="t3" type="text" /><br><br>
	
	 <label for="t4" >Task 4:</label>
    <input class="inputfield textfield" name="t4" type="text" /><br><br>
	
	 <label for="t5" >Task 5:</label>
    <input class="inputfield textfield" name="t5" type="text" /><br><br>
	
	 <label for="mpm" >Minor Project Module:</label>
    <input class="inputfield textfield" name="mpm" type="text" /><br><br>
	
	 <label for="dm" >Database Module:</label>
    <input class="inputfield textfield" name="dm" type="text" /><br><br>
   </div>
   <div class="field area">
    <label for="details" >My Project Details:</label>
    <textarea class="inputfield textarea1" name="details" ></textarea><br><br>
   </div>
   </div>
   <!--div class="clear"></div-->
   <input class="submitbutton" type="submit" value="Submit" /><br><br>
 
  </form>
 </div>
 
</body>
 
</html>