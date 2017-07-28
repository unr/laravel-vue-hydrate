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

		{{--
			Will render vueTest.blade.php as static php, using $initial_state
			Will add vueTest-template as a script, in the @stack('vue')
		--}}
		@vueComponent(vueTest)

		{{--
			Will output the <script> templates for each @vueComponent
		--}}
		@stack('vue')

		{{-- set vuex initial state via php --}}
		<script>window.__INITIAL_STATE__='{!! json_encode($initial_state) !!}'</script>

		<script type='text/javascript' src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
