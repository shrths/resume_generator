<?php
include('resume_connect.php');
    $Email=$_POST["email"];
    $Password=$_POST["password"];

    $fetch="SELECT * FROM login WHERE email= '".$Email."' ";
    $result1=$conn->query($fetch) or die($conn->error);
    if(mysqli_num_rows($result1)>0){
    $row1=$result1->fetch_assoc();
    $email=$row1["email"];
    $pass=$row1["password"];

    if($pass==$Password){
        header("Location:resume_form.html");
    }
    else{
        ?> 
        <script language="javascript">
        alert("wrong password");
        </script>
        <form action="resume_login.php" method="post" enctype="multipart/form-data">
            <div class="go"><a href="resume_login.html">go to login page</a></div>
       </form>
        <?php
    }
    }
    else{
        header("Location:resume_signup.html");
        exit();
    }



?>


