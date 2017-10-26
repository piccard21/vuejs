<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<h1>Component Communication Example #1: Custom Events</h1>

	<coupon @applied="onCouponApplied"></coupon>
	
	
	<h1 v-if="couponApplied">You use a coupon!</h1>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>


	Vue.component('coupon', {
		template: `
			<input placeholder="Enter code" @blur="onCouponApplied">
		`,
		methods: {
			onCouponApplied() {
				console.info("applied!!!");
//				this.$emit('applied', this.coupon);
				this.$emit('applied');
			}
		},
		props: {
		},
		data() {
			return {
			}
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
		computed: {}
	})

</script>
</body>
</html>