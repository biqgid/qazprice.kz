<div class="" id="apps">
	<b>Калькулятор арматуры А3</b>
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
					name: "Арматура А3",
					selected: '',
					items: [
						{name: "Арматура 6 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 850, toler: 0, pr_price: 0,},
                        {name: "Арматура 8/10 (в мотках) 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 850, toler: 0, pr_price: 0,},
                        {name: "Арматура 8 (тян. в прутах) 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 6,05, toler: 0, pr_price: 0,},
                        {name: "Арматура 10 (тян. в прутах) 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 6,05, toler: 0, pr_price: 0,},
                        {name: "Арматура 10 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 12 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 14 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 16 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 18 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 20 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 22 35ГС ", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 25 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 28 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 32 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 36 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 40 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 45 35ГС", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура_А500С", pr_tonn: 0,pr_length: 11.7, weight: , toler: 0, pr_price: 0,},
                        {name: "Арматура 6", pr_tonn: 0,pr_length: 11.7, weight: 850, toler: 0, pr_price: 0,},
                        {name: "Арматура 8 (в мотках)", pr_tonn: 0,pr_length: 11.7, weight: 850, toler: 0, pr_price: 0,},
                        {name: "Арматура 8 (тян. в прутах) ", pr_tonn: 0,pr_length: 11.7, weight: 6,05, toler: 0, pr_price: 0,},
                        {name: "Арматура 10 (тян. в прутах) ", pr_tonn: 0,pr_length: 11.7, weight: 6,05, toler: 0, pr_price: 0,},
                        {name: "Арматура 10", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 12", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 14", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 16", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 18", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 20", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 22", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 25", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 28", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 32", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 36", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 40", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},
                        {name: "Арматура 45", pr_tonn: 0,pr_length: 11.7, weight: 11,7, toler: 0, pr_price: 0,},

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
