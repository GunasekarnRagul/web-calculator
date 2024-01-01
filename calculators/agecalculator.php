
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<link rel="stylesheet" href="../index.css">
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.containers {
    max-width: 50rem;
  margin: 50px 0px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.input-container {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="date"] {
  padding: 5px;
  width: 100%;
}

.agebtn  {
    margin: 15px 0px 0px 10px;
} 

label
{
    margin: 0px 0px 0px 10px;
}

#age-result , #ages-result {
    /* text-align: center; */
    /* font-weight: bold; */
    font-size: 18px;
    border-radius: 10px;
    background: #15171c;
    padding: 2rem 10px;
    color: white;
}

.agebody{
    padding: 3rem 0rem;

}
.m-t-25 {
    margin-left: 25px;
}
.agehead {
    margin: 1.5rem 0px;
}
.currdate {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.dropdowngivendate {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

}
.form-select {
    width: 6rem !important;
    margin-left: 10px;
    margin-top: 10px;
}
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
@media screen and (max-width:734px) {
    
    .m-t-25 {
    margin-left: 0px;
}
}
.what {
    margin-top: 3rem;
}
.what h5{
    font-size: 25px;
}
.howitsworks h5
{
    font-size: 25px;
}
@media screen and (max-width:500px) {
    .agebtn {
    margin: 15px 0px 0px 0px;
}
#age-result , #ages-result {
    font-size: 15px;
    padding: 2rem 10px;

}
label {
    margin: 0px 0px 0px 0px;
}
.form-select {
    width: 6rem !important;
    margin-left: 7px;
    margin-top: 10px;
}
}
@media screen and (max-width:768px) {

.m-t-25 {
    margin-left: 0px;
}
}

</style>
<body>
   
    <div class="header">
        <?php include '../header.php';?>
    </div>

    <div class="body-sec agebody">


        

    <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4 class="mb-3">Age Calculator</h4>
          </div>
          <div class="body-con">
        <p>An age mini-computer is a device or program that works out an individual's age in light of their date of birth and the ongoing date. It takes the contribution of the individual's date of birth and ascertains the quantity of years, months, and days that have passed since their introduction to the world. The age number cruncher represents jump years and changes the estimation in like manner. It is a helpful instrument for rapidly deciding somebody's age without physically computing it.</p>
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
    <h4>Age Calculator</h4>
    <hr>  
   
    
    <h5 class="agehead" for="">Calculate To Current Date:</h5>
    <div class="currdate"> 
      <div class="input-container">
           <label for="dob">Date of Birth:</label>
           <div class="dropdowngivendate">
      <select class="form-select" aria-label="Default select example" id="dob-day-one" onchange="calculategivenAge()">
        <option value="">Day</option>
        <!-- Add options for day -->
        <script>
          const daySelectone = document.getElementById('dob-day-one');
          for (let day = 1; day <= 31; day++) {
          const option = document.createElement('option');
            option.value = day;
            option.textContent = day;
            daySelectone.appendChild(option);
}
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-month-one" onchange="calculategivenAge()">
        <option value="">Month</option>
        <!-- Add options for month -->
        <script>
          const monthsone = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
          ];
          const monthSelectone = document.getElementById('dob-month-one');

          for (let month = 1; month <= 12; month++) {
             const option = document.createElement('option');
             option.value = month;
             option.textContent = monthsone[month - 1];
             monthSelectone.appendChild(option);
           }           
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-year-one" onchange="calculategivenAge()">
        <option value="">Year</option>
        <!-- Add options for year -->
        <script>
          const currentYearone = new Date().getFullYear();
          const yearSelectone = document.getElementById('dob-year-one');

        
                for (let year = 1800; year <= 2100; year++) {
               const option = document.createElement('option');
               option.value = year;
               option.textContent = year;
               yearSelectone.appendChild(option);
}
        </script>
      </select>
      </div>
    </div>

    <div class="input-container m-t-25">
      <label for="currentDate">Current Date:</label>
      <div class="dropdowngivendate">
      <select class="form-select" aria-label="Default select example" id="dob-day-two" onchange="calculategivenAge()">
        <option value="">Day</option>
        <!-- Add options for day -->
        <script>
          const daySelecttwo = document.getElementById('dob-day-two');
          let dayOptions = '';
          for (let day = 1; day <= 31; day++) {
             dayOptions += `<option value="${day}">${day}</option>`;
             }
             daySelecttwo.innerHTML = `<option value="">Day</option>${dayOptions}`;
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-month-two" onchange="calculategivenAge()">
        <option value="">Month</option>
        <!-- Add options for month -->
        <script>
          const monthSelecttwo = document.getElementById('dob-month-two');
          const monthstwo = [
          "January", "February", "March", "April", "May", "June",
           "July", "August", "September", "October", "November", "December"
                           ];
           let monthOptionstwo = '';
          for (let month = 1; month <= 12; month++) {
                 monthOptionstwo += `<option value="${month}">${monthstwo[month - 1]}</option>`;
               }

               monthSelecttwo.innerHTML = `<option value="">Month</option>${monthOptionstwo}`;
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-year-two" onchange="calculategivenAge()">
        <option value="">Year</option>
        <!-- Add options for year -->
        <script>
         const currentYeartwo = new Date().getFullYear();
         const yearSelecttwo = document.getElementById('dob-year-two');
        let yearOptionstwo = '';
          for (let year = 1800; year <= 2100; year++) {
             yearOptionstwo += `<option value="${year}">${year}</option>`;
            }
            yearSelecttwo.innerHTML = `<option value="">Year</option>${yearOptionstwo}`;
        </script>
      </select>
      </div>
    </div>
    </div>
    
