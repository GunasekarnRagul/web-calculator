<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="../index.css">
</head>
<style>
    @media screen and (min-width: 768px) and (max-width:999px)
{
    .container, .container-md, .container-sm {
    max-width: 904px !important;
}
}
@media screen and (max-width: 767px) 
{
    .container, .container-sm {
    max-width: 100% !important;
}
}
.containers {
    max-width: 50rem;
    margin: 50px 0px 0px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}




#result , #result_feet {
    font-size: 17px;
    border-radius: 10px;
    background: #15171c;
    padding: 1rem 10px;
    color: white;
    text-align: right;

}


#result {

}
.body-sec.bmical {
    padding: 4rem 0rem 6rem;
}
.form-group label {
    font-weight: bold;
    margin-bottom: 6px;
}
.form-group {
    margin-bottom: 10px;
}
.form-group input {
    width: 15rem;
    margin-left: 6px;
}

.bmicalbtn {
    margin-left: 6px;
    margin-top: 1rem;
}
.maincon {
    padding-top: 1rem;
}

.bmires {
    margin: 0px;
    padding: 10px;
}

@media screen and (max-width:500px) {
    
    #result ,#result_feet {
    font-size: 14px;
}
.form-group input {
    width: 14rem;
    margin-left: 2px;
}
}

/* // */
/***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

body {
    background-color: #f7f8f9;
}

.card {
    background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;
}

/* Tabs Card */

.tab-card {
  border:1px solid #eee;
}

.tab-card-header {
  background:none;
}
/* Default mode */
.tab-card-header > .nav-tabs {
  border: none;
  margin: 0px;
}
.tab-card-header > .nav-tabs > li {
  margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
  border: 0;
  border-bottom:2px solid transparent;
  margin-right: 0;
  color: #737373;
  padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
    border-bottom:2px solid #007bff;
    color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
    color: #007bff;
}

.tab-card-header > .tab-content {
  padding-bottom: 0;
}
#result p  {
    margin: 0px;
    color: #c4cccc;
    font-weight: bold;
    font-style: italic;

}
div#result_feet p {
  margin: 0px;
    color: #c4cccc;
    font-weight: bold;
    font-style: italic;
}

</style>
<body>
   
    <div class="header">
        <?php include '../header.php';?>
    </div>



    <div class="body-sec bmical">


    <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4 class="mb-3">BMI Calculator</h4>
          </div>
          <div class="body-con">
            <p>A BMI mini-computer is an instrument used to gauge an individual's weight record (BMI). BMI is a mathematical worth determined in light of an individual's level and weight. It is a broadly utilized strategy to survey whether an individual has a sound body weight comparable to their level.
            </p>
            <p>
            BMI is a useful screening device, yet it doesn't straightforwardly gauge muscle to fat ratio or generally wellbeing. Different factors, for example, bulk, bone thickness, and circulation of muscle to fat ratio are not viewed as in the computation, so it may not be exact for people with high bulk or certain medical issue.
            </p>


        
          </div>
          </div>
      </div>
      </div>

    </section>


    <div class="catcal">
      <div class="container">
      <div class="blogcontainers mt_rem">
        <?php include '../categoriescalculator.php';?>
    </div>
    </div>
    </div>




       <div class="container">
           <div class="containers">
           <h4>BMI Calculator</h4>
           <hr>
           <!-- // -->
           
  <div class="row">
    <div class="col">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Metric Units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">US Units</a>
            </li>
            
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
          
        <div class="maincon">
          
           <div class="form-group">
              <label for="weight">Weight (kg):</label>
              <input onkeyup="val()" type="text" class="form-control" id="weight"  placeholder="Enter weight" required>
            </div>

           <div class="form-group">
            <label for="height">Height (cm):</label>
            <input onkeyup="val()" type="text" class="form-control" id="height"  placeholder="Enter height" required>

          </div>
        </div>


          <div class="bmicalbtn">
           <button onclick="val()" disabled id="calculateBtn" class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
           Calculate BMI
          </button>
          </div>

          <div class="collapse" id="collapseExample">
          <p class="bmires">#Result:</p>
            <div class="card card-body">
               <div id="result">

               </div>
            </div>
          </div>
          
          </div>
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
          <div class="maincon">
           <div class="form-group">
              <label for="weight">Weight (lb):</label>
              <input onkeyup="valus()" type="text" class="form-control" id="weightfeet"  placeholder="Enter weight" required>
            </div>

           <div class="form-group">
            <label for="height">Height (in):</label>
            <input onkeyup="valus()" type="text" class="form-control" id="heightfeet"  placeholder="Enter height" required>

          </div>
        </div>


          <div class="bmicalbtn">
           <button  onclick="valus()" disabled id="calculatefeetBtn" class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExamplefeet" aria-expanded="false" aria-controls="collapseExamplefeet">
           Calculate BMI
          </button>
          </div>

          <div class="collapse" id="collapseExamplefeet">
          <p class="bmires">#Result:</p>
            <div class="card card-body">
               <div id="result_feet">

               </div>
            </div>
          </div>             
          </div>
       

        </div>
      </div>
    </div>
  </div>
         </div>
      </div>


      <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
       
          <div class="body-con">
          <h5>Introduction</h5>
            <p>Keeping a sound body weight is a foundation of in general prosperity and long haul wellbeing. One important instrument for evaluating weight status is the Weight Record (BMI). By computing your BMI, you can acquire important experiences into whether your weight falls inside a sound reach. In this far reaching blog entry, we will investigate the idea of BMI, its importance in wellbeing appraisal, and how to really use a BMI mini-computer to assess your weight status and settle on informed conclusions about your prosperity.</p>
            <h5>Understanding BMI:</h5>
            <p>Definition and Calculation:</p>
            <p>The Body Mass Index (BMI) is a numerical value derived from an individual's weight and height. It provides a general indication of whether a person's weight is within a healthy range for their height. The formula for calculating BMI is:
