<div class="modal-frame">
	<div class="modal">
		<div class="modal-inset">
			<b>Введите email <a href="mailto:">user@email.com</a></b>
			<div class="button close"><img class="icons" src="./img/close.svg"></div>
			<div class="modal-body">
				<form class="modal-form">

					<? require './blocks/input_a_wrapper.php'; ?>

					<button class="button-right">Вход</button>
				</form>
				<a class="button-v2" href="/">Пользовательское соглашение</a>
			</div>
		</div>
	</div>
</div>
<style>
	.modal-form {
		display: flex;
		background-color: #e6e6e626;
		padding: 10px;
		margin: 20px 20px 0px;
		border-radius: 5px;
		border: 1px #e6e6e60a solid;
	}

	.modal-overlay {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		margin: auto;
		background-color: #fff;
		opacity: 0;
		visibility: hidden;
		z-index: 40;
		-moz-transition: opacity 0.25s ease 0s, visibility 0.35s linear;
		-o-transition: opacity 0.25s ease 0s, visibility 0.35s linear;
		-webkit-transition: opacity 0.25s ease, visibility 0.35s linear;
		-webkit-transition-delay: 0s, 0s;
		transition: opacity 0.25s ease 0s, visibility 0.35s linear;
	}

	.modal-overlay.state-show {
		opacity: .7;
		visibility: visible;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
		-webkit-transition-delay: 0s;
		transition-delay: 0s;
		-moz-transition-duration: 0.2s, 0s;
		-o-transition-duration: 0.2s, 0s;
		-webkit-transition-duration: 0.2s, 0s;
		transition-duration: 0.2s, 0s;
	}

	.modal-frame {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 40%;
		margin: auto;
		z-index: 50;
		/*     display: table; */
		display: -webkit-flex;
		display: flex;
		-webkit-align-items: center;
		align-items: center;
		-moz-box-align: center;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-moz-box-pack: center;
		-ms-flex-pack: center;
		width: 100%;
		text-align: center;
		visibility: hidden;
	}

	.modal-frame.state-appear {
		visibility: visible;
	}

	.modal-frame.state-appear .modal-inset {
		border: 1px #e6e6e626 solid;
		background: #014058de;
		border-radius: 5px;
		-moz-animation: modalComeIn 0.25s ease;
		-webkit-animation: modalComeIn 0.25s ease;
		animation: modalComeIn 0.25s ease;
		visibility: visible;
	}

	.modal-frame.state-appear .modal-body {
		opacity: 1;
		-moz-transform: translateY(0) scale(1, 1);
		-ms-transform: translateY(0) scale(1, 1);
		-webkit-transform: translateY(0) scale(1, 1);
		transform: translateY(0) scale(1, 1);
	}

	.modal-frame.state-leave {
		visibility: visible;
	}

	.modal-frame.state-leave .modal-inset {
		-moz-animation: modalHeadOut 0.35s ease 0.1s;
		-webkit-animation: modalHeadOut 0.35s ease 0.1s;
		animation: modalHeadOut 0.35s ease 0.1s;
		visibility: visible;
	}

	.modal-frame.state-leave .modal-body {
		opacity: 0;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
		-webkit-transition-delay: 0s;
		transition-delay: 0s;
		-moz-transition-duration: 0.35s;
		-o-transition-duration: 0.35s;
		-webkit-transition-duration: 0.35s;
		transition-duration: 0.35s;
		-moz-transition-timing-function: ease;
		-o-transition-timing-function: ease;
		-webkit-transition-timing-function: ease;
		transition-timing-function: ease;
		-moz-transform: translateY(25px);
		-ms-transform: translateY(25px);
		-webkit-transform: translateY(25px);
		transform: translateY(25px);
	}

	@-moz-document url-prefix() {
		.modal-frame {
			height: calc(100% - 55px);
		}
	}

	.modal {
		display: block;
		vertical-align: middle;
		text-align: center;
	}

	.modal-inset {

		padding: 40px;
		border-radius: 15px;
		-moz-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
		-moz-backface-visibility: hidden;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		-moz-transform: translate3d(0, 0, 0);
		-ms-transform: translate3d(0, 0, 0);
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
		-moz-transform-style: preserve-3d;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}

	.modal-inset .close {
		display: block;
		cursor: pointer;
		position: absolute;
		top: 0px;
		right: 0px;
		padding: 10px;
		opacity: .4;
	}

	.modal-inset .close:hover {
		opacity: 1;
	}

	.modal-body {
		margin: auto;
		opacity: 0;
		-moz-transform: translateY(0) scale(0.8, 0.8);
		-ms-transform: translateY(0) scale(0.8, 0.8);
		-webkit-transform: translateY(0) scale(0.8, 0.8);
		transform: translateY(0) scale(0.8, 0.8);
		-moz-transition-property: opacity, -moz-transform;
		-o-transition-property: opacity, -o-transform;
		-webkit-transition-property: opacity, -webkit-transform;
		transition-property: opacity, transform;
		-moz-transition-duration: 0.25s;
		-o-transition-duration: 0.25s;
		-webkit-transition-duration: 0.25s;
		transition-duration: 0.25s;
		-moz-transition-delay: 0.1s;
		-o-transition-delay: 0.1s;
		-webkit-transition-delay: 0.1s;
		transition-delay: 0.1s;
	}

	@-webkit-keyframes modalComeIn {
		0% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: scale(0.8, 0.8);
			-ms-transform: scale(0.8, 0.8);
			-webkit-transform: scale(0.8, 0.8);
			transform: scale(0.8, 0.8);
		}
		65.5% {
			-moz-transform: scale(1.03, 1.03);
			-ms-transform: scale(1.03, 1.03);
			-webkit-transform: scale(1.03, 1.03);
			transform: scale(1.03, 1.03);
		}
		100% {
			visibility: visible;
			opacity: 1;
			-moz-transform: scale(1, 1);
			-ms-transform: scale(1, 1);
			-webkit-transform: scale(1, 1);
			transform: scale(1, 1);
		}
	}

	@-moz-keyframes modalComeIn {
		0% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: scale(0.8, 0.8);
			-ms-transform: scale(0.8, 0.8);
			-webkit-transform: scale(0.8, 0.8);
			transform: scale(0.8, 0.8);
		}
		65.5% {
			-moz-transform: scale(1.03, 1.03);
			-ms-transform: scale(1.03, 1.03);
			-webkit-transform: scale(1.03, 1.03);
			transform: scale(1.03, 1.03);
		}
		100% {
			visibility: visible;
			opacity: 1;
			-moz-transform: scale(1, 1);
			-ms-transform: scale(1, 1);
			-webkit-transform: scale(1, 1);
			transform: scale(1, 1);
		}
	}

	@keyframes modalComeIn {
		0% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: scale(0.8, 0.8);
			-ms-transform: scale(0.8, 0.8);
			-webkit-transform: scale(0.8, 0.8);
			transform: scale(0.8, 0.8);
		}
		65.5% {
			-moz-transform: scale(1.03, 1.03);
			-ms-transform: scale(1.03, 1.03);
			-webkit-transform: scale(1.03, 1.03);
			transform: scale(1.03, 1.03);
		}
		100% {
			visibility: visible;
			opacity: 1;
			-moz-transform: scale(1, 1);
			-ms-transform: scale(1, 1);
			-webkit-transform: scale(1, 1);
			transform: scale(1, 1);
		}
	}

	@-webkit-keyframes modalHeadOut {
		0% {
			visibility: visible;
			opacity: 1;
			-moz-transform: translateY(0) scale(1, 1);
			-ms-transform: translateY(0) scale(1, 1);
			-webkit-transform: translateY(0) scale(1, 1);
			transform: translateY(0) scale(1, 1);
		}
		100% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: translateY(35px) scale(0.97, 0.97);
			-ms-transform: translateY(35px) scale(0.97, 0.97);
			-webkit-transform: translateY(35px) scale(0.97, 0.97);
			transform: translateY(35px) scale(0.97, 0.97);
		}
	}

	@-moz-keyframes modalHeadOut {
		0% {
			visibility: visible;
			opacity: 1;
			-moz-transform: translateY(0) scale(1, 1);
			-ms-transform: translateY(0) scale(1, 1);
			-webkit-transform: translateY(0) scale(1, 1);
			transform: translateY(0) scale(1, 1);
		}
		100% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: translateY(35px) scale(0.97, 0.97);
			-ms-transform: translateY(35px) scale(0.97, 0.97);
			-webkit-transform: translateY(35px) scale(0.97, 0.97);
			transform: translateY(35px) scale(0.97, 0.97);
		}
	}

	@keyframes modalHeadOut {
		0% {
			visibility: visible;
			opacity: 1;
			-moz-transform: translateY(0) scale(1, 1);
			-ms-transform: translateY(0) scale(1, 1);
			-webkit-transform: translateY(0) scale(1, 1);
			transform: translateY(0) scale(1, 1);
		}
		100% {
			visibility: hidden;
			opacity: 0;
			-moz-transform: translateY(35px) scale(0.97, 0.97);
			-ms-transform: translateY(35px) scale(0.97, 0.97);
			-webkit-transform: translateY(35px) scale(0.97, 0.97);
			transform: translateY(35px) scale(0.97, 0.97);
		}
	}

	.blur {
		transition: all 0.2s ease-in-out;
		filter: blur(5px);
	}

</style>

<script>
	$(document).on('ready', function () {
		$modal = $('.modal-frame');
		$overlay = $('.modal-overlay');

		/* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
		$modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (e) {
			if ($modal.hasClass('state-leave')) {
				$modal.removeClass('state-leave');
			}
		});

		$('.close').on('click', function () {
			$(".content").removeClass("blur");
			$overlay.removeClass('state-show');
			$modal.removeClass('state-appear').addClass('state-leave');
		});

		$('.open').on('click', function () {
			$overlay.addClass('state-show');
			$(".content").addClass("blur");
			$modal.removeClass('state-leave').addClass('state-appear');
		});

	});
	//# sourceURL=pen.js

	window.console = window.console || function(t) {};

	if (document.location.search.match(/type=embed/gi)) {
		window.parent.postMessage("resize", "*");
	}
</script>