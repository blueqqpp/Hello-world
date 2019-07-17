<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["username"]; ?><br>
    your password is <?php echo $_POST["pwd"]; ?><br>
    your email address is  <?php echo $_POST["email"]; ?><br>
    your sex is <?php echo $_POST["sex"]; ?><br>
    your job is <?php echo $_POST["job"]; ?><br>
    your age is <?php echo $_POST["age"]; ?><br>
    your hobby is  <?php
    $result="";
    // foreach($_POST["hobby"] as $i){
    //     $result.=$i;
    // }
    $result=implode(",",$_POST["hobby"]);
    echo $result;
    ?>

<?php
   $link = mysqli_connect('localhost','root','19971120wq','mydata');
    if (!$link) {
     die("Could not connect: ". mysql_connect_error());
 }
//  $sql = "CREATE DATABASE myDB";
//  if (mysqli_query($link, $sql)) {
//      echo "数据库创建成功";
//  } else {
//      echo "Error creating database: " . mysqli_error($link);
//  }

//   $sql="CREATE TABLE IF NOT EXISTS MyGuests(
//       name varchar(30) not null,
//       password varchar(30) noT null,
//       email varchar(50),
//       age int(5),
//       job varchar(15),
//       hobby varchar(50)
//   )";
//   if(mysqli_query($link,$sql)){
//       echo "数据表 MyGuest 成";
//   }else{
//       echo "创建数据表错误: " . mysqli_error($link);
//   }

//   $sql="INSERT INTO MyGuests(name,password,email,age,job,hobby)
//   VALUES('Join','123456','12365@exan.com','23','student','reading')";
//   if(mysqli_query($link,$sql)){
//       echo "新纪录插入成功";
//   }else{
//       echo "Error：" . $sql . "<br>" .mysqli_error($link);
//   }
  $name=$_POST['username'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $job=$_POST['job'];

  $sql="INSERT INTO MyGuests(name,password,email,age,job,hobby)
  VALUES('$name','$pwd','$email',$age,'$job','$result')";
  if(mysqli_query($link,$sql)){
      echo "新纪录插入成功";
  }else{
      echo "Error：" . $sql . "<br>" .mysqli_error($link);
  }
  
  mysqli_close($link);
   ?>



</body>
</html>