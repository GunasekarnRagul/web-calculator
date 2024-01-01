<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
</head>
<link rel="stylesheet" href="../index.css">
<style>

.table-container::-webkit-scrollbar {
  width: 3px; /* Set the width of the scrollbar */
  height: 3px;
}

.table-container::-webkit-scrollbar-track {
  background: none; /* Set the background color of the scrollbar track */
}

.table-container::-webkit-scrollbar-thumb {
  background: #CCCCCC ; /* Set the color of the scrollbar thumb */
  border-radius: 6px; /* Set the border radius of the scrollbar thumb */
}

.table-container::-webkit-scrollbar-thumb:hover {
  background: #CCCCCC; /* Set the color of the scrollbar thumb on hover */
}
.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="number"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}




 .loanbody {
    background: #efedef;
    padding: 3rem 0rem;
}
.containers {
    max-width: 50rem;
  margin: 50px 0px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.one {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

}
.one .form-group {
    margin-left: 1rem;
}
form#loan-form {
    padding: 1rem 0rem;
}
.loanbtn {
    margin: 0.4rem 0rem 0.4rem 1rem;

}
.loanres {
    margin: 0px;
    padding: 10px;
}
.form-groups .one p
{
   margin: 0px;
   padding-left: 5px;
   color: #B8FFC8;


}

#loan_result {
    font-size: 16px;
    border-radius: 10px;
    background: #15171c;
    padding: 2rem 10px;
    color: white;
}
thead {
    color: #CCCCCC;
}
tbody#table-body {
    color: #B1C9FF;
}
.form-groups .one label {
   color: #CCCCCC;
}
td.year-cell {
    text-align: center;
    color: #FFC9B1;
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
@media screen and (max-width:500px) {
  .form-groups .one label {
   
    font-size: 13px;
}
    
    .loanbtn {
    margin: 0.4rem 0rem 0.4rem 0rem;
}
.loanbtn button {
    margin: 0.4rem 0rem 0.4rem 1rem;
}
}

.table-container {
  height: 35rem; /* Set the desired height */
  overflow-y: scroll; /* Enable vertical scrolling */
}
.table thead th {
  position: sticky;
  top: 0;
  background: #15171c;
 /* Set the background color for the sticky header */
  z-index: 1; /* Ensure the sticky header appears above the scrolling content */
}

@media screen and (max-width:668px) {

    .table thead th {

    font-size: 13px;
}
.table {
    width: 35rem !important;
}


}

div#idloanres {
    display: flex;
    flex-wrap: wrap;
    justify-content: end;
    margin-top: 1rem;

}    
div#idloanres p {
    margin-right: 2rem;
    color: #c0bdc0;
    font-weight: bold;
    margin-bottom: 3px;

}

.blogcontainers {
  max-width: 50rem;
  margin: 50px 0px 0px;


}
</style>

<body>
     
    <div class="header">
        <?php include '../header.php';?>
    </div>



    
  





    <div class="body-sec loanbody">


   
    

    <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4 class="mb-3">Loan Calculator</h4>
          </div>
          <div class="body-con">
            <p>A credit mini-computer is an easy to understand online instrument intended to assist people and organizations with evaluating the costs related with getting cash. 
            </p>
            <p>
            By taking into account factors, for example, the credit sum, financing cost, advance term, and extra expenses, an advance mini-computer gives a gauge of your regularly scheduled installments and the aggregate sum you'll reimburse over the credit term. With this data readily available, you can rapidly assess moderateness and contrast different advance choices with pursue an educated choice. 
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
    <h4>Loan Calculator</h4>
    <hr>
    <form id="loan-form">
        <div class="one">
      <div class="form-group">
        <label for="loan-amount">Loan Amount ($)</label>
        <input onkeyup="val()" type="number" class="form-control" id="loan-amount"  placeholder="Enter loan amount" required>
      </div>
      <div class="form-group">
        <label for="interest-rate">Interest Rate (%)</label>
        <input onkeyup="val()" type="text"  class="form-control" id="interest-rate" placeholder="Enter interest rate" required>
      </div>
      </div>
      <div class="one">
      <div class="form-group">
        <label for="loan-term">Loan Term (years)</label>
        <input onkeyup="val()" type="number"  class="form-control" id="loan-term" placeholder="Enter loan term" required>
      </div>
      </div>

      <div class="loanbtn">
    <button disabled id="loancalcula" class="btn btn-danger" type="submit" data-toggle="collapse" data-target="#loancal" aria-expanded="false" aria-controls="collapseExample">
  Calculate
  </button>
