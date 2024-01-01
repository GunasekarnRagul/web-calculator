<?php 
require_once 'config.php';
?>

<style>
  .fdetails .container ul li a {
    text-decoration: none;
    color: white;
    font-size: 15px;
    text-decoration: underline !important;
}
  .fotter {
  background: #333333;
  color: white;
  padding: 3rem 0px 0rem;
}

.fotter .container ul{
  
  list-style-type: none;
}
.fdetails .container ul li {
    font-size: 20px;
    margin: 0rem 0px !important;
    cursor: pointer;
}

.fotter .container ul li {
  

  font-size: 20px;
  margin: 1rem 0px;
cursor: pointer;
}
.fotter .container ul li:hover
{

}
.fotter .container ul li a:hover
{
 color: red;
}
.fotter .container ul li a
{
  text-decoration: none;
  color: white;
}

.fdetails hr {
    margin-bottom: 0px;
}
</style>
<section>
    <div class="fotter">
      <div class="container">
        <!-- <ul>
          <li> <a href=""> Home </a></li>
          <li> <a href=""> Calculators </a></li>
          <li> <a href="">About Us </a></li>
          <li> <a href="">Contact Us </a></li>
          <li> <a href="<?php echo $baseurl ?>disclaimer/disclaimer.php">Disclaimer</a></li>
          <li> <a href="<?php echo $baseurl ?>termsandconditions/termsandcon.php">Terms and Conditions</a></li>
          <li> <a href="<?php echo $baseurl ?>privacypolicy/privacypolicy.php">Privacy and Policy</a></li>

        </ul> -->
      </div>
      <div class="fdetails">
        <hr>
      <div class="container">
        <ul style="display:flex;justify-content: space-evenly;flex-wrap: wrap;
          margin-bottom: -1px;padding: 10px 0px;">

          <li> <a href="">About Us </a></li>
          <li> <a href="">Contact Us </a></li>
          <li> <a href="<?php echo $baseurl ?>disclaimer/disclaimer.php">Disclaimer</a></li>
          <li> <a href="<?php echo $baseurl ?>termsandconditions/termsandcon.php">Terms and Conditions</a></li>
          <li> <a href="<?php echo $baseurl ?>privacypolicy/privacypolicy.php">Privacy and Policy</a></li>

        </ul>
      </div>
      
      </div>
    </div>
  </section>