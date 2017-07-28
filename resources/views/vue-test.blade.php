<div id='testApp' {{ $vue ? '' : 'server-rendered="true"' }}>
	<p>Lets try rendering a {{ $vue ? v('$store.state.vueVariable') : $initial_state['vueVariable'] }}</p>

	<p>
		<button @click='reverse'>Lets reverse our list!</button>
		(works once vue is on, can reverse before vue updates var)
	</p>

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

	<br /><br /><br />

	<p>Lets try a child component!</p>

	@if ($vue)
		<child-test></child-test>
	@else
		@include('child-test', ['vue' => false])
	@endif

	<br /><br /><br />

	<p>How about a Laravel Collection, as child components?</p>
	@if ($vue)
		<user-test v-for='(user, index) in $store.state.childItems' :key='user.name' :user='user' :index='index'></user-test>
	@else
		@foreach($initial_state['childItems'] as $childItem)
			@include('child-collection', ['vue' => false, 'item' => $childItem])
		@endforeach
	@endif
</div>
