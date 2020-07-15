<style>
    head{
        background-repeat:no-repeat;
    }
    .container{
    width:90%;
    margin: auto;
}
header nav{
    float: right;
    position: relative;
    top: 0;
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
      background-color: red;
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

body{
    background-color:orange;
}
    .login{
        position:relative;
        top:2px;
    }
    .table{
        width:20em;
        height:30em;
        background-color:blue;
        position:absolute;
        left:50em;
        top:130px;
        transform:translate(-110%,-10%);
        border-radius: 15%;
     }
     .login input{
         height:20px;
         width:07sem;
         box-sizing:border-box;
         border-radius:10px;

     }
     #b{
         position:absolute;
         left:7em;
         height:3em;
         bottom:1em;
         width:11em;
     }
footer{
    position:absolute;
    bottom:-30em;
    left:33em;
}
    </style>
<html>

    <head>
    <header>
    <div class="container">
                    <nav>
                        <ul>
                            <li class="active"><a href="home.html">Home</a></li>
                            <li><a href="History.html">History</a></li>
                            <li><a>Know more</a>
                                <ul>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="contactpage.html">CONTACTS</a></li>
                                    <li><a href="zootimings.html">ZOO TIMINGS</a></li>
                                    <li><a href="edu.html">Education</a></li>
                                </ul>
                            </li>    
                            <li><a href="help.html">HELP</a></li>    
                        </ul>
                    </nav>
                </div>
    </header>
    <img src="zoo28.jpg">
        <title>railway reservation form </title>
    </head>
    
    <body>
        
    <form action="" method="post" class="login">
        <h1><marquee bgcolor="#0FBF00">Please fill the form to book your tickets in advance</marquee> </h1>
     <table class="table">
     <tr>
         <th>NAME:</th>
         <td><input type="text" name="name1" required/></td>
         </tr>
     <tr>
     <th>AGE:</th>
     <td><input type="text" name="name2" required/></td>
             </tr>
        <tr>
            <th>ADDRESS:</th>
            <td><input type="text" name="name3" required/></td></tr>
         <tr>
         <th>TICKETS:</th>
         <td><input type="text" name="name4" required/></td>
         </tr> 
         <tr>
         <th>MOBILE:</th>
         <td><input type="text" name="name5" required/></td></tr> 
          <tr>
          <th>Payment options:</th>
         <td> 
          <input type="radio" name="payment" value="cc" required/>Credit Card <br>
<input type="radio" name="payment" value="dc" />Debit card <br>
<input type="radio" name="payment" value="wallet"/>wallet
        </td>
          
          <tr>
           <th><input id="b" type="submit" name="submit" value="submit"></th>
              </form>
         </table>   
         <br>
         <br>
    
    <br>
    <br><br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
$payment = $_POST['payment'];
if(isset($_POST['name1']))
{
$sql1="insert into web5(name,age ,address,tickets,mobile,payment)values('$name1',$name2,'$name3',$name4,$name5,'$payment')";


if($conn->query($sql1))
{
echo "<script>alert('successfull');</script>";
}
else{
echo " <script>alert('booking not successfull');</script>";
}
}

$conn->close();
}
?>
</body>

<footer>
<b>Doll Zoo,Copyright &copy;2019<b>
</footer>
<br>
<br>
</html>