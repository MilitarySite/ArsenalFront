<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../css/loginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="login.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <div class="scroll-down">SCENDI GIU'
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
    </svg></div>
    <div class="container"></div>
    <div class="modal">
      <div class="modal-container">
        <div class="modal-left">
          <h1 class="modal-title">Admin Login</h1>
          <p class="modal-desc">Sei un amministratore? Inserisci le tue credenziali e accedi alle parti segrete del sito ;)</p>
          <div class="input-block">
            <label for="email" class="input-label">Username</label>
            <input type="name" name="uname"  placeholder="Username">
          </div>
          <div class="input-block">
            <label for="password" class="input-label">Password</label>
            <input type="password" name="password"  placeholder="Password">
          </div>
          <div class="modal-buttons">
            <button class="input-button" type="submit">Login</button>
            <a href="../index.php" class="input-button">Home</a>
          </div>
          
        </div>
        <div class="modal-right">
          <img src="https://cdn.discordapp.com/attachments/1198254784948474006/1198322500719878144/istockphoto-847891348-612x612.jpg?ex=65be7bcb&is=65ac06cb&hm=072b67089fc6e77f0077fda305f8a179acab11222bf2e520683774530e2ffdc1&" alt="">
        </div>
        <a href="loginpage.php" class="icon-button">X</a>
    </svg>
      </div>
    </div>

</form>
    

  <script  src="../js/logscript.js"></script>

</body>
</html>