BMI = weight (kg) / (height (m))^2</p>
<p>Interpreting BMI Categories:</p>
             <p>BMI values are categorized into different weight status categories, each associated with a range of values:</p>

             <ul >
              <li>Underweight: BMI < 18.5</li>
              <li>Normal weight: 18.5 ≤ BMI < 24.9</li>
              <li>Overweight: 25.0 ≤ BMI < 29.9</li>
              <li>Obesity (Class I): 30.0 ≤ BMI < 34.9</li>
              <li>Obesity (Class II): 35.0 ≤ BMI < 39.9</li>
              <li>Obesity (Class III): BMI ≥ 40.0</li>
              
             </ul>
             <h5>Meaning of BMI in Wellbeing Evaluation:</h5>
             <p> Wellbeing Dangers and Suggestions:</p>
             <p>BMI fills in as a significant mark of potential wellbeing gambles related with weight. People with a high BMI might be at expanded risk for conditions like cardiovascular sicknesses, type 2 diabetes, certain malignant growths, and outer muscle problems. On the other hand, people with a low BMI might be in danger for dietary lacks and debilitated resistant capability.</p>
             <p> Restrictions of BMI:</p>
             <p>While BMI is a valuable device for populace level evaluations, it has specific constraints at the singular level. It doesn't represent varieties in body organization, for example, bulk and fat conveyance. Thusly, it may not give a total image of a singular's wellbeing status. Extra factors, for example, midsection outline, muscle to fat ratio, and generally way of life, ought to be considered for a more extensive evaluation.</p>
             <h5>Using the BMI Mini-computer:</h5>
             <p>Getting to a Dependable BMI Number cruncher:</p>
             <p>Different internet based stages and portable applications give BMI mini-computers that are speedy and simple to utilize. It is vital to pick a legitimate and dependable source to guarantee exact outcomes.</p>
             <p>Entering Weight and Level:</p>
             <p>To compute your BMI utilizing a BMI number cruncher, you should include your weight and level. Guarantee that you utilize predictable units (e.g., kilograms for weight and meters for level) to get exact outcomes</p>
             <p> Deciphering the Outcomes:</p>
             <p>When you input the important data, the BMI number cruncher will produce your BMI esteem. It is vital to decipher the outcomes inside the suitable weight status classifications referenced before. Recollect that BMI is only one part of wellbeing evaluation and ought to be viewed as close by different elements for a far reaching assessment.</p>
             <h5>Ramifications of BMI Classes:</h5>
             <p>Underweight:</p>
             <p>Being underweight may demonstrate insufficient nourishment or fundamental medical issue. It is fundamental to counsel a medical care proficient for additional assessment and direction on accomplishing a solid weight.</p>
             <p> Ordinary Weight:</p>
             <p>Falling inside the ordinary weight territory recommends a fair weight-to-level proportion. Nonetheless, it is essential to keep up with other sound way of life propensities to help in general prosperity.</p>
             <p>Overweight and Heftiness:</p>
             <p>Being overweight or large can expand the gamble of different ailments. In the event that your BMI falls inside these classifications, it is prudent to counsel a medical care proficient to foster a customized plan for weight the executives and working on generally wellbeing.</p>
             <p>Past BMI: Embracing a Comprehensive Way to deal with Wellbeing:</p>
             <p>While BMI is an important instrument, it ought not be the sole determinant of your wellbeing. Integrating extra viewpoints, for example, body organization, actual work levels, sustenance, and mental prosperity into your wellbeing process is fundamental for an exhaustive and all encompassing way to deal with health.</p>
          </div>
          </div>
      </div>
      </div>

    </section>
    </div>


    <div class="footer">
        <?php include '../footer.php';?>
    </div>

    <script>


