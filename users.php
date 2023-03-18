<?php session_start();

	if (!isset($_SESSION['unique_id'])) {
		header("location :login.php");
	}
 ?>

<?php include_once "php/header.php";

?>
<body>
<div class="wrapper">
	<section class="users">
		<header>
<?php  


include_once "php/config.php";
$sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
	$row = mysqli_fetch_assoc($sql);
}

?>
<div class="content">
			<img src="php/images/<?php echo $row['img'] ?>" alt="">
				<div class="details">
					<span><?php echo $row['fname']. " " . $row['lname'] ?></span>
					<p><?php echo $row['status'] ?></p>
				</div>
			</div>
			<a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Log out</a>
		</header>
		<div class="search">
			<span class="text">Select an user to start chat</span>
			<input type="text" placeholder="Enter name to search">
			<button><i class="fas fa-search"></i></button>
		</div>
		<div class="users-list">
	
		</div>
	</section>
</div>
<script type="text/javascript">
	const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{

    let xhr = new XMLHttpRequest() // creating XML Object;
    xhr.open("GET", "php/user.php",true);
    xhr.onload = ()=>{
            if(xhr.readyState===XMLHttpRequest.DONE){
              if(xhr.status === 200){
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
               usersList.innerHTML = data;

                }

              }  
            }
    }
xhr.send();
},500);
</script>
</body>
</html>
