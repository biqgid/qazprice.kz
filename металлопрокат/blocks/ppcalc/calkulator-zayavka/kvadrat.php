<div class="" id="apps">
	<b>Калькулятор квадрата</b>
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
					<span class="active">килограммы</span><!--span>тонны</span--> 
					<input onfocus="this.select();" required="" type="number" v-model="weight" @input="weightCalc()">
					<label>Вес</label>
				</div>	

				<div class="col-md-6">
					<span class="active">метры</span><!--span>километры</span-->
					<input onfocus="this.select();" required="" type="number" v-model="lenght" @input="lenghtCalc()">
					<label>Длина</label>
				</div>
				<div class="col-md-6">
					<span class="active">штуки</span>
					<input onfocus="this.select();" required="" type="number" v-model="count"  @input="countCalc()">
					<label>Количество</label>
				</div>	
				<div class="col-md-6">
					<span class="active">Тенге</span>
					<input onfocus="this.select();" required="" type="number" v-model="price"  @input="priceCalc()">
					<label>Итог</label>
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
					name: "Квадрат",
					selected: '',
					items: [
						{name: "Квадрат 6", pr_tonn: 0,pr_length: 11.7, weight: 0.283, toler: 0, pr_price: 0,},
						{name: "Квадрат 7", pr_tonn: 0,pr_length: 11.7, weight: 0.385, toler: 0, pr_price: 0,},
						{name: "Квадрат 8", pr_tonn: 0,pr_length: 11.7, weight: 0.502, toler: 0, pr_price: 0,},
						{name: "Квадрат 9", pr_tonn: 0,pr_length: 11.7, weight: 0.636, toler: 0, pr_price: 0,},
						{name: "Квадрат 10", pr_tonn: 0,pr_length: 11.7, weight: 0.785, toler: 0, pr_price: 0,},
						{name: "Квадрат 11", pr_tonn: 0,pr_length: 11.7, weight: 0.95, toler: 0, pr_price: 0,},
						{name: "Квадрат 12", pr_tonn: 0,pr_length: 11.7, weight: 1.13, toler: 0, pr_price: 0,},
						{name: "Квадрат 13", pr_tonn: 0,pr_length: 11.7, weight: 1.33, toler: 0, pr_price: 0,},
						{name: "Квадрат 14", pr_tonn: 0,pr_length: 11.7, weight: 1.54, toler: 0, pr_price: 0,},
						{name: "Квадрат 15", pr_tonn: 0,pr_length: 11.7, weight: 1.77, toler: 0, pr_price: 0,},
						{name: "Квадрат 16", pr_tonn: 0,pr_length: 11.7, weight: 2.01, toler: 0, pr_price: 0,},
						{name: "Квадрат 17", pr_tonn: 0,pr_length: 11.7, weight: 2.27, toler: 0, pr_price: 0,},
						{name: "Квадрат 18", pr_tonn: 0,pr_length: 11.7, weight: 2.54, toler: 0, pr_price: 0,},
						{name: "Квадрат 19", pr_tonn: 0,pr_length: 11.7, weight: 2.82, toler: 0, pr_price: 0,},
						{name: "Квадрат 20", pr_tonn: 0,pr_length: 11.7, weight: 3.14, toler: 0, pr_price: 0,},
						{name: "Квадрат 21", pr_tonn: 0,pr_length: 11.7, weight: 3.46, toler: 0, pr_price: 0,},
						{name: "Квадрат 22", pr_tonn: 0,pr_length: 11.7, weight: 3.8, toler: 0, pr_price: 0,},
						{name: "Квадрат 23", pr_tonn: 0,pr_length: 11.7, weight: 4.15, toler: 0, pr_price: 0,},
						{name: "Квадрат 24", pr_tonn: 0,pr_length: 11.7, weight: 4.52, toler: 0, pr_price: 0,},
						{name: "Квадрат 25", pr_tonn: 0,pr_length: 11.7, weight: 4.91, toler: 0, pr_price: 0,},
						{name: "Квадрат 26", pr_tonn: 0,pr_length: 11.7, weight: 5.3, toler: 0, pr_price: 0,},
						{name: "Квадрат 27", pr_tonn: 0,pr_length: 11.7, weight: 5.72, toler: 0, pr_price: 0,},
						{name: "Квадрат 28", pr_tonn: 0,pr_length: 11.7, weight: 6.15, toler: 0, pr_price: 0,},
						{name: "Квадрат 29", pr_tonn: 0,pr_length: 11.7, weight: 6.6, toler: 0, pr_price: 0,},
						{name: "Квадрат 30", pr_tonn: 0,pr_length: 11.7, weight: 7.06, toler: 0, pr_price: 0,},
						{name: "Квадрат 32", pr_tonn: 0,pr_length: 11.7, weight: 8.04, toler: 0, pr_price: 0,},
						{name: "Квадрат 34", pr_tonn: 0,pr_length: 11.7, weight: 9.07, toler: 0, pr_price: 0,},
						{name: "Квадрат 35", pr_tonn: 0,pr_length: 11.7, weight: 9.62, toler: 0, pr_price: 0,},
						{name: "Квадрат 36", pr_tonn: 0,pr_length: 11.7, weight: 10.17, toler: 0, pr_price: 0,},
						{name: "Квадрат 38", pr_tonn: 0,pr_length: 11.7, weight: 11.24, toler: 0, pr_price: 0,},
						{name: "Квадрат 40", pr_tonn: 0,pr_length: 11.7, weight: 12.56, toler: 0, pr_price: 0,},
						{name: "Квадрат 42", pr_tonn: 0,pr_length: 11.7, weight: 13.85, toler: 0, pr_price: 0,},
						{name: "Квадрат 45", pr_tonn: 0,pr_length: 11.7, weight: 15.9, toler: 0, pr_price: 0,},
						{name: "Квадрат 46", pr_tonn: 0,pr_length: 11.7, weight: 16.61, toler: 0, pr_price: 0,},
						{name: "Квадрат 48", pr_tonn: 0,pr_length: 11.7, weight: 18.09, toler: 0, pr_price: 0,},
						{name: "Квадрат 50", pr_tonn: 0,pr_length: 11.7, weight: 19.62, toler: 0, pr_price: 0,},
						{name: "Квадрат 52", pr_tonn: 0,pr_length: 11.7, weight: 21.23, toler: 0, pr_price: 0,},
						{name: "Квадрат 55", pr_tonn: 0,pr_length: 11.7, weight: 23.75, toler: 0, pr_price: 0,},
						{name: "Квадрат 58", pr_tonn: 0,pr_length: 11.7, weight: 26.4, toler: 0, pr_price: 0,},
						{name: "Квадрат 60", pr_tonn: 0,pr_length: 11.7, weight: 28.26, toler: 0, pr_price: 0,},
						{name: "Квадрат 63", pr_tonn: 0,pr_length: 11.7, weight: 31.16, toler: 0, pr_price: 0,},
						{name: "Квадрат 65", pr_tonn: 0,pr_length: 11.7, weight: 33.17, toler: 0, pr_price: 0,},
						{name: "Квадрат 70", pr_tonn: 0,pr_length: 11.7, weight: 38.46, toler: 0, pr_price: 0,},
						{name: "Квадрат 75", pr_tonn: 0,pr_length: 11.7, weight: 44.16, toler: 0, pr_price: 0,},
						{name: "Квадрат 80", pr_tonn: 0,pr_length: 11.7, weight: 50.24, toler: 0, pr_price: 0,},
						{name: "Квадрат 85", pr_tonn: 0,pr_length: 11.7, weight: 56.72, toler: 0, pr_price: 0,},
						{name: "Квадрат 90", pr_tonn: 0,pr_length: 11.7, weight: 63.58, toler: 0, pr_price: 0,},
						{name: "Квадрат 93", pr_tonn: 0,pr_length: 11.7, weight: 67.9, toler: 0, pr_price: 0,},
						{name: "Квадрат 95", pr_tonn: 0,pr_length: 11.7, weight: 70.85, toler: 0, pr_price: 0,},
						{name: "Квадрат 100", pr_tonn: 0,pr_length: 11.7, weight: 78.5, toler: 0, pr_price: 0,},
						{name: "Квадрат 105", pr_tonn: 0,pr_length: 11.7, weight: 86.57, toler: 0, pr_price: 0,},
						{name: "Квадрат 110", pr_tonn: 0,pr_length: 11.7, weight: 94.98, toler: 0, pr_price: 0,},
						{name: "Квадрат 115", pr_tonn: 0,pr_length: 11.7, weight: 103.82, toler: 0, pr_price: 0,},
						{name: "Квадрат 120", pr_tonn: 0,pr_length: 11.7, weight: 113.04, toler: 0, pr_price: 0,},
						{name: "Квадрат 125", pr_tonn: 0,pr_length: 11.7, weight: 122.66, toler: 0, pr_price: 0,},
						{name: "Квадрат 130", pr_tonn: 0,pr_length: 11.7, weight: 132.67, toler: 0, pr_price: 0,},
						{name: "Квадрат 135", pr_tonn: 0,pr_length: 11.7, weight: 143.07, toler: 0, pr_price: 0,},
						{name: "Квадрат 140", pr_tonn: 0,pr_length: 11.7, weight: 153.86, toler: 0, pr_price: 0,},
						{name: "Квадрат 145", pr_tonn: 0,pr_length: 11.7, weight: 165.05, toler: 0, pr_price: 0,},
						{name: "Квадрат 150", pr_tonn: 0,pr_length: 11.7, weight: 176.63, toler: 0, pr_price: 0,},
						{name: "Квадрат 160", pr_tonn: 0,pr_length: 11.7, weight: 200.96, toler: 0, pr_price: 0,},
						{name: "Квадрат 170", pr_tonn: 0,pr_length: 11.7, weight: 227, toler: 0, pr_price: 0,},
						{name: "Квадрат 180", pr_tonn: 0,pr_length: 11.7, weight: 254, toler: 0, pr_price: 0,},
						{name: "Квадрат 190", pr_tonn: 0,pr_length: 11.7, weight: 283, toler: 0, pr_price: 0,},
						{name: "Квадрат 200", pr_tonn: 0,pr_length: 11.7, weight: 314, toler: 0, pr_price: 0,},
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
