<div class='childTest' {!! $vue ? ":key='user.name'" : 'key="'.$childItem['name'].'"' !!}>
	<strong>{{ $vue ? v('user.name') : $childItem['name'] }}</strong><br />

	{{-- Kind of messy once we do if logic in vue/not vue huh.... --}}
	@if ($vue)
		<span v-if='user.admin'>User is an admin!</span>
		<span v-else>User is NOT an admin!</span>
	@elseif (!$vue && $childItem['admin'])
		<span>User is an admin!</span>
	@else
		<span>User is NOT an admin!</span>
	@endif

	{{-- dont need to if$vue this, since it would be the same --}}
	<button @click="$store.commit('toggleAdmin', index)">Toggle Admin!</button>
</div>
