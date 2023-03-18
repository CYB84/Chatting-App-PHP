const form = document.querySelector(".typing-area"),
inputField = form.querySelector("input-field"),
sendBtn = form.querySelector("button");

form.onsubmit=(e) =>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest() // creating XML Object;
    xhr.open("POST", "php/chat.php",true);
    xhr.onload = ()=>{
            if(xhr.readyState===XMLHttpRequest.DONE){
              if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if (data == "success") {
                    location.href="users.php";
                }else  {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            
       }  
      }
    }

//sending form data through ajax to php
    let formData = new FormData(form); //new object
    xhr.send(formData); // sending the data 
}