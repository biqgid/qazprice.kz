<div class="" id="apps">
	<b>Калькулятор балки</b>
	<div v-for="product in products">
		<div class="product">
			<!--span @click="getProduct($event, product.items)">{{ product.name }}</span-->
			<select v-model="product.selected" @change="getSelected( product.name, product.selected)">
				<option disabled value="">Выбрать</option>
				<option v-for="item in product.items" :value="item">{{ item.name }}</option>
			</select>
		</div>
	</div>
	<div class="my-doos">
		<div class="parent">
			<div class="ppsort" v-if="product.show">
				<span v-for="item in product.items"  @click="getItem(item)">{{ item.name }}</span>
			</div>
		</div>
	</div>
	<div v-if="calculator.show">
		<span class="pp-sort">{{ calculator.name }}</span>
		<div class="gridcontainer castom">
			<div class="row calcInfo">
				<div class="col-md-6">
					<span class="active">Вес</span><!--span>тонны</span--> 
					<input onfocus="this.select();" required="" type="number" v-model="weight" @input="weightCalc()">
					<label>килограммы</label>
				</div>	

				<div class="col-md-6">
					<span class="active">Длина</span><!--span>километры</span-->
					<input onfocus="this.select();" required="" type="number" v-model="lenght" @input="lenghtCalc()">
					<label>метры</label>
				</div>
				<div class="col-md-6">
					<span class="active">Количество</span>
					<input onfocus="this.select();" required="" type="number" v-model="count"  @input="countCalc()">
					<label>штуки</label>
				</div>	
				<div class="col-md-6">
					<span class="active">Итог</span>
					<input onfocus="this.select();" required="" type="number" v-model="price"  @input="priceCalc()">
					<label>тенге</label>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var apps = new Vue({
		el: '#apps',
		data: {
			message: 'Vue!',
			products: [
				{
					name: "Балка",
					selected: '',
					items: [
						{name: "Балка 12 Б1", pr_tonn: 0,pr_length: 11.7, weight: 8.7, toler: 0, pr_price: 0,},
						{name: "Балка 12 Б2", pr_tonn: 0,pr_length: 11.7, weight: 10.4, toler: 0, pr_price: 0,},
						{name: "Балка 14 Б1", pr_tonn: 0,pr_length: 11.7, weight: 10.5, toler: 0, pr_price: 0,},
						{name: "Балка 14 Б2", pr_tonn: 0,pr_length: 11.7, weight: 12.9, toler: 0, pr_price: 0,},
						{name: "Балка 16 Б1", pr_tonn: 0,pr_length: 11.7, weight: 12.7, toler: 0, pr_price: 0,},
						{name: "Балка 16 Б2", pr_tonn: 0,pr_length: 11.7, weight: 15.8, toler: 0, pr_price: 0,},
						{name: "Балка 18 Б1", pr_tonn: 0,pr_length: 11.7, weight: 15.4, toler: 0, pr_price: 0,},
						{name: "Балка 18 Б2", pr_tonn: 0,pr_length: 11.7, weight: 18.8, toler: 0, pr_price: 0,},
						{name: "Балка 20 Б1", pr_tonn: 0,pr_length: 11.7, weight: 22.4, toler: 0, pr_price: 0,},
						{name: "Балка 20 Б2", pr_tonn: 0,pr_length: 11.7, weight: 22.4, toler: 0, pr_price: 0,},
						{name: "Балка 25 Б1", pr_tonn: 0,pr_length: 11.7, weight: 27.5, toler: 0, pr_price: 0,},
						{name: "Балка 26 Б1", pr_tonn: 0,pr_length: 11.7, weight: 28, toler: 0, pr_price: 0,},
						{name: "Балка 26 Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 31.2, toler: 0, pr_price: 0,},
						{name: "Балка 30 Б1", pr_tonn: 0,pr_length: 11.7, weight: 32.9, toler: 0, pr_price: 0,},
						{name: "Балка 30 Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 36.6, toler: 0, pr_price: 0,},
						{name: "Балка 35 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 38.9, toler: 0, pr_price: 0,},
						{name: "Балка 35 Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 43.3, toler: 0, pr_price: 0,},
						{name: "Балка 40 Б1", pr_tonn: 0,pr_length: 11.7, weight: 48.1, toler: 0, pr_price: 0,},
						{name: "Балка 40 Б2", pr_tonn: 0,pr_length: 11.7, weight: 54.7, toler: 0, pr_price: 0,},
						{name: "Балка 45 Б1", pr_tonn: 0,pr_length: 11.7, weight: 59.8, toler: 0, pr_price: 0,},
						{name: "Балка 45 Б2", pr_tonn: 0,pr_length: 11.7, weight: 67.5, toler: 0, pr_price: 0,},
						{name: "Балка 50 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 73, toler: 0, pr_price: 0,},
						{name: "Балка 50 Б2", pr_tonn: 0,pr_length: 11.7, weight: 80.7, toler: 0, pr_price: 0,},
						{name: "Балка 55 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 89, toler: 0, pr_price: 0,},
						{name: "Балка 55 Б2", pr_tonn: 0,pr_length: 11.7, weight: 97.9, toler: 0, pr_price: 0,},
						{name: "Балка 60 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 106.2, toler: 0, pr_price: 0,},
						{name: "Балка 60 Б2", pr_tonn: 0,pr_length: 11.7, weight: 115.6, toler: 0, pr_price: 0,},
						{name: "Балка 70 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 129.3, toler: 0, pr_price: 0,},
						{name: "Балка 70 Б2", pr_tonn: 0,pr_length: 11.7, weight: 144.2, toler: 0, pr_price: 0,},
						{name: "Балка 80 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 159.5, toler: 0, pr_price: 0,},
						{name: "Балка 80 Б2", pr_tonn: 0,pr_length: 11.7, weight: 177.9, toler: 0, pr_price: 0,},
						{name: "Балка 90 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 194, toler: 0, pr_price: 0,},
						{name: "Балка 90 Б2", pr_tonn: 0,pr_length: 11.7, weight: 213.8, toler: 0, pr_price: 0,},
						{name: "Балка 100 Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 230.6, toler: 0, pr_price: 0,},
						{name: "Балка 100 Б2", pr_tonn: 0,pr_length: 11.7, weight: 258.2, toler: 0, pr_price: 0,},
						{name: "Балка 100 Б3", pr_tonn: 0,pr_length: 11.7, weight: 285.7, toler: 0, pr_price: 0,},
						{name: "Балка 100 Б4", pr_tonn: 0,pr_length: 11.7, weight: 314.5, toler: 0, pr_price: 0,},
						{name: "Балка 20 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 30.6, toler: 0, pr_price: 0,},
						{name: "Балка 23 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 36.2, toler: 0, pr_price: 0,},
						{name: "Балка 25 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 44.58, toler: 0, pr_price: 0,},
						{name: "Балка 26 Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 42.7, toler: 0, pr_price: 0,},
						{name: "Балка 26 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 29.2, toler: 0, pr_price: 0,},
						{name: "Балка 30 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 53.6, toler: 0, pr_price: 0,},
						{name: "Балка 30 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 61, toler: 0, pr_price: 0,},
						{name: "Балка 30 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 68.3, toler: 0, pr_price: 0,},
						{name: "Балка 35 Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 75.1, toler: 0, pr_price: 0,},
						{name: "Балка 35 Ш2 ", pr_tonn: 0,pr_length: 11.7, weight: 82.2, toler: 0, pr_price: 0,},
						{name: "Балка 35 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 91.3, toler: 0, pr_price: 0,},
						{name: "Балка 40 Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 96.1, toler: 0, pr_price: 0,},
						{name: "Балка 40 Ш2 ", pr_tonn: 0,pr_length: 11.7, weight: 111.1, toler: 0, pr_price: 0,},
						{name: "Балка 40 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 123.4, toler: 0, pr_price: 0,},
						{name: "Балка 45 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 126, toler: 0, pr_price: 0,},
						{name: "Балка 50 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 114.4, toler: 0, pr_price: 0,},
						{name: "Балка 50 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 138.7, toler: 0, pr_price: 0,},
						{name: "Балка 50 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 156.4, toler: 0, pr_price: 0,},
						{name: "Балка 50 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 174.1, toler: 0, pr_price: 0,},
						{name: "Балка 60 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 142.1, toler: 0, pr_price: 0,},
						{name: "Балка 60 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 176.9, toler: 0, pr_price: 0,},
						{name: "Балка 60 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 205.5, toler: 0, pr_price: 0,},
						{name: "Балка 60 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 234.2, toler: 0, pr_price: 0,},
						{name: "Балка 70 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 169.9, toler: 0, pr_price: 0,},
						{name: "Балка 70 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 197.6, toler: 0, pr_price: 0,},
						{name: "Балка 70 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 235.4, toler: 0, pr_price: 0,},
						{name: "Балка 70 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 268.1, toler: 0, pr_price: 0,},
						{name: "Балка 70 Ш5", pr_tonn: 0,pr_length: 11.7, weight: 305.9, toler: 0, pr_price: 0,},
						{name: "Балка 20 К1", pr_tonn: 0,pr_length: 11.7, weight: 8.7, toler: 0, pr_price: 0,},
						{name: "Балка 20 К2 ", pr_tonn: 0,pr_length: 11.7, weight: 10.4, toler: 0, pr_price: 0,},
						{name: "Балка 23 К1", pr_tonn: 0,pr_length: 11.7, weight: 10.5, toler: 0, pr_price: 0,},
						{name: "Балка 23 К2", pr_tonn: 0,pr_length: 11.7, weight: 12.9, toler: 0, pr_price: 0,},
						{name: "Балка 25 К1", pr_tonn: 0,pr_length: 11.7, weight: 12.7, toler: 0, pr_price: 0,},
						{name: "Балка 25 К2 ", pr_tonn: 0,pr_length: 11.7, weight: 15.8, toler: 0, pr_price: 0,},
						{name: "Балка 26 К1", pr_tonn: 0,pr_length: 11.7, weight: 15.4, toler: 0, pr_price: 0,},
						{name: "Балка 26 К2 ", pr_tonn: 0,pr_length: 11.7, weight: 18.8, toler: 0, pr_price: 0,},
						{name: "Балка 26 К3", pr_tonn: 0,pr_length: 11.7, weight: 22.4, toler: 0, pr_price: 0,},
						{name: "Балка 30 К1 ", pr_tonn: 0,pr_length: 11.7, weight: 27.5, toler: 0, pr_price: 0,},
						{name: "Балка 30 К2 ", pr_tonn: 0,pr_length: 11.7, weight: 28, toler: 0, pr_price: 0,},
						{name: "Балка 30 К3", pr_tonn: 0,pr_length: 11.7, weight: 31.2, toler: 0, pr_price: 0,},
						{name: "Балка 35 К1 ", pr_tonn: 0,pr_length: 11.7, weight: 32.9, toler: 0, pr_price: 0,},
						{name: "Балка 35 К2", pr_tonn: 0,pr_length: 11.7, weight: 36.6, toler: 0, pr_price: 0,},
						{name: "Балка 35 К3", pr_tonn: 0,pr_length: 11.7, weight: 38.9, toler: 0, pr_price: 0,},
						{name: "Балка 40 К1 ", pr_tonn: 0,pr_length: 11.7, weight: 43.3, toler: 0, pr_price: 0,},
						{name: "Балка 40 К2 ", pr_tonn: 0,pr_length: 11.7, weight: 48.1, toler: 0, pr_price: 0,},
						{name: "Балка 40 К3", pr_tonn: 0,pr_length: 11.7, weight: 54.7, toler: 0, pr_price: 0,},
						{name: "Балка 40 К4", pr_tonn: 0,pr_length: 11.7, weight: 59.8, toler: 0, pr_price: 0,},
						{name: "Балка 40 К5", pr_tonn: 0,pr_length: 11.7, weight: 67.5, toler: 0, pr_price: 0,},
						{name: "Балка 18 M", pr_tonn: 0,pr_length: 11.7, weight: 25.8, toler: 0, pr_price: 0,},
						{name: "Балка 24 М", pr_tonn: 0,pr_length: 11.7, weight: 38.3, toler: 0, pr_price: 0,},
						{name: "Балка 30 М", pr_tonn: 0,pr_length: 11.7, weight: 50.2, toler: 0, pr_price: 0,},
						{name: "Балка 36 М", pr_tonn: 0,pr_length: 11.7, weight: 57.9, toler: 0, pr_price: 0,},
						{name: "Балка 45 М", pr_tonn: 0,pr_length: 11.7, weight: 77.6, toler: 0, pr_price: 0,},
					],
				}
			],
			product: {
				show: false,
				name: null,
				items: null,
			},
			calculator: {
				show: false,
				name: null,
				pr_tonn: null,
				pr_length: null,
				weight: null,
				toler: null,
				pr_price: null,
			},

			count: null,
			lenght: null,
			weight: null,
			price: null,
		},

		methods: {
			getProduct: function(e, product) {
				this.product.show = true;
				this.product.name = e.target.textContent;
				this.product.items = product;
			},
			getItem: function(item) {
				this.calculator.name = item.name;
				this.calculator.pr_tonn = item.pr_tonn;
				this.calculator.pr_length = item.pr_length;
				this.calculator.weight = item.weight;
				this.calculator.pr_price = item.pr_price;
				this.calculator.toler = item.toler;

				this.calculator.show = true;
			},

			getSelected: function(name, item) {
				this.calculator.name = item.name;
				this.calculator.pr_tonn = item.pr_tonn;
				this.calculator.pr_length = item.pr_length;
				this.calculator.weight = item.weight;
				this.calculator.pr_price = item.pr_price;
				this.calculator.toler = item.toler;

				this.calculator.show = true;
			},

			lenghtCalc: function() {
				this.weight = (this.lenght * this.calculator.weight).toFixed(2);
				this.count = (this.lenght / this.calculator.pr_length).toFixed(2);
				this.price = (this.lenght * (this.calculator.pr_price / 1000 * this.calculator.weight)).toFixed(2);
			},

			countCalc: function() {
				this.lenght = (this.count * this.calculator.pr_length).toFixed(2);
				this.weight = (this.count * this.calculator.pr_length * this.calculator.weight).toFixed(2);
				this.price = (this.count * (this.calculator.pr_length * (this.calculator.pr_price / 1000 * this.calculator.weight))).toFixed(2);
			},

			weightCalc: function() {
				this.lenght = (this.weight / this.calculator.weight).toFixed(2);
				this.count = (this.lenght / this.calculator.pr_length).toFixed(2);
				this.price = (this.lenght * (this.calculator.pr_price / 1000 * this.calculator.weight)).toFixed(2);
			},

			priceCalc: function() {
				this.weight = this.calculator.weight * (this.price / (this.calculator.pr_price / 1000 * this.calculator.weight));
				this.count = (this.price / (this.calculator.pr_price / 1000 * this.calculator.weight) / this.calculator.pr_length).toFixed(2);
				this.lenght = this.price = (this.price / (this.calculator.pr_price / 1000 * this.calculator.weight)).toFixed(2);
			}
		},
	})
</script>
