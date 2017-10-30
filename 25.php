<h1>Custom Input Components</h1>


<p>
	see <a href="https://laracasts.com/series/learn-vue-2-step-by-step/episodes/25">https://laracasts.com/series/learn-vue-2-step-by-step/episodes/25</a>
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