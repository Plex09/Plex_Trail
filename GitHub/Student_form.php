<!DOCTYPE html>
<html>
<head>
    <style type='text/css'>
        body{
            background-color: #B2B5E0;
        }

h2 {
  text-decoration: underline;
  text-align: center;
}
label{
  font: italic bold 12px/30px Georgia, serif;
}

    input{
        width:100%;
        box-sizing: border-box;
        margin:20px 0px;
        padding: 5px;
    }
    form{
        width: 25%;
        background: #00ABE4;
        border-radius: 15px;
        padding:35px 30px;
        position: relative;
        top:70%;
        left:50%;
        transform:translate(-50%,3%);
    }
    input[type=submit] {
    background: #0A1828;
    border-color: white;
    border-style: dotted;
    border-radius: 15px;
    font-size:18px;
    color:white;
    font-weight: 900px;
}
 .input{
    width: 100%;
    box-sizing: border-box;
    margin:6px 0px;
    padding:5px;

}
    </style>
    <title>GitHub</title>
</head>
<body>
    <form method="POST" action="insert_student.php">
    <h2>ADD STUDENT</h2>
    <label>ID</label>
    <input type="text" name="id">
    <label>StudentName</label>
    <input type="text" name="student_name">
    <label>Age</label>
    <input type="text" name="age">
    <label>Sex</label><br>
    <select name="sex">
        <option value="Male">male</option>
        <option value="Female">female</option>
    </select>
    <input type="submit" value="Insert Student">



   </form> 
</body>
</html>