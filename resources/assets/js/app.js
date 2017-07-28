window.Vue = require('vue');
window.Vuex = require('vuex');

const store = new Vuex.Store({
	state: {
		// should be rendered by php on load,
		// and hopefully adjusted in testApp, updating the DOM.
		vueVariable: null,
		list: null,
		count: null,
	},
	mutations: {
		changeVariable(state) {
			state.vueVariable = 'Oh god, VueX updated!';
			state.list = ['this', 'set', 'by', 'vue', 'ohboy!'];
		},
		reverse(state) {
			state.list.reverse();
		},
		increment(state) {
			state.count++;
		},
		decrement(state) {
			state.count--;
		},
	},
});

// PHP has set __INITIAL_STATE__ to match our vuex store / data rendered live.
if (window.__INITIAL_STATE__) {
	store.replaceState(JSON.parse(window.__INITIAL_STATE__));
}

// Child component, to be rendered by php / picked up as vue child
const childTestComponent = {
	name: 'ChildTest',
	// Trying to use the parents php render, in the child component?
	// not sure about this...
	template: '#child-test-template',
	methods: {
		increment() {
			this.$store.commit('increment');
		},
		decrement() {
			this.$store.commit('decrement');
		},
	},
};

// proof of concept element, to be displayed in the middle of a Blade Template.
const testApp = new Vue({
	name: 'TestAppRoot',
	el: '#testApp',
	template: '#test-template',
	store,
	components: {
		'child-test': childTestComponent,
	},
	created() {
		setTimeout(() => {
			// dynamically updated vue example.
			store.commit('changeVariable')
		}, 2000);
	},
	methods: {
		reverse() {
			store.commit('reverse');
		},
	},
});
