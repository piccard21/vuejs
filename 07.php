<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
<body>


<div id="root">
	<h1>Components - 01</h1>

	<task>Goto the store</task>
	<task>Goto the school</task>
	<task>Goto the cinema</task>
	
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>
	
	Vue.component('task', {
		template: '<li><slot></slot></li>'
	});

	let app = new Vue({
		el: "#root",
		data: {
		},
		methods: {},
		computed: {
		}
	})

</script>
</body>
</html>