<?php
session_start();
?>
<html>

	<head>
		<title>Library Management System</title>
		<link rel="stylesheet" type="text/css" href="styleMain.css?v=<?php echo time(); ?>">
	</head>
	<body style="background-color:#eaeae8;">
		<br>
		
		<iframe src = default.php align = right name = subwin width = 70% height = 600px border = 0 id = frame></iframe>
		<br>
		<img src = 'icon.png' width = 200 height = 200 id = logo><br>

		<table width="100%" cellspacing= 3 style = 'position:absolute;top:70;left:280'>
        <?php
		if (isset($_SESSION['login_user']));
        ?>
			<tr>
            <td align = left id = hdg><h3>Library Management System<br>
            <?php
            echo "Welcome ".$_SESSION['admin_user'];
            ?>										
		</table>
		<br><br><br><br><br><br><br>
		<br><br><br><br>
		<a href = search\index.php target = subwin class = button1><span>Search Books</span></a><br><br>
		<a href = addBooks\index.php target = subwin class = button2><span>Add Books</span></a><br>
		<a href = deleteBooks\index.php target = subwin class = button3><span>Delete Books</span></a><br>
		<a href = searchAcc\index.php target = subwin class = button4><span>Search Administrator Accounts</span></a><br>
		<a href = signUp\index.php target = subwin class = button8><span>Add Administrator Account</span></a><br><br><br>
		<a href = deleteAccounts\index.php target = subwin class = button9><span>Delete Administrator Account</span></a><br><br><br>
		<a href = searchUsers\index.php target = subwin class = button10><span>Search User Accounts</span></a><br><br><br>
		<a href = signUpUser\index.php target = subwin class = button11><span>Add User Accounts</span></a><br><br><br>
		<a href = deleteAccountsUser\index.php target = subwin class = button12><span>Delete User Accounts</span></a><br><br><br>
		<a href = choice.html class = button13><span>Sign Out</span></a><br>
		<a href = bookstatus\index.php target = subwin class = button2><span>Book Status</span></a><br><br>
		<a href = lendbooksadmin\index.php target = subwin class = button3><span>Issue Books</span></a><br>

	</body>
</html>