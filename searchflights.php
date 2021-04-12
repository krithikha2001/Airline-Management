<?php 
     session_start();
     if(($_SESSION["user"])==null)
     {
      header("location: login.php");
     }

?>
<!DOCTYPE html>
<html>
<head>
<title>Search Flights</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url("https://www.thephotoforum.com/attachments/thousand_steps3-jpg.95195/");
  background-repeat: no-repeat;
  background-size: cover;
}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 10px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    html, body {
      min-height: 100%;
      }
      .sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: transparent;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: BLACK;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 55px;
      font-size: 55px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 30px;
      margin-right: 90px;

      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #a37547; 
      }
      .banner {
      position: relative;
      height: 230px;
      background-image: url("https://c1.wallpaperflare.com/preview/466/615/643/cappadocia-turkey-travel-hot-air-balloon.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a37547;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a37547;
      color: #a37547;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #a37547;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #a37547;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: 5;
      border-radius: 10px; 
      background: #6b4724;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      box-shadow: 0 0 18px 0 #3d2914;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
      #side a, .dropdown-btn {
   padding: 6px 8px 6px 16px;
   text-decoration: none;
   font-size: 20px;
   color: white;
   display: block;
   border: none;
   background: #6b4724;
   width: 100%;
   text-align: left;
   cursor: pointer;
   outline: none;
}
#side a:hover, .dropdown-btn:hover {
   color: yellow;
}
.sticky {
   position: fixed;
   top: 0;
   width: 100%;
}
.sticky + .content {
   padding-top: 60px;
}
#menu{
   width:50px;
   position: fixed;
   right: 65px;
   top:35px;
   z-index:2;
   cursor:pointer;
}
#side{
   width:250px;
   height:700px;
   position: fixed;
   right:-250px;
   top:0;
   background-color:rgba(0,0,0,0.2);
   z-index: 2;
   transition: 2s;
   overflow-y: scroll;
}
li {list-style-type: none;
   font-size: 16pt;
}
nav ul li{
   list-style: none;
   margin:50px 20px;
}
nav ul li a{
   text-transform: uppercase;
   text-decoration: none;
   color: white;
   text-align: right;
}
</style>
</head>
<body>
<div class="main">
      <nav id="side">
        <ul>
          <br>
          <br>
          <br>
          <br>
          <li><a href="searchflights.php">Search Flights</a></li>
          <li><a href="passenger info table.html">Book Ticket</a></li>
          <li><a href="customer.html">Enquiry</a></li>
        </ul>
      </nav>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB5nWJeJStVSln4FEFOjNFF-AWjHE7OhgvYTu4mXG9xQdekA34VR3RXu0o7PJn3EEEJjo&usqp=CAU" style="width: 50px;"id="menu">
    <div class="testbox">
    <form action="/flight_management/Airport-Management/search_result.php" method="post">
      <!--<div class="banner">
      </div>-->
      <div class="item">
      WELCOME!
    <?php
print_r($_SESSION["user"]);
?>
        <h2><center>Filter Flights</center></h2>
            <label for="fcity">FROM:</label>
            <select name="fcity" id="fcity"  class="form-control">
              <option value="Hyderabad">Hyderabad</option>
              <option value="Delhi">Delhi </option>
              <option value="Shimla">Shimla</option>
              <option value="Chennai">Chennai</option>
              <option value="Lucknow">Lucknow </option>
              <option value="Allahabad">Allahabad</option>
              <option value="Bengaluru">Bengaluru</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
              <option value="Kolkata">Kolkata </option>
              <option value="Jaipur">	Jaipur</option>
              <option value="Surat">Surat</option>
            </select>
      </div>
      <div class="item">
        <label for="tcity">TO:</label>
            <select name="tcity" id="tcity"  class="form-control">
              <option value="Delhi">Delhi </option>
              <option value="Hyderabad">Hyderabad</option>
              <option value="Shimla">Shimla</option>
              <option value="Chennai">Chennai</option>
              <option value="Lucknow">Lucknow </option>
              <option value="Allahabad">Allahabad</option>
              <option value="Bengaluru">Bengaluru</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
              <option value="Kolkata">Kolkata </option>
              <option value="Jaipur">	Jaipur</option>
              <option value="Surat">Surat</option>
            </select>
  </div>
   
      <div class="question">
        <p>Class</p>
        <div class="question-answer">
          <div>
            <input type="radio" name="class" value="Buisness"/>
            <label for="radio_3" class="radio"><span>Buisness Class</span></label>
          </div>
          <div>
            <input type="radio" value="Economy" name="class" checked/>
            <label for="radio_4" class="radio"><span>Economy class</span></label>
          </div>
        </div>
        <div class="day-visited">
          DATE OF TRAVEL :
          <input type="date" name="traveldate"  required/>
        <div class="seats">TOTAL PASSENGERS:
          <input type="number" name="seats" min=1 required/>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Search Flights</button>
        </div>
    </form>
    </div>
</div>
</div>


</div>
<script>
  var menu=document.getElementById("menu");
  var side=document.getElementById("side");
  side.style.right="-250px";
  menu.onclick=function(){
  if(side.style.right=="-250px"){
    side.style.right="0px"
  }
  else{
    side.style.right="-250px"
    }
  }
  var scroll = new SmoothScroll('a[href*="#"]');
  window.onscroll = function() {myFunction()};
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  function myFunction() {
  if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
  }
   else {
  navbar.classList.remove("sticky");
  }
  }
  </script>
</body>
</html> 