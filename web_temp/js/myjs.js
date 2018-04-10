
	 function unhide(str)
    {
        if(str=='2')
        {
            document.getElementById("web_design").style.display="block";
            //document.getElementById("all").style.display="none";
            document.getElementById("app_development").style.display="none";
            document.getElementById("branding").style.display="none";
            document.getElementById("workshop").style.display="none";
        }
         else if(str=='3')
        {
            document.getElementById("app_development").style.display="block";
            //document.getElementById("all").style.display="none";
            document.getElementById("web_design").style.display="none";
            document.getElementById("branding").style.display="none";
            document.getElementById("workshop").style.display="none";
        }
         else if(str=='4')
        {
            document.getElementById("branding").style.display="block";
            //document.getElementById("all").style.display="none";
            document.getElementById("web_design").style.display="none";
            document.getElementById("app_development").style.display="none";
            document.getElementById("workshop").style.display="none";
        }

        else if (str=='5') 
        {
            document.getElementById("workshop").style.display="block";
            document.getElementById("branding").style.display="none";
            //document.getElementById("all").style.display="none";
            document.getElementById("web_design").style.display="none";
            document.getElementById("app_development").style.display="none";
        }
    }
