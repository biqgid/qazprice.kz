<div class="" id="apps">
	<b>Калькулятор швеллера</b>
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
					name: "Швеллер",
					selected: '',
					items: [
						{name: "Швеллер 5У", pr_tonn: 0,pr_length: 11.7, weight: 4.84, toler: 0, pr_price: 0,},
						{name: "Швеллер 6,5У ", pr_tonn: 0,pr_length: 11.7, weight: 5.9, toler: 0, pr_price: 0,},
						{name: "Швеллер 8У", pr_tonn: 0,pr_length: 11.7, weight: 7.05, toler: 0, pr_price: 0,},
						{name: "Швеллер 10П ", pr_tonn: 0,pr_length: 11.7, weight: 8.59, toler: 0, pr_price: 0,},
						{name: "Швеллер 12П", pr_tonn: 0,pr_length: 11.7, weight: 10.4, toler: 0, pr_price: 0,},
						{name: "Швеллер 14П", pr_tonn: 0,pr_length: 11.7, weight: 12.3, toler: 0, pr_price: 0,},
						{name: "Швеллер 16У", pr_tonn: 0,pr_length: 11.7, weight: 14.2, toler: 0, pr_price: 0,},
						{name: "Швеллер 18У ", pr_tonn: 0,pr_length: 11.7, weight: 16.3, toler: 0, pr_price: 0,},
						{name: "Швеллер 20У ", pr_tonn: 0,pr_length: 11.7, weight: 18.4, toler: 0, pr_price: 0,},
						{name: "Швеллер 22П", pr_tonn: 0,pr_length: 11.7, weight: 21, toler: 0, pr_price: 0,},
						{name: "Швеллер 24У ", pr_tonn: 0,pr_length: 11.7, weight: 24, toler: 0, pr_price: 0,},
						{name: "Швеллер 30У ", pr_tonn: 0,pr_length: 11.7, weight: 31.8, toler: 0, pr_price: 0,},
						{name: "Швеллер 27У ", pr_tonn: 0,pr_length: 11.7, weight: 27.7, toler: 0, pr_price: 0,},
						{name: "Швеллер 40П", pr_tonn: 0,pr_length: 11.7, weight: 48.3, toler: 0, pr_price: 0,},
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