<div class="agebtn">
  <button id="calbtnone" disabled class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Calculate
  </button>
</p>
<div class="collapse" id="collapseExample">
    <p>#Result:</p>
  <div class="card card-body">
  <div id="ages-result"></div>
  </div>
</div>
</div>

    <h5 class="agehead" for="">Calculate to Given Date:</h5>
    <div class="input-container">
      <label for="dob-day">Date of Birth:</label>
      <div class="dropdowngivendate">
      <select class="form-select" aria-label="Default select example" id="dob-day-three" onchange="calculateAge()">
        <option value="">Day</option>
        <!-- Add options for day -->
        <script>
          const daySelect = document.getElementById('dob-day-three');
        for (let day = 1; day <= 31; day++) {
              const option = document.createElement('option');
               option.value = day;
               option.textContent = day;
               daySelect.appendChild(option);
}
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-month-three" onchange="calculateAge()">
        <option value="">Month</option>
        <!-- Add options for month -->
        <script>
          const monthSelect = document.getElementById('dob-month-three');
          const monthsthree = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
          ];

          for (let month = 1; month <= 12; month++) {
               const option = document.createElement('option');
               option.value = month;
                option.textContent = monthsthree[month - 1];
               monthSelect.appendChild(option);
}
        </script>
      </select>
      <select class="form-select" aria-label="Default select example" id="dob-year-three" onchange="calculateAge()">
        <option value="">Year</option>
        <!-- Add options for year -->
        <script>
          const yearSelect = document.getElementById('dob-year-three');
          const currentYearthree = new Date().getFullYear();

          for (let year = 1800; year <= 2100; year++) {
           const option = document.createElement('option');
             option.value = year;
             option.textContent = year;
             yearSelect.appendChild(option);
}
        </script>
      </select>
      </div>
    </div>

    <div class="agebtn">
    <button id="calbtnthree" disabled onclick="calculateAge()" class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExampleone" aria-expanded="false" aria-controls="collapseExample">
  Calculate
  </button>
