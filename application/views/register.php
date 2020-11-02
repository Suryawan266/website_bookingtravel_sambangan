<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="<?= site_url('Bookingtravel/kirim_data_register'); ?>" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="masukan username" name="nama"  required>

    <label for="email"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="masukan nama lengkap" name="nama_lengkap" required>

    <label for="email"><b>Password</b></label>
    <input type="password" placeholder="masukan password" name="password" required>

    <label for="email"><b>No Hp</b></label>
    <input type="text" placeholder="masukan no hp" name="no_hp"  required>

    <label for="psw"><b>Alamat</b></label>
    <input type="text" placeholder="masukan alamat" name="alamat"  required>

    <label for="psw-repeat"><b>Email</b></label>
    <input type="text" placeholder="masukan email" name="email"  required>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="<?= site_url('Login/index'); ?>">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
