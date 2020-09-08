<div class="" id="apps">
	<b>Калькулятор уголков</b>
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
					name: "Уголки",
					selected: '',
					items: [
						{name: "Уголок 25х25*4", pr_tonn: 0,pr_length: 11.7, weight: 1.46, toler: 0, pr_price: 0,},
						{name: "Уголок 32х32*4", pr_tonn: 0,pr_length: 11.7, weight: 1.91, toler: 0, pr_price: 0,},
						{name: "Уголок 35х35*4", pr_tonn: 0,pr_length: 11.7, weight: 2.1, toler: 0, pr_price: 0,},
						{name: "Уголок 40х40*4", pr_tonn: 0,pr_length: 11.7, weight: 2.42, toler: 0, pr_price: 0,},
						{name: "Уголок 45*45*4", pr_tonn: 0,pr_length: 11.7, weight: 2.73, toler: 0, pr_price: 0,},
						{name: "Уголок 50x50*4", pr_tonn: 0,pr_length: 11.7, weight: 3.05, toler: 0, pr_price: 0,},
						{name: "Уголок 50x50*5", pr_tonn: 0,pr_length: 11.7, weight: 3.77, toler: 0, pr_price: 0,},
						{name: "Уголок 63х63*5", pr_tonn: 0,pr_length: 11.7, weight: 4.81, toler: 0, pr_price: 0,},
						{name: "Уголок 63х63*6", pr_tonn: 0,pr_length: 11.7, weight: 5.72, toler: 0, pr_price: 0,},
						{name: "Уголок 70х70*5", pr_tonn: 0,pr_length: 11.7, weight: 5.38, toler: 0, pr_price: 0,},
						{name: "Уголок 75х75*5", pr_tonn: 0,pr_length: 11.7, weight: 5.8, toler: 0, pr_price: 0,},
						{name: "Уголок 75х75*6", pr_tonn: 0,pr_length: 11.7, weight: 6.89, toler: 0, pr_price: 0,},
						{name: "Уголок 80х80*6", pr_tonn: 0,pr_length: 11.7, weight: 7.36, toler: 0, pr_price: 0,},
						{name: "Уголок 80х80*8", pr_tonn: 0,pr_length: 11.7, weight: 9.65, toler: 0, pr_price: 0,},
						{name: "Уголок 90x90*6", pr_tonn: 0,pr_length: 11.7, weight: 8.33, toler: 0, pr_price: 0,},
						{name: "Уголок 90x90*7", pr_tonn: 0,pr_length: 11.7, weight: 9.64, toler: 0, pr_price: 0,},
						{name: "Уголок 90x90*8", pr_tonn: 0,pr_length: 11.7, weight: 10.93, toler: 0, pr_price: 0,},
						{name: "Уголок 100x100*7", pr_tonn: 0,pr_length: 11.7, weight: 10.79, toler: 0, pr_price: 0,},
						{name: "Уголок 100x100*8", pr_tonn: 0,pr_length: 11.7, weight: 12.25, toler: 0, pr_price: 0,},
						{name: "Уголок 100x100*10", pr_tonn: 0,pr_length: 11.7, weight: 15.1, toler: 0, pr_price: 0,},
						{name: "Уголок 110х110*8", pr_tonn: 0,pr_length: 11.7, weight: 13.5, toler: 0, pr_price: 0,},
						{name: "Уголок 125x125*8", pr_tonn: 0,pr_length: 11.7, weight: 15.46, toler: 0, pr_price: 0,},
						{name: "Уголок 125x125*9", pr_tonn: 0,pr_length: 11.7, weight: 17.3, toler: 0, pr_price: 0,},
						{name: "Уголок 125x125*10", pr_tonn: 0,pr_length: 11.7, weight: 19.1, toler: 0, pr_price: 0,},
						{name: "Уголок 140х140*9", pr_tonn: 0,pr_length: 11.7, weight: 19.41, toler: 0, pr_price: 0,},
						{name: "Уголок 140х140*10", pr_tonn: 0,pr_length: 11.7, weight: 21.45, toler: 0, pr_price: 0,},
						{name: "Уголок 140х140*12", pr_tonn: 0,pr_length: 11.7, weight: 25.5, toler: 0, pr_price: 0,},
						{name: "Уголок 160х160*10", pr_tonn: 0,pr_length: 11.7, weight: 24.67, toler: 0, pr_price: 0,},
						{name: "Уголок 160х160*12", pr_tonn: 0,pr_length: 11.7, weight: 29.35, toler: 0, pr_price: 0,},
						{name: "Уголок 160х160*16", pr_tonn: 0,pr_length: 11.7, weight: 38.52, toler: 0, pr_price: 0,},
						{name: "Уголок 180*180*11", pr_tonn: 0,pr_length: 11.7, weight: 30.47, toler: 0, pr_price: 0,},
						{name: "Уголок 200х200*12", pr_tonn: 0,pr_length: 11.7, weight: 36.97, toler: 0, pr_price: 0,},
						{name: "Уголок 250х250*16", pr_tonn: 0,pr_length: 11.7, weight: 61.65, toler: 0, pr_price: 0,},
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
