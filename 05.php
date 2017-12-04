<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<style>
		.color-red {
			color: red;
		}
		 .is-loading {
			 background: cadetblue;
		 }
	</style>
</head>
<body>


<div id="root">
	<h2 :class="className">Attribute- & Class-Binding</h2>
	<button v-bind:title="title">Hover over me</button>
	<p>
		<b>:title</b> statt <b>v-bind:title</b>
	</p>

	<button :title="title" :class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Class</button>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	let app = new Vue({
		el: "#root",
		data: {
			className: "color-red",
			title: "I am the VueJS-title",
			isLoading: false
		},
		methods: {
			toggleClass() {
				this.isLoading = !this.isLoading;
			}
		}
	})

</script>
</body>
</html>