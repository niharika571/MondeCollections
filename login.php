<?php 
if(isset($_POST['submit'])){
$num=$_POST['userid'];
$pass=$_POST['pass'];

session_start();
$connection = mysqli_connect('localhost','root','','mydata');
$rs="SELECT UserID,Password FROM signup";

$data = mysqli_query($connection,$rs);
if(mysqli_num_rows($data)>0)
{
	while($row=mysqli_fetch_array($data))
	{
		if($row['UserID']==$num && $row['Password']==$pass)
		{
			 echo "Succesfully logged-in";
			 header("refresh:1; url=index.html");
			 break;
			// echo "<script>alert('successfully logged-in')</script>";
			// echo "<script>location.href='index.html'</script>";
		}
	// 	else{
	// 	echo "<script>alert('incorrect id or password')</script>";
	//  echo "<script>location.href='login.html'</script>";
	// 	// echo "Incorrect Password";
	// 	// header("refresh:1; url=login.html");
	 }
		}
	}
}
?>