<h1>Custom Input Components</h1>


<p>
	see <a href="https://github.com/laracasts/Vue-SPA-Essentials-Routing/tree/master/resources/assets/js">github-repo</a>
</p>


<code>
	Vue.component('coupon', {
		propos: ['code'],
		template: `
			<input ="text" :value="code" @input="updateCode($event.target.value)" ref="input">
		`;
		data() {
			return {
				invalids: ['AAAA', 'BBBB']
			}
		}
		methods: {
			updateCode(code) {
				if(this.invalids.includes(code)) {
					alert("No valid'");
				
					this.$refs.input.value = code = '';
				}
	
				this.$emit('input', code);
			}
		}
	});
</code>