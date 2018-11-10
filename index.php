<?php 

session_start();

if( isset($_SESSION['user_info']) ){ // check is user is logged in
	$title = "Logged in as ".$_SESSION['user_info']['data']['full_name']; // page title
	//$title = 0;
}

else{
	$title = "Login With Instagram"; // page title
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="assets/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="containerinter">
					<?php
						if( isset($_SESSION['user_info']) ){ // if user is logged in
							$user_info = $_SESSION['user_info']; // get user info array
							$full_name = $_SESSION['user_info']['data']['full_name']; // get full name
							$username = $_SESSION['user_info']['data']['username']; // get username
							$bio = $_SESSION['user_info']['data']['bio']; // get bio
							$ID = $_SESSION['user_info']['data']['id']; // get bio
							$website = $_SESSION['user_info']['data']['website']; // get bio
							$media_count = $_SESSION['user_info']['data']['counts']['media']; // get media count
							$followers_count = $_SESSION['user_info']['data']['counts']['followed_by']; // get followers
							$following_count = $_SESSION['user_info']['data']['counts']['follows']; // get following
							$profile_picture = $_SESSION['user_info']['data']['profile_picture']; // get profile picture
							?>
							<h2>Bem-vindo <?php echo $full_name; ?>!</h2>
							<p><img id="perfil" src="<?php echo $profile_picture; ?>"></p>
							<p>Nome de usuário: <?php echo $username; ?></p>
							<p>Biografia	: <?php echo $bio; ?></p>
							<p>Site: <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
							<p>Postagem: <?php echo $media_count; ?></p>
							<p>Seguidores: <?php echo $followers_count; ?></p>
							<p>Seguindo: <?php echo $following_count; ?></p>
							<p>Seu ID: <?php echo $ID; ?></p>
							<p><a href="recent.php">Postes Recentes</a></p>
							<p><a href="logout.php">Logout?</a></p>
						<?php
					}

					else{ // if user is not logged in
						echo '
							<!DOCTYPE html>
								<html lang="pt-br">
								<head>
									<meta charset="utf-8" />
									<meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1.0, maximum-scale=1">
									<title>Instagram Log IN</title>
									<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
									<link rel="stylesheet" type="text/css" href="assets/login.css">
								</head>
								<body>
									<div class="container" style="margin-top: 100px">
										<div class="row justify-content-center">
											<div class="col-md-12">
												<center><img src="assets/instagram.png"></center><br/><br/>

												<form>
													<input type="email" name="email" placeholder="Email" />
													<input type="password" name="password" placeholder="Password" /><br/>
													<center><input type="button" value="Log In">
													<a id="btn" href="login.php">Login With Instagram</a>
													</center>
												</form>
											</div>
										</div>
									</div>
								</body>
								</html>';
						}

					?>
					</div>
			</div>
		</div>
	</body>
</html>