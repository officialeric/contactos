<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos | Account registration</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body class='body' >
<form action='includes/rp.php' method='post' class='shadow-lg p-3'>
    <h3 class="mb-3 text-primary">Sign Up Form</h3>
    <hr>
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name='name' placeholder='John Doe' required>
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Your Contact</label>
        <input type="text" class="form-control" id="number" name='contact' placeholder='Start with 255' required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='email' placeholder='example@gmail.com' required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name='password' required>
    </div>
    
    <button type="submit" name='register' class="btn btn-primary">Register Account</button>
    <p class="mt-3">Already have an account? <a href="login.php">Log in</a></p>
</form>

<!-- boostrap js -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>