 <?php 
session_start();

	if(empty($_POST['pass']))
{
	echo  "<script>
		      alert('password is empty');
			  location.href='signup.php'
			  </script>";
}
if(empty($_POST['ema']))
{
	echo  "<script>
		      alert('email is empty');
			  location.href='signup.php'
			  </script>";
}
if(empty($_POST['nam']))
{
	echo  "<script>
		      alert('name is empty');
			  location.href='signup.php'
			  </script>";
}

	
if(isset($_POST['sub']))
{
	 $lo = new login();
	 $lo->logi();
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
	
	 function logi()
	{
		
		$this->name=trim($_POST['nam']);
		$this->name=stripslashes($this->name);
	
	$this->email=stripslashes(trim($_POST['ema']));
	

	$this->password=md5(stripslashes(trim(($_POST['pass']))));
	
		$query="SELECT name,password FROM signup";
		$sel=mysqli_query($this->link,$query);
		  while($arr=mysqli_fetch_array($sel))
	   {
		if($this->name ==$arr['name'] && $this->password==$arr['password'])
		{
			$_SESSION['user']=$this->name;
			$i=1;
		header("location:hello.php");
		}
	   }
	   if($i!=1)
	   {
		   echo "<script>
		      alert('name or password is worng');
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