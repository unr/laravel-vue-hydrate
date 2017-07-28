<div class='childTest'>
	<strong>{{ $vue ? v('$store.state.count') : $initial_state['count'] }}</strong>
	<button @click='increment'>++</button>
	<button @click='decrement'>--</button>
</div>
