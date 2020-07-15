<html>
    <body style="background:green">
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
        $n=$_SESSION['var'];
        $sql="SELECT * from memb where name='$n'";
        $r=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($r))
        {
            $name=$row['name'];
            $gender=$row['gender'];
            $age=$row['agetype'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $plan=$row['plan'];
            $amount=$row['amount'];
        }
        ?>
        <form action="" method="post">
        <table border="2" style="width:100%;background-color:blue;color:white;">
            <h1 style="position:relative;text-align:center;color:yellow;">Hi <?php echo"$n";?>, Your Membership details</h1>
            <div class="td">
               
            <tr><th>Name</th> <th>Gender</th> <th>Age</th><th>Email</th><th>Mobile</th><th>Plan</th><th>Amount</th></tr>
            <form action="" method="post">
            <td><input type="text" value="<?php echo"$name"?>" disabled></td>
           
            <td><input type="text" value="<?php echo"$gender"?>" disabled></td>
           
            <td><input type="text" value="<?php echo"$age"?>" disabled></td>
            
            <td><input type="text"  value="<?php echo"$email"?>" disabled></td>
            
            <td><input type="text" value="<?php echo"$mobile"?>" disabled></td>
            
            <td><input type="text" id="plan" value="<?php echo"$plan"?>" disabled></td>

            <td><input type="text" value="<?php echo"$amount"?>" disabled></td>
            
        </div>
        <form>
        </table> 

<p style="color:white">Zoo Society members are eligible to receive free or discounted admission to more than 150 reciprocating zoos and aquariums nationwide. Click here to see a current listing of organizations that reciprocate with the North Carolina Zoo Society.</p>
<h1>PLEASE CARRY THIS CERTIFICATE WITH YOU</h1>
</body>
</html>