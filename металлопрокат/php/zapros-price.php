<div class="hide-form-price">
	<button class="btn mt-0">
		Прайс-лист
		<div class="lds-ring">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</button>
	<form class="hide-form"  method="POST" action="">
		<input type="hidden" name="send_file_price" value="true">
		<input type="hidden" name="country" value="almaty">
		<input type="email" name="user_email" class="user-email" required placeholder="Ваш e-mail">
		<input type="submit" class="send-form" value="Отправить">
	</form>
	
	<p class="response"></p>
</div>

<style>
	.hide-form-price {
		display: block;
	}
	.hide-form-price > button {
		text-align: left;
	}
	.lds-ring {
		display: none;
		width: 25px;
		position: absolute;
		top: 0;
		bottom: 0px;
		right: 10px;
		padding: 5px 0;
	}
	.lds-ring div {
	  	box-sizing: border-box;
	  	display: block;
	  	position: absolute;
		width: 25px;
		height: 25px;
		margin: 0px;
		border: 3px solid #fff;
	  	border-radius: 50%;
	  	animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
	  	border-color: #fff transparent transparent transparent;
	}
	.lds-ring div:nth-child(1) {
		animation-delay: -0.45s;
	}
	.lds-ring div:nth-child(2) {
		animation-delay: -0.3s;
	}
	.lds-ring div:nth-child(3) {
		animation-delay: -0.15s;
	}
	@keyframes lds-ring {
		0% {
			transform: rotate(0deg);
		}
		100% {
			transform: rotate(360deg);
		}
	}
</style>
