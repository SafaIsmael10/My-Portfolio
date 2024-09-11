document.getElementById("cardnumber").addEventListener("input", function (event) 
{
    var cardNumberInput = event.target;
    var value = cardNumberInput.value.replace(/\D/g, ""); // Remove non-numeric characters

    if (value.length === 16) 
    {
        cardNumberInput.style.borderColor = ""; // Reset border color
    } 
    else 
    {
        cardNumberInput.style.borderColor = "#FF0000"; // Highlight in red
    }
});

document.getElementById("expirydate").addEventListener("input", function (event) 
{
    var expiryDateInput = event.target;
    var value = expiryDateInput.value;

    // Validate the format using a regular expression
    if (/^\d{2}\/\d{4}$/.test(value)) 
    {
        expiryDateInput.style.borderColor = ""; // Reset border color
    } 
    else 
    {
        expiryDateInput.style.borderColor = "FF0000"; // Highlight in red
    }
});

document.getElementById("cvv").addEventListener("input", function (event) 
{
    var cvvInput = event.target;
    var value = cvvInput.value.replace(/\D/g, ""); // Remove non-numeric characters

    if (value.length === 3 || value.length === 4) 
    {
        cvvInput.style.borderColor = ""; // Reset border color
    } 
    else 
    {
        cvvInput.style.borderColor = "#FF0000"; // Highlight in red
    }
});