<html>
    <head>
        <title>
            default
        </title>
        <link rel="stylesheet" href="design.css">
        <style>
            #btn1{
    background-color: yellowgreen;
    border-color: red;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 100px;
    padding-right: 100px;
    border-radius: 260px;
}
body{
                margin:0;
            }
            #btn1{
    background-color: yellowgreen;
    border-color: red;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 100px;
    padding-right: 100px;
    border-radius: 260px;
}
#k{
   background-color: beige;
}
.content{
    background-image: url(v.jpg);
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    margin-left:0px;
}


.content h1{
    padding-top: 370px;
    margin: auto;
  color: white;
  font: 700 normal 5em 'tahoma';
  text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324;
}
nav{
    width: 100%;
    height: 75px;
    line-height: 75px;
    padding: 0px 0px;
    position: fixed;
    background-image: linear-gradient(#033747,#012733);
}
 nav .logo img{
    width:50px;
    height:50px;
    position: absolute;
    padding-top: 10px;
    padding-left:10px;


}
nav .logo p{
    font-size: 20px;
    font-weight: bold;
   float: left;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
   /*margin-right: 20px;*/
   padding-left: 60px;
   position:relative;
   margin:0;
   padding-left:90px;
   text-align:inherit;
}
.p {
    padding-bottom: 250px;
}
nav ul{
    float: right;
}
nav li{
    display: inline-block;
    list-style: none;
}
nav li a{
    font-size: 18px;
    text-transform: uppercase;
    padding: 0px 30px;
    color: white;
    text-decoration: none;
    position: relative;
    padding-top: 0px;
    top:0;
}
nav li a:hover{
    color: #ff8c69;
    transition: all 0.4% ease 0%;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
#k{
   background-color: beige;
   
}
.ll{
    padding-top: 300px;
}
body{
    background-image: url(p.jpg);
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

</style>
    </head>
    <body>
        <div class="p">
        <nav>
            <div class="logo">
           
                <p>LIBRARY</p>
            </div>
            <ul>
                <li><a href="ns.html">Home</a></li>
                <li><a href="publisher.php">Publisher</a></li>
                <li><a href="librarybranch.php">Library_Branch</a></li>
                <li><a href="book.php">Book</a></li>
                <li><a href="bookauthor.php">Book_Authors</a></li>
                <li><a href="bookcopies.php">Book_copies</a></li>
                <li><a href="booklending.php">Book_Lending</a></li>
            
            </ul>
        </nav>
                                         
                       <!--book_lending-->
                       <div id="6" class="ll">
<html>
<head>
</head>
<body>
<div align="center">
<div id="k">
            <hr color="blue"><h1>BOOK LENDING INFORMATION</h1>
                <hr color="blue">
</div><br>
 <form action="n.php" method="post" >
  <b>BOOK ID:</b>
  <input type="text" placeholder="Enter User ID" name="Book_id"><br><br>
  <b>Branch id:</b>
  <input type="text" placeholder="Enter Name" name="Branch_id"><br><br>
  <b>Card No:</b>
  <input type="text" placeholder="Enter Card_No" name="Card_No"><br><br>
  <b>Date Out:</b>
  <input type="text" placeholder="Enter Card_No" name="Date_Out"><br><br>
  <b>Due Date:</b>
  <input type="text" placeholder="Enter Card_No" name="Due_Date"><br><br>
  <button id="btn1">INSERT</button>     
                </form><br>
                <a href="displaybooklending.php">
                    <button id="btn1">DISPLAY</button>
                 </a>
                 <a href="deletebooklending.php">
                 <button id="btn1">DELETE</button>
</a>
</form>
 </div>
 </body>
 </html>
</div>
</body>
 </html>


                                       <!--book_lending-->
                                       <html>
    <body>
    <center>
 <?php
if (isset($_POST['Card_No']))
{
    $server = "localhost";
    $username = "root";
    $password = "Wrongway@123";
    $c = new mysqli($server, $username, $password);
    $Book_id = $_POST['Book_id'];
    $Branch_id = $_POST['Branch_id'];
    $Card_No = $_POST['Card_No'];
    $Date_Out = date('y-m-d',strtotime($_POST['Date_Out']));
     $Due_Date =date('y-m-d',strtotime($_POST['Due_Date']));
    $s="INSERT INTO `venky`.`BOOK_LENDING`(`Book_id`,`Branch_id`,`Card_No`,`Date_Out`,`Due_Date`) VALUES('$Book_id', '$Branch_id', '$Card_No','$Date_Out','$Due_Date')";
     if ($c->query($s)==true) {
         echo "inserted successfully";
     }
    $c->close();
}

?>
 </center>
    </body>
</html>