<div class="" id="apps">
	<div v-for="product in products">
		<div class="product">
			<!--span @click="getProduct($event, product.items)">{{ product.name }}</span-->
			<select v-model="product.selected" @change="getSelected( product.name, product.selected)">
				<option disabled value="">выбрать</option>
				<option v-for="item in product.items" :value="item">{{ item.name }}</option>
			</select>
		</div>
	</div>
	<div class="ppsort" v-if="product.show">
		<span v-for="item in product.items"  @click="getItem(item)">{{ item.name }}</span>
	</div>
	<div v-if="calculator.show">
		<span>{{ calculator.name }}</span>
		<div class="gridcontainer castom">
			<div class="row">
				<div class="col-md-6">
					<label>Вес, кг.</label>
					<input onfocus="this.select();" required="" type="number" v-model="weight" @input="weightCalc()">
				</div>	
				
				<div class="col-md-6">
					<label>Длина, м.</label>
					<input onfocus="this.select();" required="" type="number" v-model="lenght" @input="lenghtCalc()">
				</div>

				<div class="col-md-6">
					<label>Количество, шт.</label>
					<input onfocus="this.select();" required="" type="number" v-model="count"  @input="countCalc()">
				</div>		
				
				<div class="col-md-6">
					<label>Всего в тенге</label>
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
					name: "Балка двутавовая СТО АСЧМ 20-93",
					selected: '',
					items: [
						{name: "10 Б1", pr_tonn: 0,pr_length: 12, weight: 8.100, toler: 0.00, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "12 Б1", pr_tonn: 0,pr_length: 12, weight: 8.700, toler: 0.05, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "12 Б2", pr_tonn: 0,pr_length: 12, weight: 10.400, toler: 0.05, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "14 Б1", pr_tonn: 0,pr_length: 12, weight: 10.500, toler: 0.05, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "14 Б2", pr_tonn: 0,pr_length: 11.7, weight: 12.900, toler: 0.05, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "16 Б1", pr_tonn: 0,pr_length: 11.7, weight: 12.700, toler: 0.05, pr_price: <?php echo $product->price_tonn ?>,},
						{name: "16 Б2", pr_tonn: 0,pr_length: 11.7, weight: 15.800, toler: 0.05, pr_price: 0,},
						{name: "18 Б1", pr_tonn: 0,pr_length: 11.7, weight: 15.400, toler: 0.05, pr_price: 0,},
						{name: "18 Б2", pr_tonn: 0,pr_length: 11.7, weight: 18.800, toler: 0.05, pr_price: 0,},
						{name: "20 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 30.600, toler: 0.05, pr_price: 0,},
						{name: "20 К1", pr_tonn: 0,pr_length: 11.7, weight: 41.400, toler: 0.05, pr_price: 0,},
						{name: "20 Б1", pr_tonn: 0,pr_length: 11.7, weight: 21.300, toler: 0.05, pr_price: 0,},
						{name: "20 К2", pr_tonn: 0,pr_length: 11.7, weight: 49.900, toler: 0.05, pr_price: 0,},
						{name: "25 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 44.100, toler: 0.05, pr_price: 0,},
						{name: "25 К1", pr_tonn: 0,pr_length: 11.7, weight: 62.600, toler: 0.05, pr_price: 0,},
						{name: "25 Б1", pr_tonn: 0,pr_length: 11.7, weight: 25.700, toler: 0.05, pr_price: 0,},
						{name: "25 Б2", pr_tonn: 0,pr_length: 11.7, weight: 29.600, toler: 0.05, pr_price: 0,},
						{name: "25 К2", pr_tonn: 0,pr_length: 11.7, weight: 72.400, toler: 0.05, pr_price: 0,},
						{name: "25 К3", pr_tonn: 0,pr_length: 11.7, weight: 80.200, toler: 0.05, pr_price: 0,},
						{name: "30 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 56.800, toler: 0.05, pr_price: 0,},
						{name: "30 Б1", pr_tonn: 0,pr_length: 11.7, weight: 32.000, toler: 0.05, pr_price: 0,},
						{name: "30 К1", pr_tonn: 0,pr_length: 11.7, weight: 87.000, toler: 0.05, pr_price: 0,},
						{name: "30 Б2", pr_tonn: 0,pr_length: 11.7, weight: 36.700, toler: 0.05, pr_price: 0,},
						{name: "30 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 68.600, toler: 0.05, pr_price: 0,},
						{name: "30 К2", pr_tonn: 0,pr_length: 11.7, weight: 94.000, toler: 0.05, pr_price: 0,},
						{name: "30 К3", pr_tonn: 0,pr_length: 11.7, weight: 105.800, toler: 0.05, pr_price: 0,},
						{name: "30 К4", pr_tonn: 0,pr_length: 11.7, weight: 105.800, toler: 0.05, pr_price: 0,},
						{name: "35 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 65.300, toler: 0.05, pr_price: 0,},
						{name: "35 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 79.700, toler: 0.05, pr_price: 0,},
						{name: "35 К1", pr_tonn: 0,pr_length: 11.7, weight: 109.100, toler: 0.05, pr_price: 0,},
						{name: "35 Б1", pr_tonn: 0,pr_length: 11.7, weight: 41.400, toler: 0.05, pr_price: 0,},
						{name: "35 Б2", pr_tonn: 0,pr_length: 11.7, weight: 49.600, toler: 0.05, pr_price: 0,},
						{name: "35 К2", pr_tonn: 0,pr_length: 11.7, weight: 136.500, toler: 0.05, pr_price: 0,},
						{name: "40 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 88.600, toler: 0.05, pr_price: 0,},
						{name: "40 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 106.700, toler: 0.05, pr_price: 0,},
						{name: "40 К1", pr_tonn: 0,pr_length: 11.7, weight: 146.600, toler: 0.05, pr_price: 0,},
						{name: "40 Б1", pr_tonn: 0,pr_length: 11.7, weight: 56.600, toler: 0.05, pr_price: 0,},
						{name: "40 Б2", pr_tonn: 0,pr_length: 11.7, weight: 66.000, toler: 0.05, pr_price: 0,},
						{name: "40 К2", pr_tonn: 0,pr_length: 11.7, weight: 171.700, toler: 0.05, pr_price: 0,},
						{name: "40 К3", pr_tonn: 0,pr_length: 11.7, weight: 200.100, toler: 0.05, pr_price: 0,},
						{name: "40 К4", pr_tonn: 0,pr_length: 11.7, weight: 231.900, toler: 0.05, pr_price: 0,},
						{name: "40 К5", pr_tonn: 0,pr_length: 11.7, weight: 290.800, toler: 0.05, pr_price: 0,},
						{name: "45 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 123.500, toler: 0.05, pr_price: 0,},
						{name: "45 Б1", pr_tonn: 0,pr_length: 11.7, weight: 66.200, toler: 0.05, pr_price: 0,},
						{name: "45 Б2", pr_tonn: 0,pr_length: 11.7, weight: 76.000, toler: 0.05, pr_price: 0,},
						{name: "50 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 114.200, toler: 0.05, pr_price: 0,},
						{name: "50 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 138.400, toler: 0.05, pr_price: 0,},
						{name: "50 Б1", pr_tonn: 0,pr_length: 11.7, weight: 72.500, toler: 0.05, pr_price: 0,},
						{name: "50 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 156.100, toler: 0.05, pr_price: 0,},
						{name: "50 Б2", pr_tonn: 0,pr_length: 11.7, weight: 79.500, toler: 0.05, pr_price: 0,},
						{name: "50 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 173.800, toler: 0.05, pr_price: 0,},
						{name: "50 Б3", pr_tonn: 0,pr_length: 11.7, weight: 89.700, toler: 0.05, pr_price: 0,},
						{name: "55 Б1", pr_tonn: 0,pr_length: 11.7, weight: 89.000, toler: 0.05, pr_price: 0,},
						{name: "55 Б2", pr_tonn: 0,pr_length: 11.7, weight: 97.900, toler: 0.05, pr_price: 0,},
						{name: "60 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 137.000, toler: 0.05, pr_price: 0,},
						{name: "60 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 170.700, toler: 0.05, pr_price: 0,},
						{name: "60 Б1", pr_tonn: 0,pr_length: 11.7, weight: 94.600, toler: 0.05, pr_price: 0,},
						{name: "60 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 198.100, toler: 0.05, pr_price: 0,},
						{name: "60 Б2", pr_tonn: 0,pr_length: 11.7, weight: 105.500, toler: 0.05, pr_price: 0,},
						{name: "60 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 225.600, toler: 0.05, pr_price: 0,},
						{name: "70 Б1", pr_tonn: 0,pr_length: 11.7, weight: 129.300, toler: 0.05, pr_price: 0,},
						{name: "70 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 166.000, toler: 0.05, pr_price: 0,},
						{name: "70 Б0", pr_tonn: 0,pr_length: 11.7, weight: 120.100, toler: 0.05, pr_price: 0,},
						{name: "70 Б2", pr_tonn: 0,pr_length: 11.7, weight: 144.200, toler: 0.05, pr_price: 0,},
						{name: "70 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 190.400, toler: 0.05, pr_price: 0,},
						{name: "70 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 226.900, toler: 0.05, pr_price: 0,},
						{name: "70 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 258.600, toler: 0.05, pr_price: 0,},
						{name: "70 Ш5", pr_tonn: 0,pr_length: 11.7, weight: 294.900, toler: 0.05, pr_price: 0,},
						{name: "80 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 164.600, toler: 0.05, pr_price: 0,},
						{name: "80 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 191.100, toler: 0.05, pr_price: 0,},
						{name: "90 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 191.500, toler: 0.05, pr_price: 0,},
						{name: "90 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 212.600, toler: 0.05, pr_price: 0,},
						{name: "100 Ш1", pr_tonn: 0,pr_length: 11.7, weight: 230.600, toler: 0.05, pr_price: 0,},
						{name: "100 Ш2", pr_tonn: 0,pr_length: 11.7, weight: 258.200, toler: 0.05, pr_price: 0,},
						{name: "100 Ш3", pr_tonn: 0,pr_length: 11.7, weight: 285.700, toler: 0.05, pr_price: 0,},
						{name: "100 Ш4", pr_tonn: 0,pr_length: 11.7, weight: 314.500, toler: 0.05, pr_price: 0,},
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
