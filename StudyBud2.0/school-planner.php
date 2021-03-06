<!DOCTYPE html>
<html>
    <head>
        <title>Assingments</title>
        <link href="css/assignments.css" rel="stylesheet" type="text/css">
    </head>
<body>
    
  <!-- Top Nav Bar -->
    <div class= "topnav"> 
        <a href="index.html">Home </a>
        <a href="schedule.php">Schedule</a>
        <a class="active" href="assignments.html">Assignments</a>   
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
        
</div>
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


    <div id="main">

        <button class="openbtn" onclick="openNav()">Dashboard </button> 
    </div>
    
<!-- School Planner Content -->
    <div class= "assignmentDisplay">
    <table>
        <tr>
            <th><h1>Course</h1></th>
            <th><h1>Assignment</h1></th>
            <th><h1>Due Date</h1></th>
            
        </tr>
        <tr>
            <td>
                <?php 
                echo $_POST["courseName"]; ?>
            </td>
            <td>
                <?php 
                echo $_POST["assignment"]; ?>
            </td>
            <td>
                <?php 
                echo $_POST["dueDate"]; ?>
            </td>
        </tr>
    
        
    </table>
    </div>
    <br>
<!-- Add New Assignment Form -->
<button class="open-button" onclick="openForm()">Add New Assignment</button>

    <div class="form-popup" id="myForm">
        <form action="school-planner.php" method="post" class="form-container">
            <h2  class="formTitle">New Homework Assingnment</h2>
            <label class="labels" for="courseName">Course Name</label><br>
                <input type="text" name="courseName" placeholder="Course Name..."><br>
            <label class="labels" for="dueDate">Due Date</label><br>
                <input type="text" name="dueDate" placeholder="Due Date..."><br>
            <label class="labels" for="assignment">Assignment Description</label><br>
                <textarea name="assignment" placeholder="Assignment..."></textarea><br>
            <button name="submit" type="submit" class="postBtn">Post</button>
            <button type="button" class="cancelBtn" onclick="closeForm()">Close</button>
        </form>
    </div>
    <br>
    

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    

    
<!-- script for Dashboard. -->
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

    </body>
</html>