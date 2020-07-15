*{
    margin:0%;
    padding: 0%;
    text-decoration: none;
}

body{
    margin:0 auto;
    width: 90%;
    background-color: cornflowerblue;
}
.b{
    position: absolute;
}

.container{
    position: relative;
    top:20px;
    left: 30px;
}
.container nav ul li{
    color: red;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 25px;
}
.text{
    font-size: 40px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: darkred;
}
.pi p1{
    position: absolute;
    top:20em;
    left: 15cm;
    float: left;
    color: blue;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;
}
.login{
	width:320px;
	height:420px;
	background:rgba(0,0,0,0.5);
	color: white;
    position: absolute;
    top: 90em;
	left: 15em;
	transform:translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 5%;
	padding: 70px 30px;
}
.login p{
	margin :0;
	padding: 0;
	font-weight:bold;

}
.login input,button{
	width: 100%;
	margin-bottom: 20px;
}

.login input[type="text"], input[type="password"]{
   border:none;
   border-bottom: 1px solid white;
   background:transparent;
   outline: none;
   height:40px;
   color: white;
   font-size: 16px;

}

.login button{
    border:none;
    outline:none;
	height:40px;
	width: 100%;
    background: #1c8adb;
    color: white;
    font-size: 18px;
    border-radius: 20px;

}

.login button:hover{
  cursor: pointer;
  background:red;
  color: black;
}
.pi p2{
    position: relative;
    top:2em;
    left: 0cm;
    color: blue;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;
}
.pi h1,h2{
    color: darkred;
    font-style: italic;
}
.slider{
    overflow: hidden;
    height: 500px;
    width: 450px;
}

.slider figure div{
    float: left;
    width:20%;
}
.slider figure img{
    width: 100%;
    float: left;
}
.slider figure{
    position: relative;
    width: 500%;
    margin: 0px;
    left: 0;
    animation: 15s ash infinite;
}
@keyframes ash{
    0%{
        left: 0%;
    }
    10%{
        left: 0%;
    }
    12%{
        left: -100%;
    }
    22%{
        left: -100%;
    }
    24%{
        left: -200%;
    }
    34%{
        left: -200%;
    }
    36%{
        left: -300%;
    }
    46%{
        left: -300%;
    }
    48%{
        left: -400%;
    }
    58%{
        left: -400%;
    }
    60%{
        left: -300%;
    }
    70%{
        left: -300%;
    }
    72%{
        left: -200%;
    }
    82%{
        left: -200%;
    }
    84%{
        left: -100%;
    }
    94%{
        left: -100%;
    }
    96%{
        left: 0%;
    }

}

