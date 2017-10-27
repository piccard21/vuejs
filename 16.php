<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>

<h1 class="title is-3">Webpack and vue-cli</h1>

see: ./my-app

<div id="root" class="container">
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	Vue.component('progress-view', {
		template: ``,
		data() {
			return {};
		},
		methods: {},
		props: {},
		computed: {},
		mounted() {
		}
	});

	let app = new Vue({
		el: "#root",
		data: {},
		methods: {},
		computed: {},
		created() {
		}
	})

</script>
</body>
</html>