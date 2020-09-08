<nav id="nav" class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<ul>
				<li><a href="/metall/index.php" target="_parent"><h1>Металлопрокат</h1></a></li>
			</ul>
			<div class="conte">
				<a  href="contacts"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav pull-right">
				<li>					
						<label class="wnav">
							<div id="first" class="myFlex">
								<a class="btn-custom1"  onClick="replaceButton1();"><img class="icon" src="../img/search.svg" alt=""></a>
							</div>

							<script>
								function replaceButton1() {
									$('#first').replaceWith('<div class="myFlex"><div class="con-input"><input placeholder="Найти" type="text"><i class="bx bx-user icon"><img class="icon" src="../img/search.svg" alt=""></i><div class="bg"></div></div></div>');
								}
							</script>
					</label>
				</li>
				<li class='li-reg'>
					<?php if(isset($_SESSION['logged_user'])) : ?>
					<?php echo $_SESSION['logged_user']->name; ?>
					<?php else : ?>
					<a id='log-btn' href='users/profile.php'><img class="icon" src="../img/user.svg" alt=""></a>
					<?php endif; ?>
				</li>
			</ul>
		</div>
	</div>
</nav>