<div class="collapse" id="loancal">
    <p class="loanres">#Result:</p>
  <div class="card card-body">
  <div id="loan_result">
    <div class="first_res">
      <div class="first">
  <div class="form-groups">
    <div class="one">
   <label for="monthly-payment">Monthly Payment ($) :</label>
    <p id="monthly-payment" ></p>
    </div>
  </div>
   <div class="form-groups">
   <div class="one">
       <label for="total-interest">Total Interest Payable ($) :</label>
       <p id="total-interest" ></p>
   </div>
   </div>
<div class="form-groups">
   <div class="one">
  <label for="total-payment">Total Payment ($) :</label>
  <p id="total-payment" ></p>
</div>
</div>
</div>
</div>
<div class="two"></div>
<hr>

<div class="table-container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Monthly Payment ($)</th>
      <th scope="col">Principal ($)</th>
      <th scope="col">Interest ($)</th>
      <th scope="col">Remaining Amount ($)</th>
    </tr>
  </thead>
  <tbody id="table-body"></tbody>
</table>
  </div>
  <div id="idloanres">
   
  </div>
  </div>
  </div>
</div>
  </div>
    </form>
    </div>
  </div>

  
  <section>
      <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4 class="mb-3">Introduction</h4>
          </div>
          <div class="body-con">
            <p>In the present complex monetary scene, settling on informed conclusions about advances is pivotal for people and organizations the same. Whether you're wanting to fund a home, buy a vehicle, or put resources into your business' development, having an unmistakable comprehension of the expenses included is fundamental. 
            </p>
            <p>
            Luckily, with the appearance of credit number crunchers, exploring the getting scene has become fundamentally simpler. In this blog entry, we will investigate the advantages of utilizing a credit number cruncher and how it can help you in going with more brilliant monetary decisions. 
            </p>
            <h5 class="lh-sm">The Benefits of Utilizing a Credit Mini-computer:</h5>
            <p>Speed and Accommodation: Credit mini-computers wipe out the requirement for manual estimations and complex recipes. With only a couple of information sources and a tick of a button, you can get moment results, saving important time and exertion. This comfort permits you to easily investigate numerous acquiring situations.</p>
            <p>Precise Monetary Preparation: A credit mini-computer engages you to successfully design your funds more. By knowing the sum you really want to designate every month for credit reimbursement, you can make a far reaching spending plan and deal with your cash all the more productively. This empowers you to adjust your advance commitments to your by and large monetary objectives.</p>
            <p>Correlation Shopping: One of the main benefits of a credit number cruncher is the capacity to look at different credit choices one next to the other. By changing boundaries, for example, the credit sum, loan cost, or advance term, you can survey what each variable means for your regularly scheduled installments and in general advance expense. Furnished with this information, you can settle on very much educated choices and select the credit that best suits your necessities and inclinations.</p>
            <p>Moderateness Evaluation: Prior to focusing on a credit, deciding its similarity with your budget is pivotal. A credit number cruncher permits you to explore different avenues regarding various situations, changing the credit sum or term until you find a reimbursement plan that lines up with your monetary circumstance. This guarantees that you don't overstretch yourself monetarily and assists you with staying away from the entanglements of assuming extreme obligation.</p>
            <p>Picturing Long haul Expenses: Understanding the drawn out cost of a credit is imperative in assessing its effect on your monetary future. A credit mini-computer gives data on regularly scheduled installments as well as uncovers the all out reimbursement sum, including interest and expenses over the credit term. Furnished with this information, you can pursue more educated choices and precisely survey the genuine expense of acquiring. This assists you with assessing the moderateness and achievability of the credit over the long haul.</p>
            <h5>Utilizing a Loan Calculator:</h5>
            <p>Using a loan calculator is simple and user-friendly. Here's a step-by-step guide:</p>
            <p> Enter the advance sum you wish to get. This is the chief sum you really want for your expected reason, like buying a house or a vehicle, or financing an undertaking</p>
            <p>Determine the advance term in months or years. This alludes to the length over which you will reimburse the advance.</p>
            <p> Input the financing cost presented by the moneylender. The loan cost addresses the expense of getting and can altogether affect your regularly scheduled installments and generally speaking credit cost.</p>
            <p> Think about any extra expenses or charges, if material. A few credits might have start expenses, shutting costs, or different charges that should be figured into the estimations.</p>
            <p>Click 'Ascertain' or 'Figure' to get the outcomes. The credit number cruncher will furnish you with significant data, including the assessed regularly scheduled installment and the absolute reimbursement sum over the advance term.</p>
            <h5>End:</h5>
            <p>While examining a credit, bridling the force of an advance number cruncher is an insightful choice that works on the monetary arranging process. By giving exact evaluations and significant bits of knowledge, a credit mini-computer enables you to go with informed choices, select the right credit, and deal with your funds all the more really. With the capacity to look at choices, survey moderateness, and imagine long haul costs, a credit mini-computer turns into a significant device in exploring the getting scene. </p>
            <p>Thus, whenever you're thinking about getting, remember to use the advantages of a credit mini-computer to direct you toward a more splendid monetary future.</p>
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
  
  const loanAmountInput = document.getElementById('interest-rate');

