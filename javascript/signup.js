const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");
errorText = form.querySelector(".error-txt");
form.onsubmit = (e)=> {
    e.preventDefault();
}


continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); // creating XML Object;
    xhr.open("POST", "php/signup.php",true);
    xhr.onload = ()=>{
            if(xhr.readyState===XMLHttpRequest.DONE){
              if(xhr.status === 200){
                let data = xhr.response;
                if (data == "success") {
                    location.href = "/chat/users.php";
                }
                else{
                    errorText.textContent = data;
                    errorText.style.display = "block";

                }
              }  
            }
    }

//sending form data through ajax to php
    let formData = new FormData(form); //new object
    xhr.send(formData); // sending the data 
}