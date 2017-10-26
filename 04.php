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

	<input id="input" type="text" v-model="newName">
	<button v-on:click="addName">Add name</button>
	oder <b>@click</b> statt v-on:click
	<button @click="addName">Add name</button>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	let app = new Vue({
		el: "#root",
		data: {
			newName: "",
			names: ["Joe", "Marx", "Jane", "Hans"]
		},

		methods: {
			addName() {
				this.names.push(this.newName);
				this.newName = "";
			}
		},


		mounted() {
			console.info("mounted-hook ... ready");
		}
	})

</script>
</body>
</html>