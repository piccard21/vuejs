<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
</head>
<body>


<div id="root">

	<input type="text" id="input" v-model="message">
	<p>
		The value of the input is: {{ message }}
	</p>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.min.js"></script>
<script>

	new Vue({
		el: "#root",
		data: {
			message: "Hello World"
		}
	})

</script>
</body>
</html>