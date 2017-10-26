<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<!--	custom events-->
	<modal v-if="showModal" @close="showModal=false"></modal>
	<button @click="showModal=true">Show Modal</button>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>


	Vue.component('modal', {
		template: `
			<div class="modal is-active">
			  <div class="modal-background"></div>
			  <div class="modal-content">
			  <div class="box">
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At harum in magni, possimus quaerat rerum tempore? Amet cupiditate ex iste laboriosam libero maxime minus, omnis quisquam repellendus temporibus unde, ut!</p>
			  </div>
			</div>
			<button class="modal-close is-large" @click="$emit('close')">Show Modal</button>
			</div>
			`,
		methods: {
			hideModal() {
				this.isVisible = false;
			}
		}
	});

	let app = new Vue({
		el: "#root",
		data: {
			showModal: false
		},
		methods: {},
		computed: {}
	})

</script>
</body>
</html>