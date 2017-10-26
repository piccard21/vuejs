<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
</head>
<body>


<div id="root">
	<ul>
		<li v-for="name in names">{{ name }}</li>
	</ul>
	
	dasselbe:
	
	<ul>
		<li v-for="name in names" v-text="name"></li>
	</ul>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	let app = new Vue({
		el: "#root",
		data: {
			names: ["Joe", "Marx", "Jane", "Hans"]
		}
	})

</script>
</body>
</html>