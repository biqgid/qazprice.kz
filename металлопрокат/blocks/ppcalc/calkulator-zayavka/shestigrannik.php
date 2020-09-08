<div class="" id="apps">
	<b>Калькулятор шестигранника</b>
	<div v-for="product in products">
		<div class="product">
			<span @click="getProduct($event, product.items)">{{ product.name }}</span>
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
					<label>Вес</label><span class="active">килограммы</span><span>тонны</span> 
					<input onfocus="this.select();" required="" type="number" v-model="weight" @input="weightCalc()">
				</div>	
				<div class="col-md-6">
					<label>Длина</label><span class="active">метры</span><span>километры</span>
					<input onfocus="this.select();" required="" type="number" v-model="lenght" @input="lenghtCalc()">
				</div>
				<div class="col-md-6">
					<label>Количество</label><span class="active">штуки</span>
					<input onfocus="this.select();" required="" type="number" v-model="count"  @input="countCalc()">
				</div>	
				<div class="col-md-6">
					<label>Итог в </label><span class="active">Тенге</span>
					<input onfocus="this.select();" required="" type="number" v-model="price"  @input="priceCalc()">
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
					name: "Шестигранник",
					selected: '',
					items: [
						{name: "8", pr_tonn: 0,pr_length: 11.7, weight: 0.435, toler: 0, pr_price: 0,},
						{name: "9", pr_tonn: 0,pr_length: 11.7, weight: 0.551, toler: 0, pr_price: 0,},
						{name: "10", pr_tonn: 0,pr_length: 11.7, weight: 0.68, toler: 0, pr_price: 0,},
						{name: "11", pr_tonn: 0,pr_length: 11.7, weight: 0.823, toler: 0, pr_price: 0,},
						{name: "12", pr_tonn: 0,pr_length: 11.7, weight: 0.979, toler: 0, pr_price: 0,},
						{name: "13", pr_tonn: 0,pr_length: 11.7, weight: 1.149, toler: 0, pr_price: 0,},
						{name: "14", pr_tonn: 0,pr_length: 11.7, weight: 1.333, toler: 0, pr_price: 0,},
						{name: "15", pr_tonn: 0,pr_length: 11.7, weight: 1.53, toler: 0, pr_price: 0,},
						{name: "16", pr_tonn: 0,pr_length: 11.7, weight: 1.74, toler: 0, pr_price: 0,},
						{name: "17", pr_tonn: 0,pr_length: 11.7, weight: 1.965, toler: 0, pr_price: 0,},
						{name: "18", pr_tonn: 0,pr_length: 11.7, weight: 2.203, toler: 0, pr_price: 0,},
						{name: "19", pr_tonn: 0,pr_length: 11.7, weight: 2.454, toler: 0, pr_price: 0,},
						{name: "20", pr_tonn: 0,pr_length: 11.7, weight: 2.719, toler: 0, pr_price: 0,},
						{name: "20,5", pr_tonn: 0,pr_length: 11.7, weight: 2.857, toler: 0, pr_price: 0,},
						{name: "21", pr_tonn: 0,pr_length: 11.7, weight: 2.998, toler: 0, pr_price: 0,},
						{name: "22", pr_tonn: 0,pr_length: 11.7, weight: 3.29, toler: 0, pr_price: 0,},
						{name: "22,5", pr_tonn: 0,pr_length: 11.7, weight: 3.442, toler: 0, pr_price: 0,},
						{name: "23,5", pr_tonn: 0,pr_length: 11.7, weight: 3.754, toler: 0, pr_price: 0,},
						{name: "24", pr_tonn: 0,pr_length: 11.7, weight: 3.916, toler: 0, pr_price: 0,},
						{name: "25", pr_tonn: 0,pr_length: 11.7, weight: 4.249, toler: 0, pr_price: 0,},
						{name: "25,5", pr_tonn: 0,pr_length: 11.7, weight: 4.421, toler: 0, pr_price: 0,},
						{name: "26", pr_tonn: 0,pr_length: 11.7, weight: 4.596, toler: 0, pr_price: 0,},
						{name: "28", pr_tonn: 0,pr_length: 11.7, weight: 5.33, toler: 0, pr_price: 0,},
						{name: "28,5", pr_tonn: 0,pr_length: 11.7, weight: 5.522, toler: 0, pr_price: 0,},
						{name: "30", pr_tonn: 0,pr_length: 11.7, weight: 6.119, toler: 0, pr_price: 0,},
						{name: "31,5", pr_tonn: 0,pr_length: 11.7, weight: 6.746, toler: 0, pr_price: 0,},
						{name: "32", pr_tonn: 0,pr_length: 11.7, weight: 6.962, toler: 0, pr_price: 0,},
						{name: "33,5", pr_tonn: 0,pr_length: 11.7, weight: 7.629, toler: 0, pr_price: 0,},
						{name: "34", pr_tonn: 0,pr_length: 11.7, weight: 7.859, toler: 0, pr_price: 0,},
						{name: "35,5", pr_tonn: 0,pr_length: 11.7, weight: 8.568, toler: 0, pr_price: 0,},
						{name: "36", pr_tonn: 0,pr_length: 11.7, weight: 8.811, toler: 0, pr_price: 0,},
						{name: "37,5", pr_tonn: 0,pr_length: 11.7, weight: 9.56, toler: 0, pr_price: 0,},
						{name: "38", pr_tonn: 0,pr_length: 11.7, weight: 9.817, toler: 0, pr_price: 0,},
						{name: "39,5", pr_tonn: 0,pr_length: 11.7, weight: 10.6, toler: 0, pr_price: 0,},
						{name: "40", pr_tonn: 0,pr_length: 11.7, weight: 10.877, toler: 0, pr_price: 0,},
						{name: "42", pr_tonn: 0,pr_length: 11.7, weight: 11.992, toler: 0, pr_price: 0,},
						{name: "42,5", pr_tonn: 0,pr_length: 11.7, weight: 12.279, toler: 0, pr_price: 0,},
						{name: "47", pr_tonn: 0,pr_length: 11.7, weight: 15.017, toler: 0, pr_price: 0,},
						{name: "47,5", pr_tonn: 0,pr_length: 11.7, weight: 15.339, toler: 0, pr_price: 0,},
						{name: "48", pr_tonn: 0,pr_length: 11.7, weight: 15.663, toler: 0, pr_price: 0,},
						{name: "50", pr_tonn: 0,pr_length: 11.7, weight: 16.996, toler: 0, pr_price: 0,},
						{name: "52", pr_tonn: 0,pr_length: 11.7, weight: 18.383, toler: 0, pr_price: 0,},
						{name: "55", pr_tonn: 0,pr_length: 11.7, weight: 20.565, toler: 0, pr_price: 0,},
						{name: "57", pr_tonn: 0,pr_length: 11.7, weight: 20.088, toler: 0, pr_price: 0,},
						{name: "60", pr_tonn: 0,pr_length: 11.7, weight: 24.474, toler: 0, pr_price: 0,},
						{name: "62", pr_tonn: 0,pr_length: 11.7, weight: 26.133, toler: 0, pr_price: 0,},
						{name: "63", pr_tonn: 0,pr_length: 11.7, weight: 26.983, toler: 0, pr_price: 0,},
						{name: "65", pr_tonn: 0,pr_length: 11.7, weight: 28.723, toler: 0, pr_price: 0,},
						{name: "67", pr_tonn: 0,pr_length: 11.7, weight: 30.518, toler: 0, pr_price: 0,},
						{name: "70", pr_tonn: 0,pr_length: 11.7, weight: 33.312, toler: 0, pr_price: 0,},
						{name: "72", pr_tonn: 0,pr_length: 11.7, weight: 35.242, toler: 0, pr_price: 0,},
						{name: "75", pr_tonn: 0,pr_length: 11.7, weight: 38.24, toler: 0, pr_price: 0,},
						{name: "78", pr_tonn: 0,pr_length: 11.7, weight: 41.361, toler: 0, pr_price: 0,},
						{name: "80", pr_tonn: 0,pr_length: 11.7, weight: 43.509, toler: 0, pr_price: 0,},
						{name: "83", pr_tonn: 0,pr_length: 11.7, weight: 46.833, toler: 0, pr_price: 0,},
						{name: "85", pr_tonn: 0,pr_length: 11.7, weight: 49.118, toler: 0, pr_price: 0,},
						{name: "88", pr_tonn: 0,pr_length: 11.7, weight: 52.646, toler: 0, pr_price: 0,},
						{name: "90", pr_tonn: 0,pr_length: 11.7, weight: 55.066, toler: 0, pr_price: 0,},
						{name: "93", pr_tonn: 0,pr_length: 11.7, weight: 58.798, toler: 0, pr_price: 0,},
						{name: "95", pr_tonn: 0,pr_length: 11.7, weight: 61.355, toler: 0, pr_price: 0,},
						{name: "98", pr_tonn: 0,pr_length: 11.7, weight: 65.291, toler: 0, pr_price: 0,},
						{name: "100", pr_tonn: 0,pr_length: 11.7, weight: 67.983, toler: 0, pr_price: 0,},
						{name: "103", pr_tonn: 0,pr_length: 11.7, weight: 72.123, toler: 0, pr_price: 0,},
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
