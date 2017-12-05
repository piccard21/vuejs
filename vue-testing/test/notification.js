import Vue from 'vue/dist/vue.js';
import test from 'ava';
import Notification from '../src/Notification';

// test('that it renders notification', t => {
// 	// t.is(Notification.data().message, 'Hello World')
//
// 	// let n = new Vue(Notification).$mount();
//
// 	let N = Vue.extend(Notification);
//
// 	let vm = new N({propsData: {
// 		message: 'Foobar'
// 		}}).$mount();
//
// 	t.is(vm.$el.textContent, 'Foobar')
// });

let vm;

test.beforeEach(t => {

	let N = Vue.extend(Notification);
	vm = new N({
		propsData: {
			message: 'foobar'
		}
	}).$mount();

});

// test('that it capitalzes the message', t => {
// 	t.is(vm.$el.textContent, 'FOOBAR')
// });

test('that it renders a notification', t => {
	t.is(vm.$el.textContent, 'FOOBAR')
});

test('that it computes the notification', t => {
	t.is(vm.notification, 'FOOBAR')
});