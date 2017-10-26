<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">

	<h1>Practical Component Exercise #1: Message</h1>

	<piccard-message title="Hello World"
	                 body="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></piccard-message>
	<piccard-message title="Hello Universe"
	                 body="consectetur adipiscing elit."></piccard-message>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>


	Vue.component('piccard-message', {
		props: ['title', 'body'],
		template: `
			<article class="message" v-show="isVisible">
				<div class="message-header">
					<p>{{ title }}</p>
					<!--<button class="delete" @click="isVisible=false"></button>-->
					<button class="delete" @click="hideModal"></button>
				</div>
				<div class="message-body">
					{{ body }}
				</div>
			</article>
		`,
		data() {
			return {
				isVisible: true
			}
		},
		methods: {
			hideModal() {
				this.isVisible = false;
			}
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