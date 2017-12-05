export default {
	// template: '<div>{{message | capitalize}}</div>',
	template: '<div>{{ notification }}</div>',

	props: ['message'],

	// data() {
	// 	return {
	// 		message: "Hello World"
	// 	}
	// },

	filters: {
		capitalize(message) {
			return message.toUpperCase();
		}
	},

	computed: {
		notification() {
			return this.message.toUpperCase();
		}
	}

}