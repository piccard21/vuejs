export default {
	template: '<div>{{message | capitalize}}</div>',

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
	}

}