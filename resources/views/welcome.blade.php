<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
		{{-- Generic PHP Template, surrounding Vue Instance --}}
		<h1>Well now, this is a php page.</h1>
		<p>Lets try rendering a {{ $phpVariable }}</p>

		{{-- Matching markup to our vue template, faking SSR=true --}}
		<div id='testApp' server-rendered="true">
			Lets try rendering a {{ $initial_state['vueVariable'] }}
		</div>

		{{-- Should match php rendered above, allowing Vue to mount clean & pull from store --}}
		<script type="text/x-template" id="test-template">
			<div id='testApp'>
				Lets try rendering a @{{ $store.state.vueVariable }}
			</div>
		</script>

		{{-- set vuex initial state via php --}}
		<script>window.__INITIAL_STATE__='{!! json_encode($initial_state) !!}'</script>

		<script type='text/javascript' src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
