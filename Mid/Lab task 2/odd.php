<!DOCTYPE html>
<html>
<head>
<title>Student Registration & Courses</title>
</head>
<body>
<h2>Student Registration</h2>
<table>
    <tr>
    <td>Full Name</td>
    <td><input type="text" id="name"></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" id="email"></td>
    </tr>
    <tr>
    <td>Password</td>
     <td><input type="password" id="pass"></td>
    </tr>
    <tr>
    <td>Confirm Password</td>
    <td><input type="password" id="confirmPass"></td>
    </tr>
    <tr>
    <td></td>
     <td><button onclick="registerStudent()">Register</button></td>
    </tr>
</table>
<br>
<div id="result"></div>
<hr>
<h2>Course Selection</h2>
<table>
    <tr>
     <td>Course Name</td>
     <td><input type="text" id="courseInput"></td>
    </tr>
    <tr>
     <td></td>
    <td><button onclick="addCourse()">Add Course</button></td>
    </tr>
</table>
<div id="courseList"></div>
<script>
function registerStudent() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const pass = document.getElementById("pass").value;
    const confirmPass = document.getElementById("confirmPass").value;
    if (name === "" || email === "" || pass === "" || confirmPass === "") {
        alert("All fields are required!");
        return;
    }
    if (email.indexOf("@") === -1) {
        alert("Email must contain '@'");
        return;
    }
    if (pass !== confirmPass) {
        alert("Passwords do not match!");
        return;
    }
    document.getElementById("result").innerHTML =
        "<h3>Registration Successful!</h3>" +
        "<p>Name: " + name + "</p>" +
        "<p>Email: " + email + "</p>";
}
function addCourse() {
    const courseName = document.getElementById("courseInput").value;

    if (courseName === "") {
        alert("Please enter a course name!");
        return;
    }
    const list = document.getElementById("courseList");
    const div = document.createElement("div");
    div.innerHTML = courseName +
        " <button onclick='this.parentNode.remove()'>Delete</button>";
    list.appendChild(div);
    document.getElementById("courseInput").value = "";
}
</script>
</body>
</html>
