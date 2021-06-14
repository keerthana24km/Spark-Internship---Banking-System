<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HomePage</title>
        <style>
              {
    margin: 0;
    padding: 0;
}
.wrapper{
    width: 1170px;
    margin-left: 30px;
}
header{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("bank2.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.nav-area{
    float: right;
    list-style: none;
    margin-top: 40px;
}
.nav-area li{
    display: inline;
}
.nav-area li a{
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    font-family: poppins;
    font-size: 20px;
}
.nav-area li a:hover{
    background: #fff;
    color: #000;
}
.logo img{
    width: 100px;
    float: left;
    height: 100px;
    margin-top: 20px;
}
.homepg{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 10% 30%;
    text-align: center;
}
.homepg h1{
    text-align: center;
    color: rgb(248, 245, 245);
    text-transform: uppercase;
    font-size: 100px;
    padding:0px;
}
.homepg h2{
    text-align: center;
    color: rgb(230, 216, 216);
    font-size: 25px;
    padding:0px;
}
.homepg a{
    border: 1px solid rgb(243, 238, 238);
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    margin-top: 20px;
    display: inline-block;
    color: rgb(241, 234, 241);
}
.homepg a:hover{
    background: #fff;
    color: #333;
}
p{
    font-size: 20px;
    font-weight: bold;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: center;
    background-image: url("bg2.jpg");
    background-size: cover;
    color:rgb(230, 220, 220);
    padding:4px 4px;
}
p a{
    color: rgb(248, 245, 245);
    text-decoration: underline;
}
        </style>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="logo">
                    <img src="logo.png" alt="">
                </div>
                <ul class="nav-area">
                    <li><a href="http://localhost/Internship/homepg.php">Home</a></li>
                    <li><a href="http://localhost/Internship/aboutbank.php">About</a></li>
                    <li><a href="http://localhost/Internship/viewdet.php">View Details</a></li>
                    <li><a href="http://localhost/Internship/transfer.php">Transfer Money</a></li>
                </ul>
            </div>
            <div class="homepg">
                <h1>SPF BANK</h1>
                <h2>A Bank of Trust and Guarantee</h2>
                <a href="#bottom">Contact Us</a>
            </div>
        </header>
        <p>Contact details <br> Dial @ 1800-977-400 <br> Email Us at 
        <a href="spfbank@rediffmail.com">spfbank@rediffmail.com</a> <br> For any further queries, visit our website
    <a href="https://spfbank.org/queries">https://spfbank.org/queries</a><br></p>
    </body>
</html>