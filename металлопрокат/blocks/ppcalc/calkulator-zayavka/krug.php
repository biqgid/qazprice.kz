<div class="" id="apps">
	<b>Калькулятор кругов</b>
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
					name: "Круг",
					selected: '',
					items: [
						{name: "Круг 5", pr_tonn: 0,pr_length: 11.7, weight: 0.154, toler: 0, pr_price: 0,},
						{name: "Круг 5,5", pr_tonn: 0,pr_length: 11.7, weight: 0.186, toler: 0, pr_price: 0,},
						{name: "Круг 6", pr_tonn: 0,pr_length: 11.7, weight: 0.222, toler: 0, pr_price: 0,},
						{name: "Круг 6,3", pr_tonn: 0,pr_length: 11.7, weight: 0.245, toler: 0, pr_price: 0,},
						{name: "Круг 6,5", pr_tonn: 0,pr_length: 11.7, weight: 0.26, toler: 0, pr_price: 0,},
						{name: "Круг 7", pr_tonn: 0,pr_length: 11.7, weight: 0.302, toler: 0, pr_price: 0,},
						{name: "Круг 8", pr_tonn: 0,pr_length: 11.7, weight: 0.395, toler: 0, pr_price: 0,},
						{name: "Круг 9", pr_tonn: 0,pr_length: 11.7, weight: 0.499, toler: 0, pr_price: 0,},
						{name: "Круг 10", pr_tonn: 0,pr_length: 11.7, weight: 0.616, toler: 0, pr_price: 0,},
						{name: "Круг 11", pr_tonn: 0,pr_length: 11.7, weight: 0.746, toler: 0, pr_price: 0,},
						{name: "Круг 12", pr_tonn: 0,pr_length: 11.7, weight: 0.888, toler: 0, pr_price: 0,},
						{name: "Круг 13", pr_tonn: 0,pr_length: 11.7, weight: 1.04, toler: 0, pr_price: 0,},
						{name: "Круг 14", pr_tonn: 0,pr_length: 11.7, weight: 1.21, toler: 0, pr_price: 0,},
						{name: "Круг 15", pr_tonn: 0,pr_length: 11.7, weight: 1.39, toler: 0, pr_price: 0,},
						{name: "Круг 16", pr_tonn: 0,pr_length: 11.7, weight: 1.58, toler: 0, pr_price: 0,},
						{name: "Круг 17", pr_tonn: 0,pr_length: 11.7, weight: 1.78, toler: 0, pr_price: 0,},
						{name: "Круг 18", pr_tonn: 0,pr_length: 11.7, weight: 2, toler: 0, pr_price: 0,},
						{name: "Круг 19", pr_tonn: 0,pr_length: 11.7, weight: 2.23, toler: 0, pr_price: 0,},
						{name: "Круг 20", pr_tonn: 0,pr_length: 11.7, weight: 2.47, toler: 0, pr_price: 0,},
						{name: "Круг 21", pr_tonn: 0,pr_length: 11.7, weight: 2.72, toler: 0, pr_price: 0,},
						{name: "Круг 22", pr_tonn: 0,pr_length: 11.7, weight: 2.98, toler: 0, pr_price: 0,},
						{name: "Круг 23", pr_tonn: 0,pr_length: 11.7, weight: 3.26, toler: 0, pr_price: 0,},
						{name: "Круг 24", pr_tonn: 0,pr_length: 11.7, weight: 3.55, toler: 0, pr_price: 0,},
						{name: "Круг 25", pr_tonn: 0,pr_length: 11.7, weight: 3.85, toler: 0, pr_price: 0,},
						{name: "Круг 26", pr_tonn: 0,pr_length: 11.7, weight: 4.17, toler: 0, pr_price: 0,},
						{name: "Круг 27", pr_tonn: 0,pr_length: 11.7, weight: 4.5, toler: 0, pr_price: 0,},
						{name: "Круг 28", pr_tonn: 0,pr_length: 11.7, weight: 4.83, toler: 0, pr_price: 0,},
						{name: "Круг 29", pr_tonn: 0,pr_length: 11.7, weight: 5.18, toler: 0, pr_price: 0,},
						{name: "Круг 30", pr_tonn: 0,pr_length: 11.7, weight: 5.55, toler: 0, pr_price: 0,},
						{name: "Круг 31", pr_tonn: 0,pr_length: 11.7, weight: 5.92, toler: 0, pr_price: 0,},
						{name: "Круг 32", pr_tonn: 0,pr_length: 11.7, weight: 6.31, toler: 0, pr_price: 0,},
						{name: "Круг 33", pr_tonn: 0,pr_length: 11.7, weight: 6.71, toler: 0, pr_price: 0,},
						{name: "Круг 34", pr_tonn: 0,pr_length: 11.7, weight: 7.13, toler: 0, pr_price: 0,},
						{name: "Круг 35", pr_tonn: 0,pr_length: 11.7, weight: 7.55, toler: 0, pr_price: 0,},
						{name: "Круг 36", pr_tonn: 0,pr_length: 11.7, weight: 7.99, toler: 0, pr_price: 0,},
						{name: "Круг 37", pr_tonn: 0,pr_length: 11.7, weight: 8.44, toler: 0, pr_price: 0,},
						{name: "Круг 38", pr_tonn: 0,pr_length: 11.7, weight: 8.9, toler: 0, pr_price: 0,},
						{name: "Круг 39", pr_tonn: 0,pr_length: 11.7, weight: 9.38, toler: 0, pr_price: 0,},
						{name: "Круг 40", pr_tonn: 0,pr_length: 11.7, weight: 9.86, toler: 0, pr_price: 0,},
						{name: "Круг 41", pr_tonn: 0,pr_length: 11.7, weight: 10.336, toler: 0, pr_price: 0,},
						{name: "Круг 42", pr_tonn: 0,pr_length: 11.7, weight: 10.88, toler: 0, pr_price: 0,},
						{name: "Круг 43", pr_tonn: 0,pr_length: 11.7, weight: 11.4, toler: 0, pr_price: 0,},
						{name: "Круг 44", pr_tonn: 0,pr_length: 11.7, weight: 11.94, toler: 0, pr_price: 0,},
						{name: "Круг 45", pr_tonn: 0,pr_length: 11.7, weight: 12.48, toler: 0, pr_price: 0,},
						{name: "Круг 46", pr_tonn: 0,pr_length: 11.7, weight: 13.05, toler: 0, pr_price: 0,},
						{name: "Круг 47", pr_tonn: 0,pr_length: 11.7, weight: 13.61, toler: 0, pr_price: 0,},
						{name: "Круг 48", pr_tonn: 0,pr_length: 11.7, weight: 14.2, toler: 0, pr_price: 0,},
						{name: "Круг 50", pr_tonn: 0,pr_length: 11.7, weight: 15.42, toler: 0, pr_price: 0,},
						{name: "Круг 52", pr_tonn: 0,pr_length: 11.7, weight: 16.67, toler: 0, pr_price: 0,},
						{name: "Круг 53", pr_tonn: 0,pr_length: 11.7, weight: 17.32, toler: 0, pr_price: 0,},
						{name: "Круг 54", pr_tonn: 0,pr_length: 11.7, weight: 17.97, toler: 0, pr_price: 0,},
						{name: "Круг 55", pr_tonn: 0,pr_length: 11.7, weight: 18.65, toler: 0, pr_price: 0,},
						{name: "Круг 56", pr_tonn: 0,pr_length: 11.7, weight: 19.33, toler: 0, pr_price: 0,},
						{name: "Круг 58", pr_tonn: 0,pr_length: 11.7, weight: 20.74, toler: 0, pr_price: 0,},
						{name: "Круг 60", pr_tonn: 0,pr_length: 11.7, weight: 22.19, toler: 0, pr_price: 0,},
						{name: "Круг 62", pr_tonn: 0,pr_length: 11.7, weight: 23.7, toler: 0, pr_price: 0,},
						{name: "Круг 63", pr_tonn: 0,pr_length: 11.7, weight: 24.47, toler: 0, pr_price: 0,},
						{name: "Круг 65", pr_tonn: 0,pr_length: 11.7, weight: 26.05, toler: 0, pr_price: 0,},
						{name: "Круг 67", pr_tonn: 0,pr_length: 11.7, weight: 27.68, toler: 0, pr_price: 0,},
						{name: "Круг 68", pr_tonn: 0,pr_length: 11.7, weight: 28.51, toler: 0, pr_price: 0,},
						{name: "Круг 70", pr_tonn: 0,pr_length: 11.7, weight: 30.21, toler: 0, pr_price: 0,},
						{name: "Круг 72", pr_tonn: 0,pr_length: 11.7, weight: 31.96, toler: 0, pr_price: 0,},
						{name: "Круг 75", pr_tonn: 0,pr_length: 11.7, weight: 34.68, toler: 0, pr_price: 0,},
						{name: "Круг 78", pr_tonn: 0,pr_length: 11.7, weight: 37.51, toler: 0, pr_price: 0,},
						{name: "Круг 80", pr_tonn: 0,pr_length: 11.7, weight: 39.46, toler: 0, pr_price: 0,},
						{name: "Круг 82", pr_tonn: 0,pr_length: 11.7, weight: 41.46, toler: 0, pr_price: 0,},
						{name: "Круг 85", pr_tonn: 0,pr_length: 11.7, weight: 44.54, toler: 0, pr_price: 0,},
						{name: "Круг 87", pr_tonn: 0,pr_length: 11.7, weight: 46.64, toler: 0, pr_price: 0,},
						{name: "Круг 90", pr_tonn: 0,pr_length: 11.7, weight: 49.94, toler: 0, pr_price: 0,},
						{name: "Круг 92", pr_tonn: 0,pr_length: 11.7, weight: 52.16, toler: 0, pr_price: 0,},
						{name: "Круг 95", pr_tonn: 0,pr_length: 11.7, weight: 55.64, toler: 0, pr_price: 0,},
						{name: "Круг 97", pr_tonn: 0,pr_length: 11.7, weight: 57.98, toler: 0, pr_price: 0,},
						{name: "Круг 100", pr_tonn: 0,pr_length: 11.7, weight: 61.65, toler: 0, pr_price: 0,},
						{name: "Круг 105", pr_tonn: 0,pr_length: 11.7, weight: 67.97, toler: 0, pr_price: 0,},
						{name: "Круг 110", pr_tonn: 0,pr_length: 11.7, weight: 74.6, toler: 0, pr_price: 0,},
						{name: "Круг 115", pr_tonn: 0,pr_length: 11.7, weight: 81.54, toler: 0, pr_price: 0,},
						{name: "Круг 120", pr_tonn: 0,pr_length: 11.7, weight: 88.78, toler: 0, pr_price: 0,},
						{name: "Круг 125", pr_tonn: 0,pr_length: 11.7, weight: 96.33, toler: 0, pr_price: 0,},
						{name: "Круг 130", pr_tonn: 0,pr_length: 11.7, weight: 104.2, toler: 0, pr_price: 0,},
						{name: "Круг 135", pr_tonn: 0,pr_length: 11.7, weight: 112.36, toler: 0, pr_price: 0,},
						{name: "Круг 140", pr_tonn: 0,pr_length: 11.7, weight: 120.84, toler: 0, pr_price: 0,},
						{name: "Круг 145", pr_tonn: 0,pr_length: 11.7, weight: 129.6, toler: 0, pr_price: 0,},
						{name: "Круг 150", pr_tonn: 0,pr_length: 11.7, weight: 138.72, toler: 0, pr_price: 0,},
						{name: "Круг 155", pr_tonn: 0,pr_length: 11.7, weight: 148.05, toler: 0, pr_price: 0,},
						{name: "Круг 160", pr_tonn: 0,pr_length: 11.7, weight: 157.83, toler: 0, pr_price: 0,},
						{name: "Круг 165", pr_tonn: 0,pr_length: 11.7, weight: 167.77, toler: 0, pr_price: 0,},
						{name: "Круг 170", pr_tonn: 0,pr_length: 11.7, weight: 178.18, toler: 0, pr_price: 0,},
						{name: "Круг 175", pr_tonn: 0,pr_length: 11.7, weight: 188.72, toler: 0, pr_price: 0,},
						{name: "Круг 180", pr_tonn: 0,pr_length: 11.7, weight: 199.76, toler: 0, pr_price: 0,},
						{name: "Круг 185", pr_tonn: 0,pr_length: 11.7, weight: 210.91, toler: 0, pr_price: 0,},
						{name: "Круг 190", pr_tonn: 0,pr_length: 11.7, weight: 222.57, toler: 0, pr_price: 0,},
						{name: "Круг 195", pr_tonn: 0,pr_length: 11.7, weight: 234.32, toler: 0, pr_price: 0,},
						{name: "Круг 200", pr_tonn: 0,pr_length: 11.7, weight: 246.62, toler: 0, pr_price: 0,},
						{name: "Круг 210", pr_tonn: 0,pr_length: 11.7, weight: 271.89, toler: 0, pr_price: 0,},
						{name: "Круг 220", pr_tonn: 0,pr_length: 11.7, weight: 298.4, toler: 0, pr_price: 0,},
						{name: "Круг 230", pr_tonn: 0,pr_length: 11.7, weight: 326.15, toler: 0, pr_price: 0,},
						{name: "Круг 240", pr_tonn: 0,pr_length: 11.7, weight: 355.13, toler: 0, pr_price: 0,},
						{name: "Круг 250", pr_tonn: 0,pr_length: 11.7, weight: 385.34, toler: 0, pr_price: 0,},
						{name: "Круг 260", pr_tonn: 0,pr_length: 11.7, weight: 416.57, toler: 0, pr_price: 0,},
						{name: "Круг 270", pr_tonn: 0,pr_length: 11.7, weight: 449.22, toler: 0, pr_price: 0,},
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
