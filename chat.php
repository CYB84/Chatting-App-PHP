<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>


<?php include_once "php/header.php"
 
 ?>
<body>
<div class="wrapper">
	<section class="chat">
		<header>
       <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
			<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
			<img src="php/images/<?php echo $row['img'] ?>" alt="">
			<div class="details">
				<span><?php echo $row['fname']. " " . $row['lname'] ?></span>
				<p><?php echo $row['status'] ?></p>
			
		</header>
		<div class="chat-box">
		
		</div>
		<form action="#" class="typing-area" autocomplete="off">
			<input type="text"  name="outgoing_id" value="<?php echo $_SESSION['unique_id'];?>" hidden>
			<input type="text" name="incoming_id" value="<?php echo $user_id;?>" hidden>
			<input type="text" name="message" placeholder="Type a Message...." style="color: black;">
			<button><i class="fab fa-telegram-plane"></i></button>
		</form>
	</section>
</div>
<script type="text/javascript">
	const form = document.querySelector(".typing-area"),
inputField = form.querySelector("input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit=(e) =>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest() // creating XML Object;
    xhr.open("POST", "php/chat.php",true);
    xhr.onload = ()=>{
            if(xhr.readyState===XMLHttpRequest.DONE){
              if(xhr.status === 200){
          		inputField.value ="";
          		scrollToBottom();
            
       }  
      }
    }

//sending form data through ajax to php
    let formData = new FormData(form); //new object
    xhr.send(formData); // sending the data 
}
chatBox.onmouseenter = ()=>{
	chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
	chatBox.classList.remove("active");
}
setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          
            chatBox.innerHTML = data;
            if (!chatBox.classList.contains("active")) {
            	scrollToBottom();
            }
          
        }
    }
  }
    let formData = new FormData(form); //new object
    xhr.send(formData); // sending the data 
 
}, 500);

function scrollToBottom(){
	chatBox.scrollTop = chatBox.scrollHeight;
}


</script>
</body>
</html>