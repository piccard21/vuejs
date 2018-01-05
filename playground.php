<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WHATEVER</title>
</head>
<body>


<div id="app">
	<my-component></my-component>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>
 
	// import Example from './components/Example.vue';
	
	Vue.component('my-component', {
		template: '<div>A custom component!</div>'
	})

	new Vue({
		el: "#app",
		// components: {},
		data: {},
		methods: {},
		computed: {},
		created() {},
		mounted() {}
	});

</script>
</body>
</html>