loanAmountInput.addEventListener('keypress', function(e) {
  const keyCode = e.keyCode || e.which;
  const keyValue = String.fromCharCode(keyCode);

  // Allow numbers (0-9) and decimal point (.)
  if (!/^\d*\.?\d*$/.test(loanAmountInput.value + keyValue)) {
    e.preventDefault();
  }
});

function val()
{
  
    const loanAmount = document.getElementById('loan-amount').value.trim();
    const interestRate = document.getElementById('interest-rate').value.trim();
    const loanTerm = document.getElementById('loan-term').value.trim();
    const calculateButton = document.getElementById('loancalcula');

    if (loanAmount !== '' && interestRate !== '' && loanTerm !== '') {
 
      loancalcula.disabled = false;    
      calculateLoan();
      document.getElementById('loan-form').addEventListener('submit', function(e) {
       e.preventDefault();
       calculateLoan();
  
});
  }
  else
  {
  loancalcula.disabled = true;    
    
  }
}



function calculateLoan() {
  const amount = parseFloat(document.getElementById('loan-amount').value);
  const interestRate = parseFloat(document.getElementById('interest-rate').value) / 100;
  const term = parseFloat(document.getElementById('loan-term').value);

  const monthlyInterest = interestRate / 12;
  const months = term * 12;

  const monthlyPayment = (amount * monthlyInterest) / (1 - Math.pow(1 + monthlyInterest, -months));
  const totalPayment = monthlyPayment * months;
  const totalInterestPayable = totalPayment - amount;

  document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
  document.getElementById('total-interest').innerHTML = totalInterestPayable.toFixed(2);
  document.getElementById('total-payment').innerHTML = totalPayment.toFixed(2);

  // Generate table
  const tableBody = document.getElementById('table-body');
  tableBody.innerHTML = '';

  let remainingAmount = amount;
  let totalInterest = 0;
  let currentYear = 1;
  let currentMonth = 1;

  for (let i = 1; i <= months; i++) {
    const interest = remainingAmount * monthlyInterest;
    const principal = monthlyPayment - interest;
    remainingAmount -= principal;
    totalInterest += interest;

    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${currentMonth}</td>
      <td>${monthlyPayment.toFixed(2)}</td>
      <td>${principal.toFixed(2)}</td>
      <td>${interest.toFixed(2)}</td>
      <td>${remainingAmount.toFixed(2)}</td>
    `;
    tableBody.appendChild(row);

    if (i % 12 === 0 && i !== months) {
      const yearRow = document.createElement('tr');
      yearRow.innerHTML = `
        <td class="year-cell" colspan="5">#Year ${currentYear + 1}</td>
      `;
      tableBody.appendChild(yearRow);

      currentYear++;
    }

    currentMonth = (currentMonth % 12) + 1; // Increment current month, resetting to 1 after reaching 12
  }

  if (months % 12 !== 0) {
    const lastYearRow = document.createElement('tr');
    lastYearRow.innerHTML = `
      <td class="year-cell" colspan="5">#Year ${currentYear}</td>
    `;
    tableBody.appendChild(lastYearRow);
  }
  var idloanres = document.getElementById('idloanres');    
  idloanres.innerHTML = `
    <p>Total Interest Payable: ${totalInterest.toFixed(2)}</p>
    <p>Total Payment: ${totalPayment.toFixed(2)}</p>
  `;
 
}




    </script>
    <script src="../index.js"></script>


   
</body>
</html>