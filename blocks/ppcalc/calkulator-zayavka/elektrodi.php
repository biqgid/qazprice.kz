<div class="" id="apps">
	<b>Калькулятор электродов</b>
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
					name: "Электроды",
					selected: '',
					items: [
						{name: "МР-3 * 3", pr_tonn: 0,pr_length: 11.7, weight: 3, toler: 0, pr_price: 0,},
						{name: "МР-3 * 4", pr_tonn: 0,pr_length: 11.7, weight: 4, toler: 0, pr_price: 0,},
						{name: "МР-3 * 5", pr_tonn: 0,pr_length: 11.7, weight: 5, toler: 0, pr_price: 0,},
						{name: "УОНИ -13/55 * 3", pr_tonn: 0,pr_length: 11.7, weight: 3, toler: 0, pr_price: 0,},
						{name: "УОНИ -13/55 * 4", pr_tonn: 0,pr_length: 11.7, weight: 4, toler: 0, pr_price: 0,},
						{name: "УОНИ -13/55 * 5", pr_tonn: 0,pr_length: 11.7, weight: 5, toler: 0, pr_price: 0,},
						{name: "НЖ-13 * 3", pr_tonn: 0,pr_length: 11.7, weight: 3, toler: 0, pr_price: 0,},
						{name: "НЖ-13 * 4", pr_tonn: 0,pr_length: 11.7, weight: 4, toler: 0, pr_price: 0,},
						{name: "НЖ-13 * 5", pr_tonn: 0,pr_length: 11.7, weight: 5, toler: 0, pr_price: 0,},
						{name: "ЦЛ-11 * 3", pr_tonn: 0,pr_length: 11.7, weight: 3, toler: 0, pr_price: 0,},
						{name: "ЦЛ-11 * 4", pr_tonn: 0,pr_length: 11.7, weight: 4, toler: 0, pr_price: 0,},
						{name: "ЦЛ-11 * 5", pr_tonn: 0,pr_length: 11.7, weight: 5, toler: 0, pr_price: 0,},
						{name: "ЦЧ-4 * 3", pr_tonn: 0,pr_length: 11.7, weight: 3, toler: 0, pr_price: 0,},
						{name: "ЦЧ-4 * 4", pr_tonn: 0,pr_length: 11.7, weight: 4, toler: 0, pr_price: 0,},
						{name: "ЦЧ-4 * 5", pr_tonn: 0,pr_length: 11.7, weight: 5, toler: 0, pr_price: 0,},

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
