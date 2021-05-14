<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Welcome to </title>

<style>
body{
  text-align:center;
  box-sizing:border-box;
  font-family:"Lato",Sans-serif;
   background-image: url(https://www.hull.ac.uk/choose-hull/study-at-hull/visit-us/site-elements/img/campus-aerial-from-cottingham-road.jpg);
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	height: 100vh;
/*   position:relative; */
}

.box{
  position:absolute;
  top:50%;
  left:50%;
  transform : translate(-50% ,-50%);
}

.btn:link,
.btn:visited{
  text-decoration: none;
  text-transform:uppercase;
  position:relative;
  top:0;
  left:0;
  padding:20px 40px;
  border-radius:100px;
  display:inline-block;
  transition: all .5s;
}

.btn-white{
  background:#fff;
  color:#000;
}

.btn:hover{
   box-shadow:0px 10px 10px rgba(0,0,0,0.2);
   transform : translateY(-3px);
}

.btn:active{
  box-shadow:0px 5px 10px rgba(0,0,0,0.2)
  transform:translateY(-1px);
}

.btn-bottom-animation-1{
  animation:comeFromBottom 1s ease-out .8s;
}

.btn::after{
  content:"";
  text-decoration: none;
  text-transform:uppercase;
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  border-radius:100px;
  display:inline-block;
  z-index:-1;
  transition: all .5s;
}

.btn-white::after {
    background: #fff;
}

.btn-animation-1:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

@keyframes comeFromBottom{
  0%{
    opacity:0;
    transform:translateY(40px);
  } 
  100%{
    opacity:1;
    transform:translateY(0);
  }
}
.over-img{
    padding-top: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
    .txtbox{
        text-align: center;
        font-size:25px;
        color: white;
        text-shadow: 2px 2px #000000;
        padding-bottom: 5px;
    }
/*preloader*/
    
    
</style>
</head>
<body>
<div class="over-img"><img style=" height: 200px;width: 450px;" src="https://findvectorlogo.com/wp-content/uploads/2019/04/university-of-hull-vector-logo.png"></div>
    <div class="txtbox">
        <h1>Welcome to the Student Location App</h1>
    </div>
<div class="box">
  <a href="location.php" class="btn btn-white btn-animation-1">Add Student</a> 
  <a href="edit.php" class="btn btn-white btn-animation-1">Edit Data</a> 
  <a href="getdata.php" class="btn btn-white btn-animation-1">Search</a> 

</div>

</body>
</html>