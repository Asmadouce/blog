
    function myFunction() 
    {
        var x = document.getElementById("myInput");
        var eye = document.getElementById("eye");
        var eyeHidden = document.getElementById("eyeHidden");
        if (x.type === "password") {
          x.type = "text";        
          eye.style.display = "block";
          eyeHidden.style.display = "none";
        } else {
          x.type = "password";
          eye.style.display = "none";
          eyeHidden.style.display = "block";
        }
    } 


