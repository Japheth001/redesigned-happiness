<?php
include("connection.php");
include("navbar.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
</head>

<style type="text/css">
	* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

</style>




<body>
<form id="regForm" action="" method="post">
  <h1>Register Subjects:</h1>
  <!-- One "tab" for each step in the form: -->
  
   <div class="tab">Student Info:
   <br><br>
   <p><input placeholder="Admission Number..." oninput="this.className = ''" name="adm"></p>
   
   <div>
   
   	
   	<select class="form-control" name="class" size="1"  >
   		<option value="">Select Class</option>
   		<option value="1">Form 1</option>
   		<option value="1">Form 2</option>
   		<option value="1">Form 3</option>
   		<option value="1">Form 4</option>
   	</select>
   </div>
   <br>
   
   <div>
   	<select class="form-control"  name="year" size="1" >
   			<option value="">Select Year</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
			<option value="2032">2032</option>
			<option value="2033">2033</option>
			<option value="2034">2034</option>
			<option value="2035">2035</option>
			<option value="2036">2036</option>
			<option value="2037">2037</option>
			<option value="2038">2038</option>
			<option value="2039">2039</option>
			<option value="2040">2040</option>
			<option value="2041">2041</option>
			<option value="2042">2042</option>
		</select><br>
		
   </div>
    
  </div>
   
  <div class="tab">GROUP 1:
  	
    <p><label>Maths</label> <input type="checkbox" oninput="this.className = ''" name="maths"></p>
    <p> <label>English</label><input type="checkbox" oninput="this.className = ''" name="eng"></p>
    <p> <label>Kiswahili</label><input type="checkbox"  oninput="this.className = ''" name="kis"></p>
  </div>
  
  
  
  <div class="tab">GROUP 2:
  <br><br>
   <p><label>Physics</label> <input type="checkbox"  oninput="this.className = ''" name="phy"></p>
    <p> <label>Chemistry</label><input type="checkbox"  oninput="this.className = ''" name="chem"></p>
    <p> <label>Biology</label><input type="checkbox"  oninput="this.className = ''" name="bio"></p>
  </div>
  
  
  <div class="tab">GROUP 3:
   <br><br>
    <p><label>Agriculture</label> <input type="checkbox"  oninput="this.className = ''" name="agri"></p>
    <p> <label>Business Studies</label><input type="checkbox"  oninput="this.className = ''" name="bus"></p>
    <p> <label>Computer Studies</label><input type="checkbox"  oninput="this.className = ''" name="comp"></p>
  </div>
  
  
  <div class="tab">GROUP 4:
   <br><br>
    <p><label>Geography</label> <input type="checkbox"  oninput="this.className = ''" name="agri"></p>
    <p> <label>History</label><input type="checkbox"  oninput="this.className = ''" name="bus"></p>
    <p> <label>Cre</label><input type="checkbox"  oninput="this.className = ''" name="comp"></p>
  </div>
  
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      
      
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>




<?php
if(isset($_POST['submit'])){
	$sql="INSERT INTO `exams`(`id`, `admission`, `class`, `year`, `maths`, `eng`, `kis`, `phy`, `chem`, `bio`, `agri`, `comp`, `bus`, `geo`, `hist`, `cre`) VALUES ('','$_POST[adm]','$_POST[class]','$_POST[year]','$_POST[math]','$_POST[eng]','$_POST[kis]','$_POST[phy]','$_POST[chem]','$_POST[bio]','$_POST[agri]','$_POST[comp]','$_POST[bus]','$_POST[geo]','$_POST[hist]','$_POST[cre]');";
}
?>

</body>
</html>