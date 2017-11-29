
<?php
  if (!isset($_GET['email-cookie'])){
  }
  else{
  ?>
  <script type="text/jquery">$('.cookie-wrap').hide()</script>
  <?php
  }
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<style media="screen">

input{
  width: 95%;
  height: 3em;
  margin:15px 0;
}
.cookie-wrap{
  left: 0;
  top: 0;
  width:100vw;
  height: 95%;
  position: absolute;
  padding-top: 5%;
  background-color:rgba(0,0,0,0.8);
}
.container{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 400px;
  width: 65%;
  margin:0 auto;
  padding:8px;
  background-color: white;
}
.signup-left {
  width: 45%;
  overflow: hidden;
  height: 100%;
}
.signup-left > img{
  height: 100%;
}
.signup-right{
  width:55%;
  text-align: center;
  padding: 20px;
  height: 100%;
  position: relative;
}
.signup-right > h2{
  text-transform: uppercase;
}
.linkwrap{
  display:flex;
  flex-direction: row-reverse;
}
.linkwrap > a{
  text-decoration: none;
  padding-right: 10px;
}
.linkwrap:first-child{
  margin-bottom:2.5em;
  margin-right: -25px;
}
.signup-btn{
  padding:10px 0;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  background-color:black;
  color: white;
  width:95%;
  display: inline-block;
}
.socialicons{
  position: absolute;
  bottom: 1.5em;
  margin: 0 auto;
  right:40%;
}

@media (max-width: 775px) {
  .cookie-wrap{
    display: flex;
    align-items: center;
    justify-content: center;
    right:0%;
    padding:0;
  }
  .container{
    height: auto;
  }
  .signup-left {
    display: none;
  }
  .signup-right{
    height:60%;
    width: 100%;
  }
  .linkwrap:first-child{
    margin-bottom:0px;
    margin-right: -25px;
  }
  .socialicons{
    right:20%;
    bottom: 0;
    display: block;
  }
}

</style>

<body>

    <div class="cookie-wrap">
      <div class="container">

        <div class="signup-left">
          <img src="https://ichef-1.bbci.co.uk/news/660/cpsprodpb/2394/production/_87480190_d6ea0b31-434a-4939-be11-99dcc786b7ac.jpg" alt="">
        </div>

        <div class="signup-right">
          <div class="linkwrap">
            <a href="#" class="close">X</a>
          </div>

          <h2>Get the worlds best travel newsletter</h2>
          <p>Find out about new destinations, trips and deals first.</p>

          <input type="text" name="email" value="" placeholder="Email">
          <br>
          <a href="?email-cookie" type="button" name="submit" class="signup-btn">subscribe</a>
          <br>

          <div class="linkwrap">
            <a href="#" class="close">no thanks</a>
          </div>
          <div class="socialicons">social icons placeholder</div>
        </div>

      </div>
    </div>

  <h1>test body</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>




  </body>

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</html>
