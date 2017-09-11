 <?php 



session_start();
	if(empty($_POST['password']))
{
	echo  "<script>
		      alert('password is empty');
			  location.href='signup.php'
			  </script>";
}
if(empty($_POST['email']))
{
	echo  "<script>
		      alert('email is empty');
			  location.href='signup.php'
			  </script>";
}
if(empty($_POST['name']))
{
	echo  "<script>
		      alert('name is empty');
			  location.href='signup.php'
			  </script>";
}

error_reporting(0);	
if(isset($_POST['regi']))
{
	 $lo = new login();
	 $lo->regi();
}

class login 
{
	var $link;
	var $name;
	var $email;
	var $password;
	var $database='login';
	function __construct()
	{
		
		$this->link=mysqli_connect("localhost","root","",$this->database) or die("Not connect");
		
	}
	
	 function regi()
	{
		
		$this->name=stripslashes(trim($_POST['name']));
	
	$this->email=stripslashes(trim($_POST['email']));
	

	$this->password=md5(stripslashes(trim(($_POST['password']))));
	
		$query="INSERT INTO SIGNUP VALUES('$this->name','$this->email','$this->password')";
		$sel=mysqli_query($this->link,$query);
		   if(!empty($sel))
		   {
			   echo "<script>
		      alert('sucessful register');
			  location.href='signup.php'
			  </script>";
		   }
		   else{
			    echo "<script>
		      alert('user already exist');
			  location.href='signup.php'
			  </script>";
		   }
		
	}
	function __destructor()
	{
		mysqli_close($this->link);
	}
	
}
?>