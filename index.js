
window.addEventListener('DOMContentLoaded', (event) => {
  // document.getElementById('result').focus();

});

function burclick() {



  var burger_click = document.getElementById("burger");
  var list = document.getElementById("drawer");


  if (burger_click.style.border === "none") {

    burger_click.style.border = "1px solid #DFF6FF";
    list.style.left = "0rem";
  } else {
    burger_click.style.border = "none";
    list.style.left = "-16rem";




  }


}

var history;



function appendChar(char) {

  if (char === '*') {
    char = 'X';
  }

  if (char === '/') {
    char = '÷';
  } 

  
  if (char === '^') {
    char = '**';
  } 
  
  document.getElementById('result').value += char;

  
}

function clearResult() {
  document.getElementById('result').value = '';
}

function deleteLastChar() {
  var result = document.getElementById('result').value;
  document.getElementById('result').value = result.slice(0, -1);
}

function calculate() {
  var result = document.getElementById('result').value;
  result = result.replace(/X/g, '*');
  result = result.replace(/÷/g, '/');
  try {
    var answer = eval(result);
    document.getElementById('result').value = answer;

  } catch (error) {
    alert('Invalid input!');
  }
  displayCalculation(result, answer);
}

function displayCalculation(expression, result) {

  var historyElement = document.getElementById('history');

  // historyElement.innerHTML = '<p>'+ expression + result + '</p>';
}
function calculateTrigFunction(func) {
  var result = document.getElementById('result').value;
  try {
    var radians = eval(result);
    var degrees = radians * (180 / Math.PI);

    var trigResult;
    switch (func) {
      case 'sin':
        trigResult = Math.sin(radians);
        break;
      case 'cos':
        trigResult = Math.cos(radians);
        break;
      case 'tan':
        trigResult = Math.tan(radians);
        break;
    }

    document.getElementById('result').value = trigResult;
  } catch (error) {
    alert('Invalid input!');
  }
}

function calculateSquareRoot() {
  var result = document.getElementById('result').value;
  try {
    var number = eval(result);
    var squareRoot = Math.sqrt(number);
    document.getElementById('result').value = squareRoot;
  } catch (error) {
    alert('Invalid input!');
  }
}



function calculateLogarithm() {
  var result = document.getElementById('result').value;
  try {
    var number = eval(result);
    var logarithm = Math.log(number);
    document.getElementById('result').value = logarithm;
  } catch (error) {
    alert('Invalid input!');
  }
}


function calculateFactorial() {
  var resultInput = document.getElementById('result');
  var result = resultInput.value;

  try {
    var number = eval(result);

    if (isNaN(number) || number < 0 || !Number.isInteger(number)) {
      throw "Please enter a non-negative integer.";
    }

    var factorial = 1;
    for (var i = number; i >= 1; i--) {
      factorial *= i;
    }

    resultInput.value = factorial;
  } catch (error) {
    alert("!Invalid input");
  }
}





// Function to handle keyboard input
function handleKeyDown(event) {
  var key = event.key;
  if (key === 'Backspace' || key === 'Delete') {
    deleteLastChar();
  } else if (key === 'ArrowLeft') {
    event.preventDefault();
    moveInputIndicator('left');
  } else if (key === 'ArrowRight') {
    event.preventDefault();
    moveInputIndicator('right');
  }
}

function handleKeyPress(event) {
  var char = event.key;
  if (char === 'Enter' || char == '= ') {
    calculate();
  } else if (
    char.match(/[0-9]|[\+\-\*\/\(\)\.\s]|Delete/i) &&
    char !== ' '
  ) {
    appendChar(char);
  } else {
    event.preventDefault();
  }
}

// Function to show input indicator when the result input is clicked
function showInputIndicator() {
  var resultInput = document.getElementById('result');
  resultInput.focus();
  resultInput.setSelectionRange(0, resultInput.value.length);
}

// Function to move the input indicator left or right based on the arrow key
function moveInputIndicator(direction) {
  var resultInput = document.getElementById('result');
  var selectionStart = resultInput.selectionStart;

  if (direction === 'left') {
    if (selectionStart > 0) {
      resultInput.setSelectionRange(selectionStart - 1, selectionStart - 1);
    }
  } else if (direction === 'right') {
    if (selectionStart < resultInput.value.length) {
      resultInput.setSelectionRange(selectionStart + 1, selectionStart + 1);
    }
  }
}



document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 

