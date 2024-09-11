window.onload = function() 
{
    function displayContent(className, content) 
    {
        var element = document.querySelector("." + className);
        if (element) 
        {
            element.innerHTML = content;
        }
    }
    //<img src='../images/homeIcon.jpg' alt='Home Icon'></img> can be used for home icon
    displayContent("logo", "<img src='../images/medkitLogo.png' alt='logo-image' style='height: 75px; width: 100px;'/>");
    displayContent("home", "<button onclick='window.location.href=\"homePatient_C.php\"'>Home</button>");
    displayContent("dochome", "<button onclick='window.location.href=\"homeDoctor_C.php\"'>Home</button>");
    displayContent("contact", "<p>Contact Us<br>Phone: 01234567891<br>Email: medkit@gmail.com</p>", "text-align: center; color: white;");
};