window.addEventListener('DOMContentLoaded', function() {
  var metricTab = document.getElementById('one-tab');
  metricTab.click();
});

const weight = document.getElementById('weight');


weight.addEventListener('keypress', function(e) {
  const keyCode = e.keyCode || e.which;
  const keyValue = String.fromCharCode(keyCode);

  // Allow numbers (0-9) and decimal point (.)
  if (!/^\d*\.?\d*$/.test(weight.value + keyValue)) {
    e.preventDefault();
  }
});

const height = document.getElementById('height');


height.addEventListener('keypress', function(e) {
  const keyCode = e.keyCode || e.which;
  const keyValue = String.fromCharCode(keyCode);

  // Allow numbers (0-9) and decimal point (.)
  if (!/^\d*\.?\d*$/.test(height.value + keyValue)) {
    e.preventDefault();
  }
});

const weightfeet = document.getElementById('weightfeet');


weightfeet.addEventListener('keypress', function(e) {
  const keyCode = e.keyCode || e.which;
  const keyValue = String.fromCharCode(keyCode);

  // Allow numbers (0-9) and decimal point (.)
  if (!/^\d*\.?\d*$/.test(weightfeet.value + keyValue)) {
    e.preventDefault();
  }
});

const heightfeet = document.getElementById('heightfeet');


heightfeet.addEventListener('keypress', function(e) {
  const keyCode = e.keyCode || e.which;
  const keyValue = String.fromCharCode(keyCode);

  // Allow numbers (0-9) and decimal point (.)
  if (!/^\d*\.?\d*$/.test(heightfeet.value + keyValue)) {
    e.preventDefault();
  }
});

    function val()
        {
        const weightval = document.getElementById('weight').value.trim();  
        const heightval = document.getElementById('height').value.trim();
         const calculateBtn = document.getElementById('calculateBtn');



         console.log(weightval)
         console.log(heightval)
            if(weightval != '' && heightval != '')
            {
                calculateBtn.disabled = false;         
    
  var weight = parseFloat(document.getElementById('weight').value);
  var height = parseFloat(document.getElementById('height').value);

  if (isNaN(weight) || isNaN(height) || height === 0) {
    document.getElementById('result').innerHTML = 'Please enter valid weight and height values.';
  } else {
    var bmi = weight / Math.pow(height / 100, 2);
    var category = getBMICategory(bmi);
    var result = '<p>' + 'Your BMI: ' + bmi.toFixed(2) + '</p>' + '<p>' + 'Category: ' + category + '</p>';
    document.getElementById('result').innerHTML = result;
  }

            }
            else
            {
                calculateBtn.disabled = true;         
;
            }


        }



function getBMICategory(bmi) {
  if (bmi < 18.5) {
    return 'Underweight';
  } else if (bmi >= 18.5 && bmi < 25) {
    return 'Normal weight';
  } else if (bmi >= 25 && bmi < 30) {
    return 'Overweight';
  } else {
    return 'Obese';
  }
}


function valus() {
  const weightVal = document.getElementById('weightfeet').value.trim();
  const heightVal = document.getElementById('heightfeet').value.trim();
  const calculateBtn = document.getElementById('calculatefeetBtn');

  if (weightVal !== '' && heightVal !== '') {
    calculateBtn.disabled = false;
 
  var weight = parseFloat(document.getElementById('weightfeet').value);
  var height = parseFloat(document.getElementById('heightfeet').value);

  if (isNaN(weight) || isNaN(height) || height === 0) {
    document.getElementById('result_feet').innerHTML = 'Please enter valid weight and height values.';
  } else {
    var bmi = weight / Math.pow(height, 2) * 703;
    var category = getBMICategory(bmi);
    var result = '<p>' + 'Your BMI: ' + bmi.toFixed(2) + '</p>' + '<p>'  + 'Category: ' + category + '</p>';
    document.getElementById('result_feet').innerHTML = result;
  }

  } else {
    calculateBtn.disabled = true;
  }
}

    </script>

    <script src="../index.js"></script>
</body>
</html>