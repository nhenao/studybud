<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>My First Schedule</title>
	<link href="css/schedule.css" rel="stylesheet" />
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>	
</head>
<body>
    <!-- Top Nav Bar -->
     <div class= "topnav"> 
        <a href="index.html">Home </a>
        <a class = "active"  href="schedule.html">Schedule</a>
        <a href="assignments.html">Assignments</a>
    </div>
    
    <!-- Dashboard -->
    
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        
       <div id="myDIV" class="header">
  <h2 style="margin:5px">To Do List</h2>
  <input type="text" id="myInput" placeholder="Task...">
  <span onclick="newElement()" class="addBtn">Add Task</span>
</div>
<br>
<ul id="myUL">
 
</ul>
<!-- script for to do list -->
<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

    </div>

        <button class="openbtn" onclick="openNav()">Dashboard </button> 

<!-- SideBar Javascript -->
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "50%";
  document.getElementById("main").style.marginLeft = "50%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
    
    <!-- Trigger/Open The Modal Schedule-->
<button id="addSchedule">Add to Schedule</button>

<!-- The Modal Schedule -->
<div id="myModal" class="modal">
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <h1>Weekly Schedule</h1>
    
<form action="schedule.php" method="post" class="form-container">   
 <table cellspacing="" width="75%" border="3">
<tbody>    
        <tr>
        <td class="days">Monday</td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="monday"></textarea>
            </td>

        </tr>
            <tr>
            <td class="days">Tuesday</td>
                <td>
                <textarea id="textArea" rows= 4 cols= 100 type="text" name="tuesday"></textarea>
                </td>
                

        </tr>
        <tr>
        <td class="days">Wednesday </td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="wednesday"></textarea>
            </td>

        </tr>
        <tr>
        <td class="days">Thursday</td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="thursday"></textarea>
            </td>
        </tr>

        <tr>
        <td class="days">Friday</td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="friday"></textarea>
            </td>
        </tr>
        <tr>
        <td class="days">Saturday</td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="saturday"></textarea>
            </td>
        </tr>
        <tr>
        <td class="days">Sunday</td>
            <td>
            <textarea id="textArea" rows= 4 cols= 100 type="text" name="sunday"></textarea>
                
            </td>
        </tr>
</tbody>
     
    </table>
    <input class="saveBtn"  type="submit" value="Save">
    <span class="close">Close</span>
    
    </form>
    </div>
    
    <div class="section">
         <table class="schedule1">
             <tr>
                  <td class="col1">
                      <h2>Monday</h2></td>
                      <td>
                      <p><?php 
                        echo $_POST["monday"]; ?></p>
                    </td>
              
          </tr>
                 <tr>
                  <td class= "col2">
                      <h2>Tuesday</h2></td>
                      <td>
                     <p><?php 
                        echo $_POST["tuesday"]; ?></p>
                  </td>
             </tr>
                 <tr>
                  <td class= "col3">
                     <h2>Wednesday</h2>
                     </td>
                     <td>
                     <p><?php 
                        echo $_POST["wednesday"]; ?></p>
                  </td>
                  </tr>
                  
                  <tr>
        
                  <td class= "col4">
                      <h2>Thursday</h2></td>
                      <td>
                     <p><?php 
                        echo $_POST["thursday"]; ?></p>
                  </td>
             </tr>
                 <tr>
                  <td class= "col5">
                     <h2>Friday</h2>
                     </td>
                     <td>
                     <p><?php 
                        echo $_POST["friday"]; ?></p>
                  </td>
             </tr>
             <tr>
                   <td class= "col6">
                       <h2>Saturday</h2>
                       </td>
                       <td>
                     <p><?php 
                        echo $_POST["saturday"]; ?></p>
                  </td>
             </tr>
                  <tr>
                   <td class= "col7">
                       <h2>Sunday</h2></td>
                       <td>
                     <p><?php 
                        echo $_POST["sunday"]; ?></p>
                  </td> 
             </tr>
          </table>  
    </div>    
        


<script>
    // Get Modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("addSchedule");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>

    

</body>

</html>
