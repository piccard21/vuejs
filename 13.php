<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<h1 class="title is-3">Component Communication Example #2: Event Dispatcher</h1>

	<coupon @applied="onCouponApplied"></coupon>
	
	
	<h1 v-if="couponApplied">You use a coupon!</h1>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>
	
	
	// shared instance!!!
//	window.Event = new Vue();

	window.Event = new class {
		constructor() {
			this.vue = new Vue();
		}
		
		fire(event, data=null) {
			this.vue.$emit(event, data);
		}
		
		listen(event, callback) {
			this.vue.$on(event, callback);
		}
	}

	Vue.component('coupon', {
		template: `
			<input placeholder="Enter code" @blur="onCouponApplied">
		`,
		methods: {
			onCouponApplied() {
				console.info("applied!!!");
//				Event.$emit('applied');
				Event.fire('applied');
			}
		},
		props: {
		},
		computed: {
		},
		mounted() {
		}
	});

	let app = new Vue({
		el: "#root",
		data: {
			couponApplied: false
		},
		methods: {
			onCouponApplied() {
				console.info("It was applied");
				this.couponApplied = true;
			}
		},
		computed: {},
		created() {
//			Event.$on('applied', () => console.info('Handling it ... '));
			Event.listen('applied', () => console.info('Handling it ... '));
		}
	})

</script>
</body>
</html>