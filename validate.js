function numberValidation() { 
                var firstNumber = document.form.firstNumber.value; 
                var secNumber = document.form.secNumber.value; 
                if (isNaN(n)) { 
                    document.getElementById( 
                      "numberText").innerHTML = 
                      "Please enter Numeric value"; 
                    return false; 
                } else { 
                    document.getElementById( 
                      "numberText").innerHTML =  
                      "Numeric value is: " + n; 
                    return true; 
                } 
            } 