<!DOCTYPE html >
  <html lang="en">
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Conversion Calculator</title>
        </head>
        <link rel="stylesheet" href="../index.css">

        <style>
          .card-header::-webkit-scrollbar {
  width: 12px; /* Set the width of the scrollbar */
  height: 2px;
}

.card-header::-webkit-scrollbar-track {
  background: white; /* Set the background color of the scrollbar track */
}

.card-header::-webkit-scrollbar-thumb {
  background: red ; /* Set the color of the scrollbar thumb */
  border-radius: 6px; /* Set the border radius of the scrollbar thumb */
}

.card-header::-webkit-scrollbar-thumb:hover {
  background: red; /* Set the color of the scrollbar thumb on hover */
}
  .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    overflow: auto;
    padding-bottom: 18px;
}

  .containers {
    max-width: 50rem;
  margin: 50px 0px 0px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
  .concalbody
  {

    background: #efedef;
  padding: 3rem 0rem;

}

  /* tab */
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
  width: 27rem;

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
  .form-group label {
    font-weight: bold;
  margin-bottom: 6px;
}
  .form-group {
    margin-bottom: 10px;
}
  .form-group input , .form-group select  {
    width: 15rem;
  margin-left: 6px;
}
  .formunittwo {
    margin-left: 1rem;
}
  .bmicalbtn {
    margin-left: 6px;
  margin-top: 1rem;
}
  .bmires {
    margin: 0px;
  padding: 10px;
}

  .result {

    border-radius: 11px;
}


  .result
  {
    background: #15171c;
  background: #15171c;
  padding: 15px;
  color: white;
  text-align: center;

}
  /* / */

  @media screen and (max-width:600px) {

.form-group input, .form-group select {
    width: 13rem;
  margin-left: 6px;
}

}
  @media screen and (max-width:540px) {
.formunittwo {
    margin-top: 10px;
  margin-left: 0rem;
}
  .form-group.d-flex.align-items-start.flex-wrap {
    flex-direction: column;
}

}

</style>
          <body>

            <div class="header">
              <?php include '../header.php';?>
            </div>


            <div class="body-sec concalbody">
              

            
    <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4 class="mb-3">Conversion  Calculator</h4>
          </div>
          <div class="body-con">
            <p>A transformation number cruncher is an instrument or program that works with the change of estimations or amounts starting with one unit of estimation then onto the next. It wipes out the requirement for manual computations and gives speedy and exact outcomes. Change number crunchers are utilized in different fields, including science, designing, cooking, development, and regular day to day existence, where various units of estimation are normally experienced. 
            </p>
            <p>
            These mini-computers ordinarily highlight an easy to understand interface where clients can enter a worth in a particular unit and select the ideal unit to switch over completely to. The change mini-computer then applies the suitable transformation variable or equation to work out the changed over esteem. Some transformation number crunchers offer a great many units and estimation types, permitting changes for length, temperature,  
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
                  <h4>Conversion Calculator</h4>
                  <hr>
                    <div class="row">
                      <div class="col">
                        <div class="card mt-3 tab-card">
                          <div class="card-header tab-card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Length</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Temperture</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Area</a>
                                <li class="nav-item">
                                  <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">Volume</a></li>
                                <li class="nav-item">
                                  <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">Weight</a></li>

                            </ul>
                          </div>

                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

                              <div class="maincon">

                                <div class="form-group ">
                                  <label >Enter the value :</label>
                                  <input onkeyup="convert()" type="text" class="form-control" id="inputValue" placeholder="Enter Value" required>
                                </div>

                                <div class="form-group d-flex align-items-start flex-wrap">


                                  <div class="formunitone">
                                    <label >Enter the FromUnit :</label>
                                    <select onchange="convert()" class="form-select" aria-label="Default select example" id="fromUnit">
                                      <option value="">FromUnit</option>
                                      <option value="m">Meters (m)</option>
                                      <option value="km">Kilometers (km)</option>
                                      <option value="cm">Centimeters (cm)</option>
                                      <option value="mm">Millimeters (mm)</option>
                                      <option value="μm">Micrometers (μm)</option>
                                      <option value="nm">Nanometers (nm)</option>
                                      <option value="mi">Miles (mi)</option>
                                      <option value="in">Inches (in)</option>
                                      <option value="ly">Light-Years (ly)</option>
                                    </select>
                                  </div>
                                  <div class="formunittwo">
                                    <label >Enter the ToUnit :</label>
                                    <select onchange="convert()" class="form-select" aria-label="Default select example" id="toUnit">
                                      <option value="">ToUnit </option>
                                      <option value="m">Meters (m)</option>
                                      <option value="km">Kilometers (km)</option>
                                      <option value="cm">Centimeters (cm)</option>
                                      <option value="mm">Millimeters (mm)</option>
                                      <option value="μm">Micrometers (μm)</option>
                                      <option value="nm">Nanometers (nm)</option>
                                      <option value="mi">Miles (mi)</option>
                                      <option value="in">Inches (in)</option>
                                      <option value="ly">Light-Years (ly)</option>
                                    </select>
                                  </div>

                                </div>
                              </div>


                              <div class="bmicalbtn">
                                <button disabled onclick="convert()" id="calculateBtnunit" class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Calculate BMI
                                </button>
                              </div>

                              <div class="collapse" id="collapseExample">
                                <p class="bmires">#Result:</p>
                                <div class="card card-body">
                                  <div class="result" id="resultunit">

                                  </div>
                                </div>
                              </div>

                            </div>
                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">


                              <div class="maincon">


                                <div class="form-group ">
                                  <label >Enter the value :</label>
                                  <input onkeyup="converttemp()" type="text" class="form-control" id="inputValuetemp" placeholder="Enter Value" required>
                                </div>

                                <div class="form-group d-flex align-items-start flex-wrap">
                                  <div class="formunitonet">
                                    <label >Enter the FromUnit :</label>
                                    <select onchange="converttemp()" class="form-select" aria-label="Default select example" id="fromUnittemp">
                                      <option value="">FromTemperature</option>
                                      <option value="C">Celsius (°C)</option>
                                      <option value="F">Fahrenheit (°F)</option>
                                      <option value="K">Kelvin (K)</option>
                                    </select>
                                  </div>

                                  <div class="formunittwo">
                                    <label >Enter the ToUnit :</label>
                                    <select onchange="converttemp()" class="form-select" aria-label="Default select example" id="toUnittemp">
                                      <option value="">ToTemperature</option>
                                      <option value="C">Celsius (°C)</option>
                                      <option value="F">Fahrenheit (°F)</option>
                                      <option value="K">Kelvin (K)</option>
                                    </select>

                                  </div>
                                </div>
                              </div>


                              <div class="bmicalbtn">
                                <button disabled onclick="converttemp()" id="calculateBtntemp" class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExampletemp" aria-expanded="false" aria-controls="collapseExampletemp">
                                  Calculate BMI
                                </button>
                              </div>

                              <div class="collapse" id="collapseExampletemp">
                                <p class="bmires">#Result:</p>
                                <div class="card card-body">
                                  <div class="result" id="result_temp">

                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">


                              <div class="maincon">
                                <div class="form-group ">
                                  <label >Enter the value :</label>
                                  <input onkeyup="convertarea()" type="text" class="form-control" id="inputValuearea" placeholder="Enter Value" required>
                                </div>

                                <div class="form-group d-flex align-items-start flex-wrap">
                                  <div class="formunitonet">
                                    <label >Enter the FromUnit :</label>
                                    <select onchange="convertarea()" class="form-select" aria-label="Default select example" id="fromUnitarea">
                                      <option value="">From Area</option>
                                      <option value="square-meters">Square Meters</option>
                                      <option value="square-kilometers">Square Kilometers</option>
                                      <option value="hectares">Hectares</option>
                                      <option value="acres">Acres</option>
                                      <option value="square-feet">Square Feet</option>
                                      <option value="square-yards">Square Yards</option>
                                      <option value="square-miles">Square Miles</option>
                                    </select>
                                  </div>

                                  <div class="formunittwo">
                                    <label >Enter the ToUnit :</label>
                                    <select onchange="convertarea()" class="form-select" aria-label="Default select example" id="toUnitarea">
                                      <option value="">To Area</option>
                                      <option value="square-meters">Square Meters</option>
                                      <option value="square-kilometers">Square Kilometers</option>
                                      <option value="hectares">Hectares</option>
                                      <option value="acres">Acres</option>
                                      <option value="square-feet">Square Feet</option>
                                      <option value="square-yards">Square Yards</option>
                                      <option value="square-miles">Square Miles</option>
                                    </select>

                                  </div>
                                </div>
                              </div>


                              <div class="bmicalbtn">
                                <button disabled onclick="convertarea()" id="calculateBtnarea" class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExamplearea" aria-expanded="false" aria-controls="collapseExamplearea">
                                  Calculate BMI
                                </button>
                              </div>

                              <div class="collapse" id="collapseExamplearea">
                                <p class="bmires">#Result:</p>
                                <div class="card card-body">
                                  <div class="result" id="result_area">

                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">


                              <div class="maincon">
                                <div class="form-group ">
                                  <label >Enter the value :</label>
                                  <input onkeyup="convertvolume()" type="text" class="form-control" id="inputValuevolume" placeholder="Enter Value" required>
                                </div>

                                <div class="form-group d-flex align-items-start flex-wrap">
                                  <div class="formunitonet">
                                    <label >Enter the FromUnit :</label>
                                    <select onchange="convertvolume()" class="form-select" aria-label="Default select example" id="fromUnitvolume">
                                      <option value="">From Volume</option>
                                      <option value="cubic-meters">Cubic Meters</option>
                                      <option value="cubic-meters">Cubic Meters</option>
                                      <option value="cubic-kilometers">Cubic Kilometers</option>
                                      <option value="liters">Liters</option>
                                      <option value="milliliters">Milliliters</option>
                                      <option value="cubic-feet">Cubic Feet</option>
                                      <option value="cubic-inches">Cubic Inches</option>
                                      <option value="gallons">Gallons</option>
                                      <option value="quarts">Quarts</option>
                                      <option value="pints">Pints</option>
                                      <option value="cups">Cups</option>
                                      <option value="cubic-centimeters">Cubic Centimeters</option>
                                      <option value="cubic-millimeters">Cubic Millimeters</option>
                                      <option value="us-gallons">US Gallons</option>
                                      <option value="us-quarts">US Quarts</option>
                                      <option value="us-pints">US Pints</option>
                                      <option value="us-cups">US Cups</option>
                                      <option value="us-fluid-ounces">US Fluid Ounces</option>
                                      <option value="us-tablespoons">US Tablespoons</option>
                                      <option value="us-teaspoons">US Teaspoons</option>
                                      <option value="imperial-gallons">Imperial Gallons</option>
                                      <option value="imperial-quarts">Imperial Quarts</option>
                                      <option value="imperial-pints">Imperial Pints</option>
                                      <option value="imperial-fluid-ounces">Imperial Fluid Ounces</option>
                                      <option value="imperial-tablespoons">Imperial Tablespoons</option>
                                      <option value="imperial-teaspoons">Imperial Teaspoons</option>
                                      <option value="cubic-miles">Cubic Miles</option>
                                      <option value="cubic-yards">Cubic Yards</option>
                                      <option value="cubic-feet">Cubic Feet</option>
                                      <option value="cubic-inches">Cubic Inches</option>
                                    </select>
                                  </div>

                                  <div class="formunittwo">
                                    <label >Enter the ToUnit :</label>
                                    <select onchange="convertvolume()" class="form-select" aria-label="Default select example" id="toUnitvolume">

                                      <option value="">To Volume</option>
                                      <option value="cubic-meters">Cubic Meters</option>
                                      <option value="cubic-kilometers">Cubic Kilometers</option>
                                      <option value="liters">Liters</option>
                                      <option value="milliliters">Milliliters</option>
                                      <option value="cubic-feet">Cubic Feet</option>
                                      <option value="cubic-inches">Cubic Inches</option>
                                      <option value="gallons">Gallons</option>
                                      <option value="quarts">Quarts</option>
                                      <option value="pints">Pints</option>
                                      <option value="cups">Cups</option>
                                      <option value="cubic-centimeters">Cubic Centimeters</option>
                                      <option value="cubic-millimeters">Cubic Millimeters</option>
                                      <option value="us-gallons">US Gallons</option>
                                      <option value="us-quarts">US Quarts</option>
                                      <option value="us-pints">US Pints</option>
                                      <option value="us-cups">US Cups</option>
                                      <option value="us-fluid-ounces">US Fluid Ounces</option>
                                      <option value="us-tablespoons">US Tablespoons</option>
                                      <option value="us-teaspoons">US Teaspoons</option>
                                      <option value="imperial-gallons">Imperial Gallons</option>
                                      <option value="imperial-quarts">Imperial Quarts</option>
                                      <option value="imperial-pints">Imperial Pints</option>
                                      <option value="imperial-fluid-ounces">Imperial Fluid Ounces</option>
                                      <option value="imperial-tablespoons">Imperial Tablespoons</option>
                                      <option value="imperial-teaspoons">Imperial Teaspoons</option>
                                      <option value="cubic-miles">Cubic Miles</option>
                                      <option value="cubic-yards">Cubic Yards</option>
                                      <option value="cubic-feet">Cubic Feet</option>
                                      <option value="cubic-inches">Cubic Inches</option>
                                    </select>

                                  </div>
                                </div>
                              </div>


                              <div class="bmicalbtn">
                                <button disabled onclick="convertvolume()" id="calculateBtnvolume" class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExamplevolume" aria-expanded="false" aria-controls="collapseExamplevolume">
                                  Calculate BMI
                                </button>
                              </div>

                              <div class="collapse" id="collapseExamplevolume">
                                <p class="bmires">#Result:</p>
                                <div class="card card-body">
                                  <div class="result" id="result_volume">

                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">


                              <div class="maincon">
                                <div class="form-group ">
                                  <label >Enter the value :</label>
                                  <input onkeyup="convertweight()" type="text" class="form-control" id="inputValueweight" placeholder="Enter Value" required>
                                </div>

                                <div class="form-group d-flex align-items-start flex-wrap">
                                  <div class="formunitonet">
                                    <label >Enter the FromUnit :</label>
                                    <select onchange="convertweight()" class="form-select" aria-label="Default select example" id="fromUnitweight">
                                      <option value="">From Weight</option>
                                      <option value="kilograms">Kilograms</option>
                                      <option value="grams">Grams</option>
                                      <option value="milligrams">Milligrams</option>
                                      <option value="metric-tons">Metric Tons</option>
                                      <option value="long-tons">Long Tons</option>
                                      <option value="short-tons">Short Tons</option>
                                      <option value="pounds">Pounds</option>
                                      <option value="ounces">Ounces</option>
                                      <option value="carats">Carats</option>
                                      <option value="atomic-mass-units">Atomic Mass Units</option>
                                    </select>
                                  </div>

                                  <div class="formunittwo">
                                    <label >Enter the ToUnit :</label>
                                    <select onchange="convertweight()" class="form-select" aria-label="Default select example" id="toUnitweight">
                                      <option value="">To Weight</option>
                                      <option value="kilograms">Kilograms</option>
                                      <option value="grams">Grams</option>
                                      <option value="milligrams">Milligrams</option>
                                      <option value="metric-tons">Metric Tons</option>
                                      <option value="long-tons">Long Tons</option>
                                      <option value="short-tons">Short Tons</option>
                                      <option value="pounds">Pounds</option>
                                      <option value="ounces">Ounces</option>
                                      <option value="carats">Carats</option>
                                      <option value="atomic-mass-units">Atomic Mass Units</option>
                                    </select>

                                  </div>
                                </div>
                              </div>


                              <div class="bmicalbtn">
                                <button disabled onclick="convertweight()" id="calculateBtnweight" class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExampleweight" aria-expanded="false" aria-controls="collapseExampleweight">
                                  Calculate BMI
                                </button>
                              </div>

                              <div class="collapse" id="collapseExampleweight">
                                <p class="bmires">#Result:</p>
                                <div class="card card-body">
                                  <div class="result" id="result_weight">

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
            <p>In our regular routines and different fields, the need to switch estimations starting with one unit over completely then onto the next frequently emerges. Luckily, transformation number crunchers give a helpful arrangement, empowering exact and proficient changes. This blog entry investigates five fundamental transformation number crunchers: Length, Temperature, Region, Volume, and Weight. We will dig into every number cruncher, make sense of their importance, and give down to earth guides to work with a superior comprehension.</p>
            <h5>Length Conversion Calculator</h5>
            <p>The length transformation number cruncher works on the method involved with changing over estimations between various units like centimeters, inches, meters, and miles. Whether you want to change over creeps to centimeters for a sewing venture or convert kilometers to miles for an excursion, this mini-computer is crucial. We will examine the normally utilized change factors, give transformation equations, and present bit by bit guides to outline how to really utilize the length change adding machine.</p>
            <h5>Temperature Conversion Calculator </h5>
            <p>Temperature transformation is fundamental for understanding and looking at temperatures across changed scales, like Celsius, Fahrenheit, and Kelvin. Whether you're heating up, breaking down climate information, or leading logical trials, the temperature change number cruncher demonstrates priceless. We will investigate the transformation recipes, examine the connections between various temperature scales, and give viable guides to assist perusers with dominating temperature changes.</p>
            <h5>Area Conversion Calculator</h5>
            <p>The region transformation number cruncher works with the change of estimations between units like square meters, square feet, and sections of land. Whether you're purchasing a property, arranging a development undertaking, or working with land estimations, this mini-computer smoothes out the cycle. We will make sense of the change equations, dive into normal transformation factors, and give certifiable situations where the region transformation mini-computer becomes irreplaceable.</p>
            <h5>Volume Conversion Calculator</h5>
            <p>The volume transformation number cruncher permits easy change between units like liters, gallons, cubic meters, and cubic inches. Whether you're cooking, managing fluid amounts, or working in logical fields, it is fundamental to grasp volume changes. We will cover transformation recipes, investigate ordinarily utilized change factors, and give pragmatic guides to show the adaptability of the volume change adding machine.</p>
            <h5>Weight Conversion Calculator </h5>
            <p>The weight change number cruncher improves on the transformation of loads between units like kilograms, pounds, ounces, and metric tons. Whether you're following a recipe, transporting products, or leading logical examinations, the weight transformation number cruncher is crucial. We will examine change factors, make sense of the transformation equations, and give certifiable guides to show the useful use of the weight transformation mini-computer.</p>
            <h5>END:</h5>
            <p>Transformation number crunchers are important apparatuses that improve on the method involved with changing estimations starting with one unit over completely then onto the next. By understanding the ideas, transformation variables, and equations behind length, temperature, region, volume, and weight changes, people can certainly and precisely perform changes. These adding machines save time, lessen mistakes, and upgrade productivity across different fields and ordinary undertakings. Integrating change mini-computers into your work process enables you to work consistently with various estimation units, giving a smoother experience and guaranteeing exact computations.</p>
          </div>
          </div>
      </div>
      </div>

    </section>


            </div>
            <div class="footer">
              <?php include '../footer.php';?>



              <script>

                window.addEventListener('DOMContentLoaded', function() {
var metricTab = document.getElementById('one-tab');
                metricTab.click();
});
                function convert() {
var inputValue = document.getElementById("inputValue").value;
                var fromUnit = document.getElementById("fromUnit").value;
                var toUnit = document.getElementById("toUnit").value;
                var result = document.getElementById("resultunit");
                var calculateBtnunit = document.getElementById("calculateBtnunit");

                if(inputValue != '' && fromUnit !='' && toUnit !='')
                {

                  calculateBtnunit.disabled = false;

                // Define conversion factors
                var conversionFactors = {
                  m: {
                  m: 1,
                km: 0.001,
                cm: 100,
                mm: 1000,
                μm: 1000000,
                nm: 1000000000,
                mi: 0.000621371,
                in: 39.3701,
                ly: 1.057e-16
},
                km: {
                  m: 1000,
                km: 1,
                cm: 100000,
                mm: 1000000,
                μm: 1000000000,
                nm: 1000000000000,
                mi: 0.621371,
                in: 39370.1,
                ly: 1.057e-13
},
                cm: {
                  m: 0.01,
                km: 0.00001,
                cm: 1,
                mm: 10,
                μm: 10000,
                nm: 10000000,
                mi: 0.00000621371,
                in: 0.393701,
                ly: 1.057e-18
},
                mm: {
                  m: 0.001,
                km: 0.000001,
                cm: 0.1,
                mm: 1,
                μm: 1000,
                nm: 1000000,
                mi: 6.2137e-7,
                in: 0.0393701,
                ly: 1.057e-19
},
                μm: {
                  m: 0.000001,
                km: 1e-9,
                cm: 0.0001,
                mm: 0.001,
                μm: 1,
                nm: 1000,
                mi: 6.2137e-10,
                in: 0.0000393701,
                ly: 1.057e-22
},
                nm: {
                  m: 1e-9,
                km: 1e-12,
                cm: 1e-7,
                mm: 0.000001,
                μm: 0.001,
                nm: 1,
                mi: 6.2137e-13,
                in: 3.937e-8,
                ly: 1.057e-25
},
                mi: {
                  m: 1609.34,
                km: 1.60934,
                cm: 160934,
                mm: 1.609e+6,
                μm: 1.609e+9,
                nm: 1.609e+12,
                mi: 1,
                in: 63360,
                ly: 1.7011e-13
},
                in: {
                  m: 0.0254,
                km: 2.54e-5,
                cm: 2.54,
                mm: 25.4,
                μm: 25400,
                nm: 2.54e+7,
                mi: 1.5783e-5,
                in: 1,
                ly: 2.6848e-17
},
                ly: {
                  m: 9.461e+15,
                km: 9.461e+12,
                cm: 9.461e+17,
                mm: 9.461e+18,
                μm: 9.461e+21,
                nm: 9.461e+24,
                mi: 5.879e+12,
                in: 3.7249e+17,
                ly: 1
}
};

                // Perform the conversion
                var convertedValue = inputValue * conversionFactors[fromUnit][toUnit];

                // Display the result
                result.innerHTML = `
                ${inputValue} ${fromUnit} = ${convertedValue} ${toUnit} `;
}
                else
                {
                  calculateBtnunit.disabled = true;

}
}

                /// temperature

                function converttemp() {
var inputValue = document.getElementById("inputValuetemp").value;
                var fromUnit = document.getElementById("fromUnittemp").value;
                var toUnit = document.getElementById("toUnittemp").value;
                var result = document.getElementById("result_temp");
                var calculateBtntemp = document.getElementById("calculateBtntemp");

                // Perform the conversion

                if(inputValue !='' && fromUnit !='' && toUnit !='')
                {

                  calculateBtntemp.disabled = false;

                var convertedValue;

                if (fromUnit === "C") {
if (toUnit === "F") {
                  convertedValue = (inputValue * 9 / 5) + 32;
} else if (toUnit === "K") {
                  convertedValue = parseFloat(inputValue) + 273.15;
} else {
                  convertedValue = inputValue;
}
} else if (fromUnit === "F") {
if (toUnit === "C") {
                  convertedValue = (inputValue - 32) * 5 / 9;
} else if (toUnit === "K") {
                  convertedValue = (parseFloat(inputValue) + 459.67) * 5 / 9;
} else {
                  convertedValue = inputValue;
}
} else if (fromUnit === "K") {
if (toUnit === "C") {
                  convertedValue = parseFloat(inputValue) - 273.15;
} else if (toUnit === "F") {
                  convertedValue = (parseFloat(inputValue) * 9 / 5) - 459.67;
} else {
                  convertedValue = inputValue;
}
}

                // Display the result
                result.innerHTML = inputValue + " " + fromUnit + " = " + convertedValue + " " + toUnit;

}
                else
                {
                  calculateBtntemp.disabled = true;

}
}


                // area
                function convertarea()
                {
                 var inputArea = document.getElementById('inputValuearea').value;
                var fromUnit = document.getElementById('fromUnitarea').value;
                var toUnit = document.getElementById('toUnitarea').value;
                var outputArea = document.getElementById('result_area');
                var calculateBtnarea = document.getElementById('calculateBtnarea');

                if(inputArea !='' && fromUnit !='' && toUnit !='')
                {
                  calculateBtnarea.disabled = false;
                  var squareMeters = convertToSquareMeters(inputArea, fromUnit);
                  var result = convertFromSquareMeters(squareMeters, toUnit);
                 outputArea.innerHTML = inputArea + " " + fromUnit + " = " + result + " " + toUnit;
                }
                else
                {
                  calculateBtnarea.disabled = true;
                }

  
}

                function convertToSquareMeters(area, unit) {
  switch (unit) {
    case 'square-meters':
                return area;
                case 'square-kilometers':
                return area * 1000000;
                case 'hectares':
                return area * 10000;
                case 'acres':
                return area * 4046.86;
                case 'square-feet':
                return area * 0.092903;
                case 'square-yards':
                return area * 0.836127;
                case 'square-miles':
                return area * 2589988.11;
                case 'square-centimeters':
                return area * 0.0001;
                case 'square-millimeters':
                return area * 0.000001;
                case 'square-micrometers':
                return area * 0.0000000001;
                case 'square-inches':
                return area * 0.00064516;
  }
}

                function convertFromSquareMeters(area, unit) {
  switch (unit) {
    case 'square-meters':
                return area;
                case 'square-kilometers':
                return area / 1000000;
                case 'hectares':
                return area / 10000;
                case 'acres':
                return area / 4046.86;
                case 'square-feet':
                return area / 0.092903;
                case 'square-yards':
                return area / 0.836127;
                case 'square-miles':
                return area / 2589988.11;
                case 'square-centimeters':
                return area / 0.0001;
                case 'square-millimeters':
                return area / 0.000001;
                case 'square-micrometers':
                return area / 0.0000000001;
                case 'square-inches':
                return area / 0.00064516;
  }
}

                function convertvolume()
                {
                 var inputVolume = document.getElementById('inputValuevolume').value;
                var fromUnit = document.getElementById('fromUnitvolume').value;
                var toUnit = document.getElementById('toUnitvolume').value;
                var outputVolume = document.getElementById('result_volume');
                var calculateBtnvolume = document.getElementById('calculateBtnvolume');

                if(inputVolume != '' && fromUnit !='' && toUnit !='')
                {
                  calculateBtnvolume.disabled = false;
                  var cubicMeters = convertToCubicMeters(inputVolume, fromUnit);
                  var result = convertFromCubicMeters(cubicMeters, toUnit);
                  outputVolume.innerHTML = inputVolume + " " + fromUnit + " = " + result + " " + toUnit;
                }
                else
                {
                  calculateBtnvolume.disabled = true;
                }


}


                function convertToCubicMeters(volume, unit) {
              switch (unit) {
                case 'cubic-meters':
                return volume;
                case 'cubic-kilometers':
                return volume * 1000000000;
                case 'liters':
                return volume / 1000;
                case 'milliliters':
                return volume / 1000000;
                case 'cubic-feet':
                return volume / 35.3147;
                case 'cubic-inches':
                return volume / 61023.7;
                case 'gallons':
                return volume / 264.172;
                case 'quarts':
                return volume / 1056.69;
                case 'pints':
                return volume / 2113.38;
                case 'cups':
                return volume / 4166.67;
                case 'cubic-centimeters':
                return volume / 1000000;
                case 'cubic-millimeters':
                return volume / 1000000000;
                case 'us-gallons':
                return volume / 264.172;
                case 'us-quarts':
                return volume / 1056.69;
                case 'us-pints':
                return volume / 2113.38;
                case 'us-cups':
                return volume / 4166.67;
                case 'us-fluid-ounces':
                return volume / 33814;
                case 'us-tablespoons':
                return volume / 67628;
                case 'us-teaspoons':
                return volume / 202884;
                case 'imperial-gallons':
                return volume / 219.969;
                case 'imperial-quarts':
                return volume / 879.877;
                case 'imperial-pints':
                return volume / 1759.75;
                case 'imperial-fluid-ounces':
                return volume / 35195.1;
                case 'imperial-tablespoons':
                return volume / 56312.1;
                case 'imperial-teaspoons':
                return volume / 168936;
                case 'cubic-miles':
                return volume * 4168181825.4;
                case 'cubic-yards':
                return volume / 1.30795;
                case 'cubic-feet':
                return volume * 35.3147;
                case 'cubic-inches':
                return volume * 61023.7;
  }
}

                function convertFromCubicMeters(volume, unit) {
  switch (unit) {
    case 'cubic-meters':
                return volume;
                case 'cubic-kilometers':
                return volume / 1000000000;
                case 'liters':
                return volume * 1000;
                case 'milliliters':
                return volume * 1000000;
                case 'cubic-feet':
                return volume * 35.3147;
                case 'cubic-inches':
                return volume * 61023.7;
                case 'gallons':
                return volume * 264.172;
                case 'quarts':
                return volume * 1056.69;
                case 'pints':
                return volume * 2113.38;
                case 'cups':
                return volume * 4166.67;
                case 'cubic-centimeters':
                return volume * 1000000;
                case 'cubic-millimeters':
                return volume * 1000000000;
                case 'us-gallons':
                return volume * 264.172;
                case 'us-quarts':
                return volume * 1056.69;
                case 'us-pints':
                return volume * 2113.38;
                case 'us-cups':
                return volume * 4166.67;
                case 'us-fluid-ounces':
                return volume * 33814;
                case 'us-tablespoons':
                return volume * 67628;
                case 'us-teaspoons':
                return volume * 202884;
                case 'imperial-gallons':
                return volume * 219.969;
                case 'imperial-quarts':
                return volume * 879.877;
                case 'imperial-pints':
                return volume * 1759.75;
                case 'imperial-fluid-ounces':
                return volume * 35195.1;
                case 'imperial-tablespoons':
                return volume * 56312.1;
                case 'imperial-teaspoons':
                return volume * 168936;
                case 'cubic-miles':
                return volume / 4168181825.4;
                case 'cubic-yards':
                return volume * 1.30795;
                case 'cubic-feet':
                return volume / 35.3147;
                case 'cubic-inches':
                return volume / 61023.7;
  }
}

                // weight
                function convertweight()
                {
                  


                    var inputWeight = document.getElementById('inputValueweight').value;
                    var fromUnit = document.getElementById('fromUnitweight').value;
                    var toUnit = document.getElementById('toUnitweight').value;
                    var outputweight = document.getElementById('result_weight');
                    var calculateBtnweight = document.getElementById('calculateBtnweight');

                    if(inputWeight !='' && fromUnit !='' && toUnit !='')
                    {
                    calculateBtnweight.disabled = false;
                    var convertedWeight = convertToKilograms(inputWeight, fromUnit);
                    var result = convertFromKilograms(convertedWeight, toUnit);
                    outputweight.innerHTML = inputWeight + " " + fromUnit + " = " + result + " " + toUnit;
                    }
                    else{

                      calculateBtnweight.disabled = true;
                    }
                    

                  }

function convertToKilograms(weight, unit) {
  switch (unit) {
    case 'kilograms':
                return weight;
                case 'grams':
                return weight / 1000;
                case 'milligrams':
                return weight / 1000000;
                case 'metric-tons':
                return weight * 1000;
                case 'long-tons':
                return weight * 1016.05;
                case 'short-tons':
                return weight * 907.185;
                case 'pounds':
                return weight * 0.453592;
                case 'ounces':
                return weight * 0.0283495;
                case 'carats':
                return weight * 0.0002;
                case 'atomic-mass-units':
                return weight * 1.66054e-27;
  }
}

                function convertFromKilograms(weight, unit) {
  switch (unit) {
    case 'kilograms':
                return weight;
                case 'grams':
                return weight * 1000;
                case 'milligrams':
                return weight * 1000000;
                case 'metric-tons':
                return weight / 1000;
                case 'long-tons':
                return weight / 1016.05;
                case 'short-tons':
                return weight / 907.185;
                case 'pounds':
                return weight / 0.453592;
                case 'ounces':
                return weight / 0.0283495;
                case 'carats':
                return weight / 0.0002;
                case 'atomic-mass-units':
                return weight / 1.66054e-27;
  }
}



              </script>


              <script src="../index.js"></script>

          </body>
        </html>