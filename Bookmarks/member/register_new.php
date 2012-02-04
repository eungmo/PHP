<?php
	//������Ʈ�� �ʿ��� �Լ� ������ �ҷ��´�.
	session_start();
	require_once('../fns/bookmark_fns.php');
	
	//ª�� ��Ÿ���� ������ �����.
	$email=$_POST['email'];
	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
	$passwd2=$_POST['passwd2'];
	
	
	
	//����ó��
	try {
		//Check forms filled in
		if(!filled_out($_POST)) {
			throw new Exception("You have not filled the form out correctly - please go back and try again.");
		}
		
		//Email address not valid
		if(!valid_email($email)) {
			throw new Exception("That is not a valid email address. Please go back and try again.");
		}
		
		//Password not the same
		if($passwd != $passwd2) {
			throw new Exception("The passwords you entered do not match - please go back and try again.");
		}
		
		//check the password length
		if((strlen($passwd) < 6 ) || (strlen($passwd)) > 16) {
			throw new Exception("your password must be between 6 and 16 characters. Please go back and try again.");
		}
		
		//attempt to register
		register($username, $email, $passwd);		//��¥ ���
		//register session variable
		$_SESSION['valid_user'] = $username;
		
		//provide link to members page
		do_html_header('Registration successful');
		echo "Your registration was successful. Go to the members page to start setting up your bookmarks.";
		do_html_URL('okmember.php', 'Go to members page');	//��� �������� �̵�
		
		//end page
		do_html_footer();		
	}
	catch(Exception $e) {
		do_html_header('Problem');
		echo $e->getMessage();
		do_html_footer();
		exit;
	}
?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	