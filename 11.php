<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VueJS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<body>


<div id="root" class="container">
	<h1 class="title is-3">Practical Component Exercise #3: Tabs</h1>

	<tabs>
		<tab name="About us" selected="true"><h2>Lorem ipsum dolor set 1111</h2></tab>
		<tab name="About you"><h2>Lorem ipsum dolor set 2222 </h2></tab>
		<tab name="About whom"><h2>Lorem ipsum dolor set 3333 </h2></tab>
	</tabs>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js"></script>
<script>Vue.config.devtools = true;</script>
<script>


	Vue.component('tabs', {
		template: `<div>
			<div class="tabs">
			  <ul>
			    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
			        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
			    </li>
			  </ul>
			</div>
			
			<div class="tab-details">
				<slot></slot>
			</div>
		</div>
		`,
		data() {
			return {
				tabs: []
			}
		},
		created() {
			this.tabs = this.$children;
		},
		methods: {
			selectTab(selectedTab) {
				this.tabs.forEach(tab => {
					tab.isActive = (tab.name == selectedTab.name);
				})
			}
		},
		mounted() {
			console.log(this.$children)
		}
	});


	Vue.component('tab', {
		props: {
			name: {
				required: true
			},
			selected: {
				default: false
			}
		},
		data() {
			return {
				isActive: false
			}
		},
		computed: {
			href() {
				return '#' + this.name.toLocaleLowerCase().replace(/ /g, '-')
			}
		},
		template: `
			<div v-show="isActive">
				<slot></slot>
			</div>
		`,
		mounted() {
			isActive: this.selected
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