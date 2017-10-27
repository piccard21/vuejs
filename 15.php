<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>

<h1 class="title is-3">Single-Use Components and Inline Templates</h1>

<div id="root" class="container">
	<!--	inline-template: schlechtere Alternative zu Komponente-Template-->
	<progress-view inline-template>
		<div>

			<h1>Your progress through this course is {{ completionRate }}%</h1>

			<p>
				<button @click="completionRate +=10">Update</button>
			</p>
		</div>
	</progress-view>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	Vue.component('progress-view', {
		template: ``,
		data() {
			return {completionRate: 50};
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