<div class="collapse" id="collapseExampleone">
    <p class="loanres mt-3">#Result:</p>
  <div class="card card-body">
  <div id="age-result"></div>
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
          <p>Time is an always present power that shapes our lives in different ways. As we explore through life's excursion, it becomes captivating to investigate the idea old enough and the progression of time. In this edifying blog entry, we will dig into the captivating universe old enough estimation and how an age mini-computer can assist with disentangling the secrets of time. Go along with us as we set out on an enamoring investigation old enough, its importance, and the pragmatic utilizations of an age number cruncher.</p>
          <h5>Figuring out Age:</h5>
          <p>Characterizing Age:</p>
          <p>Age alludes to the timeframe an individual has lived from their date of birth until the current second. It is a crucial part of human life, impacting our encounters, improvement, and cultural jobs.</p>
          <p> Estimating Age:</p>
          <p>Age is normally estimated in years, yet it can likewise be communicated in months, weeks, days, hours, minutes, and even seconds, contingent upon the degree of accuracy required. Various societies and social orders have their own particular manners of characterizing and celebrating age achievements.</p>
          <h5>The Meaning Old enough Computation:</h5>
          <p>Individual Achievements:</p>
          <p>Age computation assists us with celebrating critical achievements in our lives, like birthday events, commemorations, and other exceptional events. It permits us to think about our accomplishments, development, and the progression of time.</p>
          <h5> Formative Benchmarks:</h5>
          <p>Age fills in as a source of perspective point for evaluating physical, mental, profound, and social turn of events. It empowers guardians, teachers, and medical services experts to follow progress, distinguish likely deferrals, and offer suitable help and mediations.</p>
          <p>Lawful and Social Ramifications:</p>
          <p>Progress in years frequently conveys legitimate and social importance. It decides qualification for different freedoms, honors, and obligations, like democratic, driving, drinking liquor, marriage, and retirement.</p>
          <h5>Presenting the Age Mini-computer:</h5>
          <p> Reason and Usefulness:</p>
          <p>An age mini-computer is a convenient instrument intended to precisely work out an individual's age in view of their date of birth and the current date. It mechanizes the computation cycle, saving time and limiting the potential for mistake.</p>
          <p>Convenience:</p>
          <p>Age mini-computers are easy to use, expecting clients to enter their date of birth and the ongoing date. When the necessary data is placed, the number cruncher quickly registers the exact age and presents the outcome in years, months, and days.</p>
          <p>Adaptability:</p>
          <p>Age mini-computers can take special care of different requirements and settings. They can ascertain individual ages, decide the age contrast between two people, or even gauge the period of verifiable figures or occasions.</p><h5>Down to earth Uses of the Age Adding machine:</h5>
          <p>Individual Reflection:
          </p>
          <p>Utilizing an age adding machine permits people to think about their excursion through life, appreciate their achievements, and put forth objectives for what's in store. It can act as a wellspring of inspiration, mindfulness, and self-awareness.</p>
          <p>Medical care and Wellbeing:</p>
          <p>In medical services settings, age computation assists clinical experts with evaluating patient wellbeing, decide fitting therapy plans, and track progress after some time. Age is a critical consider recognizing age-related wellbeing dangers and fitting mediations as needs be.</p>
          <p>Monetary Preparation:</p>
          <p>Age assumes a fundamental part in monetary preparation, retirement reserve funds, and speculation methodologies. A precise comprehension old enough permits people to arrive at informed conclusions about retirement reserves, insurance contracts, and long haul monetary objectives.</p>
          <p>Family history and Authentic Exploration:</p>
          <p>Age computation is a priceless apparatus in parentage research, helping follow family heredity, distinguish authentic figures' birthdates, and lay out timetables for verifiable occasions. It adds to a more profound comprehension of our legacy and shared history.</p>
          <h5>Age and the Intricacies of Life:</h5>
          <p>Mature as a Liquid Idea:</p>
          <p>While age is frequently connected with sequential time, it is vital to recognize that valuable encounters, self-improvement, and natural elements add to individual contrasts in physical and mental turn of events.</p>
          <p>Ageism and Generalizing:</p>
          <p>Society's obsession with age can now and then prompt age-related generalizations and segregation. It is fundamental for challenge these generalizations and worth people in view of their special capacities, encounters, and commitments, paying little heed to progress in years.</p>
          <h5>End:</h5>
          <p>The idea old enough is an intriguing part of the human experience. Age computation gives bits of knowledge into individual achievements, advancement, and legitimate ramifications. With the guide of an age number cruncher, we can easily work out our age, working with individual reflection, medical care arranging, monetary navigation, and verifiable examination. As we keep on exploring the complexities of time and age, let us embrace the different encounters and intelligence that accompany each spending year, engaging us to lead satisfying lives and make significant commitments to our general surroundings.</p>

          </div>
          </div>
      </div>
      </div>

    </section>
    </div>
    </div>

  


    <div class="footer">
    <?php include '../footer.php';?>
    </div>
    <script>
        function calculateAge() {

           
            var dob_day_three = document.getElementById('dob-day-three').value;
            var dob_month_three = document.getElementById('dob-month-three').value;
            var dob_year_three = document.getElementById('dob-year-three').value;
            var calbtnthree = document.getElementById('calbtnthree');
            if(dob_day_three != '' && dob_month_three != '' && dob_year_three !='')
            {   
                calbtnthree.disabled = false;
                var today = new Date();
  var birthDate = new Date(dob_year_three, dob_month_three - 1, dob_day_three);

  var years = today.getFullYear() - birthDate.getFullYear();
  var months = today.getMonth() - birthDate.getMonth();
  var days = today.getDate() - birthDate.getDate();

  // Adjust for negative months or days
  if (months < 0 || (months === 0 && today.getDate() < birthDate.getDate())) {
    years--;
    months += 12;
  }
  if (days < 0) {
    months--;
    days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
  }

  var ageText = '';
  ageText += years + ' years ';
  ageText += months + ' months ';
  ageText += days + ' days';

  var ageMonths = years * 12 + months;
  var ageWeeks = Math.floor((today - birthDate) / (1000 * 60 * 60 * 24 * 7));
  var ageDays = Math.floor((today - birthDate) / (1000 * 60 * 60 * 24));
  var ageHours = Math.floor((today - birthDate) / (1000 * 60 * 60));
  var ageMinutes = Math.floor((today - birthDate) / (1000 * 60));
  var ageSeconds = Math.floor((today - birthDate) / 1000);

  var ageMonthsText = ageMonths + ' months ' + days + ' days';
  var ageWeeksText = ageWeeks + ' weeks ' + days + ' days';
  var ageDaysText = ageDays + ' days';
  var ageHoursText = ageHours + ' hours';
  var ageMinutesText = ageMinutes + ' minutes';
  var ageSecondsText = ageSeconds + ' seconds';

  document.getElementById('age-result').innerHTML = 'Age: ' + ageText + '<br>' + '<hr>';
  document.getElementById('age-result').innerHTML += 'or ' + ageMonthsText + '<br>';
  document.getElementById('age-result').innerHTML += 'or ' + ageWeeksText + '<br>';
  document.getElementById('age-result').innerHTML += 'or ' + ageDaysText + '<br>';
  document.getElementById('age-result').innerHTML += 'or ' + ageHoursText + '<br>';
  document.getElementById('age-result').innerHTML += 'or ' + ageMinutesText + '<br>';
  document.getElementById('age-result').innerHTML += 'or ' + ageSecondsText;
 
}
else
{
    calbtnthree.disabled = true;
}
}


