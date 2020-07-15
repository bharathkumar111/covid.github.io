<style>
.details{
    position: absolute;
    top: 50px;
    height: 180px;
    right:90px;
}
.details b{
    font-style: italic;
    font-size: 20px;
    color: darkred;
    position: absolute;
    top:35px;
    right: 10px;
}
.details input,select{
    margin-left: 45em;

}
.details label{
    position: absolute;
    margin-left: 33em;
}

.details input[type=submit]{
    width: 6em;
    height: 2em;
    background: black;
    color: white;
    border: blueviolet;
    border-radius: 5px;
}
</style>
<div class="details">
                    <form action="" method="POST">
                        
                                 <b>BECOME A MEMBER</b>
                            <br><br><br><br>
                            <div>
                            <label>NAME </label>
                            <input type="text" name="name" required><br>
                            </div>
                            <div><label>NUMBER</label>
                            <input type="text" name="number" required><br>
                            </div>
                            <div>
                            <label>EMAIL ID</label>
                            <input type="email" name="email" required><br>
                            </div> 
                            <div>
                                    <label>ADDRESS</label>
                                    <input type="text" name="address" ><br>
                                    </div> 
                            <div>
                                    <input type="submit" name="submit" ><br>
                                    </div>                    
                        </form>

                </div>