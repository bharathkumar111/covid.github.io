<html>
    <body>
    <!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>Customer form</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="details">
            <div class="container">
                    <h2 id="heading">Enter Your details</h2>
                    <form method="POST" action="">
                    <div>
                        <label>Name</label>
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <br>
                     <div>
                        <label>Gender</label>
                        <select name="gender" style="width: 173px">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                   <br>
                   <div>
                        <label>Age type</label>
                        <select name="agetype" required>
                        <option>--Category--</option>
                        <option value="kids">Kids</option>
                        <option value="adults">Adults</option>
                        <option value="senior">Seniors</option>
                        </select>
                    </div>
                    
                   <br>
                   
                   <div>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="abc@gmail.com" required>
                    </div>
                   <br>
                   <div>
                        <label>Mobile No.</label>
                        <input type="text" name="mobile" required>
                    </div>
                   <br>
                   <div>
                        <label>Enter plan</label>
                        <select name="plan" required>
                        <option name="1 year" >1 year plan</option>
                        <option name="2 year" >2 year plan</option>
                        <option name="5 year" >5 year plan</option>
                        <option name="Life long" >Life long</option>
                        </select>
                    </div>
                   <br>
                   <div>
                        <label>Amount:</label>
                        <input type='text' name="amount" id="myNumber" readonly>
<br>
<br>
               <button type="button" onclick="myFunction()" name="amount">See price</button>


<script>
function myFunction() {
  document.getElementById("myNumber").defaultValue = '2000';
}
</script>
                   </div>
                   <br>
                   <br>
                   <div>
                        <button style="position:relative;">Submit</button>   
                   </div>
                </form>
            </div>
        </section>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "newdatabase";

$connection = new mysqli( $servername,$username,$password,$databasename);

if(!$connection)
{
    die("Connection failed: ".mysqli_connect_error());
}
session_start();
    $n=filter_input(INPUT_POST,'name');
    $g=filter_input(INPUT_POST,'gender');
    $age=filter_input(INPUT_POST,'agetype');
    $email=filter_input(INPUT_POST,'email');
    $mobile=filter_input(INPUT_POST,'mobile');
    $plan=filter_input(INPUT_POST,'plan');
    $amount=filter_input(INPUT_POST,'amount');
if(isset($mobile)!=0)
{
    $s="INSERT into memb(name,gender,agetype,email,mobile,plan,amount)values('$n','$g','$age','$email','$mobile','$plan','$amount')";
    
    if(mysqli_query($connection,$s))
    {
        $_SESSION['var']=$n;
        echo"<a style='position:absolute; bottom:15em;left:37em;color:green;'><br>You have successfully registered Now please go <br>back and Login with your name and mobile number</a>";
       header('Location:memberdetails.php');
    }

   else{
    echo "<a style='position:absolute; bottom:10em;left:39em;color:red;'>Error occured while validating</a>";
    }
}
?>
<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    line-height: 1.5;
    padding: 0;
    margin: 0;
    background-color:white;
    color: white;
   
}

#logo img{
    width: 100px;
}

.container{
    width:80%;
    margin: auto;
    overflow: hidden;
}

header{
    background: #35424a;
    color:white;
    padding-top: 30px;
    min-height:70px;
    border-bottom: white 3px solid;
}

header a{
    color:white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
}

header ul{
    margin: 0;
    padding: 0;
}

header li{
    float: left;
    display: inline;
    padding: 0 20px 0 20px;
}

header  #logo{
    float: left;
    margin-top: 0;
}

header nav{
    float: right;
    margin-top: 10px;
}

header #logo img{
    margin: 0;
}


header a:hover{
    color:red;
}

/*section*/

#details{
    background-color:whitesmoke;
    min-height: 500px;
    color:black;
}

#details input,button,select{
    margin-left: 38em;
}
#details label{
    color:black;
    position: absolute;
    margin-left: 25em;
}
#heading{
    margin-left: 19em;
    line-height: 3;
}

#details button{
    width: 8em;
    height: 2em;
    background: black;
    color: white;
    border: blueviolet;
    border-radius: 5px;
}
#details button:hover{
    transform: scale(1.1);
    transition: 0.1s ease;
}

#details a{
    text-decoration: none;
    color: white;
}
footer{
    padding: 20px;
    margin-top: 20px;
    color: white;
    text-align: center;
    background: #2e383f;
    border-top: white 3px solid;
}
@media(max-width: 760px){
    header #logo,
    header nav,
    header nav li{
        text-align: center;
        float: none;
        width: 100%;
    }
    header{
        padding: 20px;
    }
    #details{
        text-align:center;
    }

}
    </style>
