<div class="" id="apps">
	<b>Калькулятор кругов</b>
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
					name: "Круг",
					selected: '',
					items: [
						{name: "5", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "5,5", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "6", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "6,3", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "6,5", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "7", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "8", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "9", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "10 (бунты)", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "10", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "11", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "12", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "13", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "14", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "15", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "16", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "17", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "18", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "19", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "20", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "21", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "22", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "23", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "24", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "25", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "26", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "27", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "28", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "29", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "30", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "31", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "32", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "33", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "34", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "35", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "36", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "36 ст45", pr_tonn: 0,pr_length: 11.7, weight: , toler: 0, pr_price: 0,},
						{name: "37", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "38", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "39", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "40", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "41", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "42", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "43", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "44", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "45", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "46", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "47", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "48", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "50", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "52", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "53", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "54", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "55", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "56", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "58", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "60", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "62", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "63", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "65", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "67", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "68", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "70", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "72", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "75", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "78", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "80", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "82", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "85", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "87", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "90", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "92", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "95", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "97", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "100", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "105", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "110", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "115", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "120", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "125", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "130", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "135", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "140", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "145", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "150", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "155", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "160", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "165", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "170", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "175", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "180", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "185", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "190", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "195", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "200", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "210", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "220", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "230", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "240", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "250", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "260", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
						{name: "270", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
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
