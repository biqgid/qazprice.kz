<!--input_a_wrapper.php-->
<div class="input_a_wrapper">
	<input name="" id="a" autocomplete="off" class="input_a" data-type="inputWithPlaceholder" data-text="Точка А" tabindex="1" data-empty="true" type="dotA">
	<label class="label_a" for="a">Ваш email</label>
</div>
<style>
	.input_a_wrapper {
		position: relative;
		clear: both;
		width: 100%;
	}

	.input_a_wrapper:before, .input_a_wrapper:after {
		content: '';
		display: block;
		width: 100%;
		height: .00000001px;
		clear: both;
	}
	.input_a {
		box-shadow: 0px 0px 3px rgba(0,0,0,0.3), 0 1px 0px rgba(0,0,0,0.25);
		height: 45px;
		width: 100%;
		border-radius: 5px 0 0 5px;
		padding: 10px 10px 10px 7px;
		background: #5e98a8;
		border: none;
	}
	.label_a {
		cursor: text;
		top: 12px;
		left: 7px;
		position: absolute;
		-webkit-transition: all .05s linear;
		-o-transition: all .05s linear;
		transition: all .05s linear;
		z-index: 4;
	}
	.input_a:focus~label, .input_a[data-empty=false]~label {
		font-size: 11px;
		letter-spacing: normal;
		top: 3px;
		color: #1e4a61;
	}
	.input_a:focus {
		z-index: 2;
	}
</style>

<!--END-input_a_wrapper.php-->