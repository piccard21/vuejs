<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<h1>Named Slots in a Nutshell</h1>
	
	<modal>
		<!-- template-tag wird in Komponente einfach weggelassen-->
		<template slot="header">My title</template>
		
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
		
		<div slot="footer">
			<button class="button is-success">Save changes</button>
			<button class="button">Cancel</button>
		</div>
	</modal>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>

	Vue.component('modal', {
		template: `
		<div class="modal is-active">
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title">
		            <slot name="header"></slot>
				</p>
		      <button class="delete" aria-label="close"></button>
		    </header>
		    <section class="modal-card-body">
		            <slot></slot>
			</section>
			<footer class="modal-card-foot">
		            <slot name="footer">
						<button class="button is-success">OK</button>
					</slot>
			</footer>
			</div>
			</div>
			`,
			methods: {},
			props: {},
			computed: {},
			mounted() {}
		});
	
		let app = new Vue({
			el: "#root",
			data: {
			},
			methods: {
			},
			computed: {},
			created() {
			}
		})
	
</script>
</body>
</html>