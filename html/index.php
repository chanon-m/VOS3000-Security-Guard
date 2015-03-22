<?php
    include_once("db.config.inc.php");

    if($_POST['action'] ==  'Log In') {
        $username   =   trim($_POST['username']);
        $password   =   trim($_POST['password']);
        if(!empty($username) && !empty($password)) {
            $query =   mysql_query("SELECT id FROM WHERE username = '$username' AND password = '$password' ",$conn) or die(mysql_error());
            if(mysql_num_rows($query) > 0) {
               $_SESSION["agentID"] =   $row->id;
                header("Location:dashbroad.php");
            }else {
                   $errmsg = 'Username or Password is invalid';
            }
        }
    }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<?php if(!empty($errmsg)) { ?>
        <table width="100%" align="center"  cellpadding="0" cellspacing="0">
          <tr>
              <td><?php echo $errmsg;?></td>
          </tr>
        </table>
<?php } ?>

<form class="box login">
        <fieldset class="boxBody">
          <label>Username</label>
          <input type="text" name="username" tabindex="1">
          <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
          <input type="password" name="password" tabindex="2">
        </fieldset>
        <footer>
          <label><input type="checkbox" tabindex="3">Keep me logged in</label>
          <input type="submit" class="btnLogin" value="Login" tabindex="4">
        </footer>
</form>
</body>
</html>
