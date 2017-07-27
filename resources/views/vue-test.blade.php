<div id='testApp' {{ $vue ? '' : 'server-rendered="true"' }}>
	<p>Lets try rendering a {{ $vue ? v('$store.state.vueVariable') : $initial_state['vueVariable'] }}</p>

	<p>How about rendering a list?</p>
	<ul>
		@if ($vue)
			<li v-for='item in $store.state.list' v-text='item'></li>
		@else
			@foreach($initial_state['list'] as $item)
				<li>{{ $item }}</li>
			@endforeach
		@endif
	</ul>
</div>
