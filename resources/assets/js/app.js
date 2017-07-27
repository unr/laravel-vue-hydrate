window.Vue = require('vue');
window.Vuex = require('vuex');

const store = new Vuex.Store({
	state: {
		// should be rendered by php on load,
		// and hopefully adjusted in testApp, updating the DOM.
		vueVariable: null,
		list: null,
	},
	mutations: {
		changeVariable (state) {
			state.vueVariable = 'Oh god, VueX updated!';
			state.list = ['this', 'set', 'by', 'vue', 'ohboy!'];
		},
	},
});

// PHP has set __INITIAL_STATE__ to match our vuex store / data rendered live.
if (window.__INITIAL_STATE__) {
	store.replaceState(JSON.parse(window.__INITIAL_STATE__));
}

// proof of concept element, to be displayed in the middle of a Blade Template.
const testApp = new Vue({
	name: 'TestAppRoot',
	el: '#testApp',
	template: '#test-template',
	store,
	created() {
		setTimeout(() => {
			// dynamically updated vue example.
			store.commit('changeVariable')
		}, 2000);
	},
});
