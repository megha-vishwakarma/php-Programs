<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<!--Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

<!--Chat bot files-->
<link rel="stylesheet" href="./chat.css">
    <link rel="stylesheet" href="./home.css">

<style>
    *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

body{
	background-image: url("b2.jpg");
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("bg.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}


/*ALERT BOX*/
#modalContainer {
background-color:rgba(0, 0, 0, 0.3);
  position:absolute;
  top:0;
  width:100%;
  height:100%;
  left:0px;
  z-index:10000;
  background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
  position:relative;
  width:33%;
  min-height:100px;
  max-height:400px;
  margin-top:50px;
  border:1px solid #fff;
  background-color:#fff;
  background-repeat:no-repeat;
  top:30%;
}

#modalContainer > #alertBox {
  position:fixed;
}

#alertBox h1 {
  margin:0;
  font:bold 1em Raleway,arial;
  background-color:#11bc4a;
  color:#FFF;
  border-bottom:1px solid #11bc4a;
  padding:10px 0 10px 5px;
}

#alertBox p {
  height:50px;
  padding-left:5px;
  padding-top:30px;
  text-align:center;
  vertical-align:middle;
}

#alertBox #closeBtn {
  display:block;
  position:relative;
  margin:10px auto 10px auto;
  padding:7px;
  border:0 none;
  width:70px;
  text-transform:uppercase;
  text-align:center;
  color:#FFF;
  background-color:#11bc4a;
  border-radius: 0px;
  text-decoration:none;
  outline:0!important;
}

/* unrelated styles */

#mContainer {
  position:relative;
  width:600px;
  margin:auto;
  padding:5px;
  border-top:2px solid #fff;
  border-bottom:2px solid #fff;
}

h1,h2 {
  margin:0;
  padding:4px;
}

code {
  font-size:1.2em;
  color:#069;
}

#credits {
  position:relative;
  margin:25px auto 0px auto;
  width:350px; 
  font:0.7em verdana;
  border-top:1px solid #000;
  border-bottom:1px solid #000;
  height:90px;
  padding-top:4px;
}

#credits img {
  float:left;
  margin:5px 10px 5px 0px;
  border:1px solid #000000;
  width:80px;
  height:79px;
}

.important {
  background-color:#F5FCC8;
  padding:2px;

}

@media (max-width: 600px) 
{
  #alertBox {
  position:relative;
  width:90%;
  top:30%;
}}




/*navigation bar*/
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}

nav{
  background: #0082e6;
  height: 78px;
  width: 99.6%;
   box-shadow:0 5px 9px 0 rgba(18, 16, 16, 0.2), 0 7px 22px 0 rgba(0, 0, 0, 0.19);
}
label.logo{
  color: white;
  font-size: 38px;
  line-height: 80px;
  padding: 0 100px;
 /* font-weight: bold;*/
  font-family: 'Berkshire Swash', cursive;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;

  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  background: url(bg1.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 80px);
}

</style>

</head>
<body>

<!--navigation bar -->
<nav>
	<input type="checkbox" id="check">
	<label for="check" class="checkbtn">
	  <i class="fas fa-bars"></i>
	</label>
	<label class="logo">Yoga Life</label>
	<ul>
	  <li><a class="active" href="#">Home</a></li>
	  <li><a href="#">About</a></li>
	  <li><a href="#">Services</a></li>
	  <li><a href="#">Contact</a></li>
	  <li><a href="#">Feedback</a></li>
	</ul>
  </nav>

  <!--contact us form-->
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn" value = "Test the alert" onclick="alert('Your request porcessed Successfully');" >Send</button>
			</div>
		</div>
	</div>


	<script>
        var ALERT_TITLE = "Success!";
var ALERT_BUTTON_TEXT = "OK";

if(document.getElementById) {
  window.alert = function(txt) {
    createCustomAlert(txt);
  }
}

function createCustomAlert(txt) {
  d = document;

  if(d.getElementById("modalContainer")) return;

  mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
  mObj.id = "modalContainer";
  mObj.style.height = d.documentElement.scrollHeight + "px";
  
  alertObj = mObj.appendChild(d.createElement("div"));
  alertObj.id = "alertBox";
  if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
  alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
  alertObj.style.visiblity="visible";

  h1 = alertObj.appendChild(d.createElement("h1"));
  h1.appendChild(d.createTextNode(ALERT_TITLE));

  msg = alertObj.appendChild(d.createElement("p"));
  //msg.appendChild(d.createTextNode(txt));
  msg.innerHTML = txt;

  btn = alertObj.appendChild(d.createElement("a"));
  btn.id = "closeBtn";
  btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
  btn.href = "#";
  btn.focus();
  btn.onclick = function() { removeCustomAlert();return false; }

  alertObj.style.display = "block";
  
}

function removeCustomAlert() {
  document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
function ful(){
alert('Alert this pages');
}
</script>


 <!-- CHAT BAR BLOCK -->
 <div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsible">Chat with us!
        <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
    </button>

    <div class="content">
        <div class="full-chat-block">
            <!-- Message Container -->
            <div class="outer-container">
                <div class="chat-container">
                    <!-- Messages -->
                    <div id="chatbox">
                        <h5 id="chat-timestamp"></h5>
                        <p id="botStarterMessage" class="botText"><!--span>Loading...</span--></p>

        <!--AZURE QnA bot-->
<iframe src='https://webchat.botframework.com/embed/YogaLifeQnABot?s=tpl0-av_cU8.f9WXR8SrU5YlcTvSuQfIGRjh7Mt0jha4BW52ikTzaVc' style="height: 480px; width: 340px;"></iframe>
    <div class="chat-bar-icons">
                          
                            <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                onclick="sendButton()"></i>
                        </div>
                    </div>

                    <div id="chat-bar-bottom">
                        <p></p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script src="chat.js"></script>

</body>
</html>