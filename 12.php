<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<h1>Component Communication Example #1: Custom Events</h1>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>


	Vue.component('tab', {
		props: {
		},
		data() {
			return {
			}
		},
		computed: {
		},
		template: ``,
		mounted() {
		}
	});

	let app = new Vue({
		el: "#root",
		data: {},
		methods: {},
		computed: {}
	})

</script>
</body>
</html>