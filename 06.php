<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
<body>


<div id="root">
	<h1>Computed Properties</h1>

	<h2 v-text="new Date()"></h2>

	<h2>{{ message.split('').reverse().join('') }}</h2>

	<p>besser computed property</p>

	<h2>{{ reversedMessage }}</h2>

	<hr>

	<ul>
		<li v-for="task in tasks" v-text="task.description"></li>
	</ul>
	
	... filtered

	<ul>
		<li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
	</ul>

	... filtered but computed

	<ul>
		<li v-for="task in incompleteTasks" v-text="task.description"></li>
	</ul>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	let app = new Vue({
		el: "#root",
		data: {
			message: "Hello World",
			tasks: [
				{
					description: 'Goto the store',
					completed: true
				},
				{
					description: 'Goto the cinema',
					completed: false
				},
				{
					description: 'Goto the grocery',
					completed: false
				},
				{
					description: 'Goto the school',
					completed: true
				},
			]
		},
		methods: {},
		computed: {
			reversedMessage() {
				return this.message.split('').reverse().join('');
			},
			incompleteTasks() {
				return this.tasks.filter(task => !task.completed)
			}
		}
	})

</script>
</body>
</html>