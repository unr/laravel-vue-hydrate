<div id='testApp' {{ $vue ? '' : 'server-rendered="true"' }}>
	Lets try rendering a {{ $vue ? v('$store.state.vueVariable') : $initial_state['vueVariable'] }}
</div>
