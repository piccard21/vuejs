<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
<body>


<div id="root">
	<h1>Components Within Components</h1>

	<task-list></task-list>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	Vue.component('task-list', {
//		template: '<div><task v-for="task in tasks">{{ task.description }}</task></div>',
		// ES6 template-syntax
		template: `<ul>
			<task v-for="task in tasks">{{ task.description }}</task>
			</ul>`,
		// ACHTUNG: hier eine Funktion & kein Objekt
		data() {
			return {
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
					}
				]
			};
		}
	});

	Vue.component('task', {
		template: '<li><slot></slot></li>'
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