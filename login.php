<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="description" content="Login Page" >
  <meta name="keywords" content="PHP, HTML Login page" >
  <meta name="author" content="Ryan Fu"  >
  <title>Login Page</title>
  <?php include 'header.inc'; ?>
</head>
<body>
    
    <form method="post" action="process.php">
        <fieldset>
            <legend> Sign in </legend>
            <label for="username">Username:</label>
            <input type="text" name="username" required> <br>

            <label for="password">Password:</label>
            <input type="password" name="password" required> <br>

            <input type="hidden" name="token" value="abc123">
            <input type="submit" value="Login">
        </fieldset>
    </form>
    <?php include 'footer.inc'; ?>
</body>
