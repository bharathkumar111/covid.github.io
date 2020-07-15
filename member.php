<style>
.container{
    width:100%;
    margin: auto;
}
header nav{
    float: right;
    position: relative;
    top: 20px;
}
header ul {
    margin: 0px;
    padding: 0px;
    list-style: none;  
    }
    
header  ul li{
      float: left;
      width: 200px;
      height: 40px;
      background-color:blue;
      opacity:.8;
      line-height: 40px;
      text-align: center;
      font-size:20px;
      margin-left:2px;
      }
header ul li a{
        text-decoration: none;
        color: white;
        display: block;
        }
header ul li a:hover{
    background-color: green;
    }	
header ul li ul li{
    display: none;
    }
header ul li:hover ul li{
    display: block;
    }
    .body{
        background-color:green;
        position:absolute;
        font-size:20px;
        color:white;
        top:11em;
    }
</style>
<html>
<header>
        <div class="container">
            <img src='plan2.jpg' style='width:20em'>
            <nav>
                <ul>
                    <li class="active"><a href="home.html">Home</a></li>
                    <li><a href="History.html">History</a></li>
                    <li><a>Know more</a>
                        <ul>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="contactpage.html">CONTACTS</a></li>
                            <li><a href="zootimings.html">ZOO TIMINGS</a></li>
                            <li><a href="edu.html">EDUCATION</a></li>
                        </ul>
                    </li>    
                    <li><a href="contactpage.html">HELP</a></li>    
                </ul>
            </nav>
        </div>
        </header>
<body>
    <div class="body">
<p>Free or half-priced admission to 150 zoos and aquariums including Sylvan Heights Waterfowl Park and the North Carolina aquariums (see current list of partner zoos);</p>
<ul>
<li>Free subscription to Alive magazine;</li>
<li>Access to the Zoo Society's members-only picnic decks;</li>
<li>Invitations to members-only events and previews;</li>
<li>Discount on Society behind-the-scenes tours, veterinary camps and field research camps.</li>
</ul>
</div>
<div class="area">
        <div class="ver">
       
        <form action=""  method="POST">
            <div>
                <h1>Member Login form</h1>
            <input type="text" name="username" placeholder="Username"  required><br>
              
            <input type="password" name="password" placeholder="Password" required>
            </div>
            <br>
            <div>
               <a href="member1.php" style="color:white">click here to become a member</a>
             </div>
            <div>
            <input type="Submit" name="Submit" class="btn">
            </div>
            <br>
          </form>
        </div>
</div>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "kuriakose1998";
    $databasename = "newdatabase";

    $connection = new mysqli( $servername,$username,$password,$databasename);

    if(!$connection)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    session_start();
        $n=filter_input(INPUT_POST,'username');
        $p=filter_input(INPUT_POST,'password');
        if(isset($n))
        {
        $sql="select mobile from memb where name='$n'";
        $r=mysqli_query($connection,$sql);
        if($r)
           {
              while($row=mysqli_fetch_assoc($r))
              {
                  $mobile=$row['mobile'];  
                  echo "alert('$mobile')"; 
              }
            if(isset($mobile))
            { 
              if($p==$mobile){
              $_SESSION['var']=$n;
                  header('Location:memberdetails.php');
              }
              else
                 echo"<a style='position:absolute; bottom:-18em;left:30em;color:red;'>Username and password doesnt match</a>";
            }
            else
            {
                 echo"<a style='position:absolute; bottom:-18em;left:33em;color:red;'>Username doesnt exist</a>";
            }
        }
        else
        {
             echo"<a style='position:absolute; bottom:-18em;left:33em;color:red;'>Database error</a>";
        }
    }
?>
<style>
 body{
	margin:0;
	padding:0;
	background-color:rgb(240, 127, 255);
	color: white;
    height: 100vh;
    background-size: cover;
    background-position: center;
	font-family:sans-serif; 
}
.area{
    position:relative;
    top:32em;
}

.f a{
    background-color:whitesmoke;
position: absolute;
top:5em;
left:32%;
}
.ver div input{
    height: 3em;
    position: relative;
    width: 100%;
	margin-bottom: 15px;
    color:darkblue;
   
}
h1{
	margin: 2%;
	padding:2 2 20px;
	text-align: center;
	font-size: 22px;

}
.btn{
    position: absolute;
    color:whitesmoke;
    background-color: burlywood;
    top:2em;
    
}
.ver{
	width:320px;
	height:420px;
	background:rgba(0,0,0,0.5);
	color:whitesmoke;
	top: 54%;
	left: 50%;
	position: absolute;
	transform:translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 10%;
	padding: 60px 40px;
}</style>
</body>
<footer style="position: relative;bottom:-30em;">
                <a href="book1.html"><image src="ticket1.png" style="position: absolute; bottom:-37em; left:10%;"></a>
                    <a href="book1.php"> <image src="attractions.png" style="position: absolute; bottom:-37em; left:40%;"></a>
                        <a href="direct.html">  <image src="corner.png" style="position: absolute; bottom:-37em; left:70%;"></a>
            </footer>
</html>