function calculategivenAge()
{
            var dob_day_one = document.getElementById('dob-day-one').value;
            var dob_month_one = document.getElementById('dob-month-one').value;
            var dob_year_one = document.getElementById('dob-year-one').value;

            var dob_day_two = document.getElementById('dob-day-two').value;
            var dob_month_two = document.getElementById('dob-month-two').value;
            var dob_month_two = document.getElementById('dob-year-two').value;

            var calbtnone = document.getElementById('calbtnone');
            if(dob_day_one != '' && dob_month_one != '' && dob_year_one !=''
             && dob_day_two && dob_month_two && dob_month_two )
            {   
                calbtnone.disabled = false;

 var selectedDay = document.getElementById('dob-day-one').value;
  var selectedMonth = document.getElementById('dob-month-one').value;
  var selectedYear = document.getElementById('dob-year-one').value;

  var givenDay = document.getElementById('dob-day-two').value;
  var givenMonth = document.getElementById('dob-month-two').value;
  var givenYear = document.getElementById('dob-year-two').value;

  var birthDate = new Date(selectedYear, selectedMonth - 1, selectedDay);
  var givenDate = new Date(givenYear, givenMonth - 1, givenDay);

  var ageInMilliseconds = givenDate - birthDate;
  var ageInSeconds = Math.floor(ageInMilliseconds / 1000);
  var ageInMinutes = Math.floor(ageInSeconds / 60);
  var ageInHours = Math.floor(ageInMinutes / 60);
  var ageInDays = Math.floor(ageInHours / 24);
  var ageInWeeks = Math.floor(ageInDays / 7);
  var ageInMonths = Math.floor(ageInDays / 30.436875);
  var ageInYears = Math.floor(ageInDays / 365.25);

  var result = `Age: `;
  result += `${ageInYears} years ${ageInMonths % 12} months ${ageInDays % 30} days<br><hr>`;
  result += `or ${ageInMonths} months ${ageInDays} days<br>`;
  result += `or ${ageInWeeks} weeks ${ageInDays % 7} days<br>`;
  result += `or ${ageInDays} days<br>`;
  result += `or ${ageInHours} hours<br>`;
  result += `or ${ageInMinutes} minutes<br>`;
  result += `or ${ageInSeconds} seconds`;
  document.getElementById('ages-result').innerHTML = result;

            }
            else
            {
                calbtnone.disabled = true;
            }
            
          
            return;
}
    </script>
    <script src="../index.js"></script>
</body>
</html>