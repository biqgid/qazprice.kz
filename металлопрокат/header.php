<nav id="nav" class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<ul>
				<li><a href="../алматы" target="_parent"><b>Металлопрокат</b> ß</a></li>
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
					<a class="mPhone" href="tel:+77782793333">+7 777 279 33 33</a>
				</li>
				<!--li>
					<a class="mPhone" href="tel:+77782793333">Контакты</a>
				</li-->
				<li>
					<a class="WhatsApp" href="whatsapp://send?text=Здравствуйте! меня интересует:&amp;phone=+77772793333&amp;abid=+77772793333"><img src="../img/WhatsApp+77772793333.svg"><span>+7 777 279 33 33</span></a>
					<style>
						.mPhone {
							margin: 21px 15px;

						}
						.WhatsApp {
							width: 104px;
							border-radius: 3px;
							padding: 5px 9px;
							text-align: center;
							border: 0;
							cursor: pointer;
							margin: 5px 10px;
						}
						.WhatsApp > span {
							font-size: 9px;
							color: #03e676;
						}
					</style>
				</li>
				<!--li>					
   <label class="wnav">
   <div id="first" class="myFlex">
   <a class="btn-custom1"  onClick="replaceButton1();"><img class="icon" src="./img/search.svg" alt=""></a>
   </div>

   <script>
   function replaceButton1() {
 $('#first').replaceWith('<div class="myFlex"><div class="con-input"><input placeholder="Найти" type="text"><i class="bx bx-user icon"><img class="icon" src="./img/search.svg" alt=""></i><div class="bg"></div></div></div>');
   }
   </script>
   </label>
   </li-->
				<!--li class='li-reg'>
   <?php if(isset($_SESSION['logged_user'])) : ?>
   <?php echo $_SESSION['logged_user']->name; ?>
   <?php else : ?>
   <a id='log-btn' href='./users/profile.php'><img class="icon" src="./img/user.svg" alt=""></a>
   <?php endif; ?>
   </li-->
			</ul>
		</div>
	</div>
</nav>