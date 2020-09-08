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
					name: "Балка",
					selected: '',
					items: [
						{name: "12Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "12Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "14Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "14Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "16Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "16Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "18Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "18Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "20Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "20Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "25Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "26Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "26Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "30Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "30Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "35Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "35Б2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "40Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "40Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "45Б1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "45Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "50Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "50Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "50Б2 09Г2С", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "55Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "55Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "60Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "60Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "70Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "70Б1  09Г2С", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "70Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "80Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "80Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "90Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "90Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "100Б1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "100Б2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "100Б3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "100Б4", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 20Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 23Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 25Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 26Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 26Ш2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 30Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        name: "Балка 30Ш2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 30Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35Ш2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40Ш1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40Ш2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 45Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 50Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 50Ш1 (09Г2С)", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 50Ш2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 50Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 50Ш4", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 60Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 60Ш2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 60Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 60Ш4", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 70Ш1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 70Ш2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 70Ш3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 70Ш4", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 70Ш5", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 20К1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 20К2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 23К1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 23К2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 25К1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 25К2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 26К1", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 26К2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 26К3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 30К1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 30К2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 30К3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35К1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35К2", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 35К3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40К1 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40К2 ", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40К3", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40К4", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "Балка 40К5", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "18M", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "24М", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "30М", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "36М", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},
                        {name: "45М", pr_tonn: 0,pr_length: 11.7, weight: 12, toler: 0, pr_price: 0,},




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
