# Laravel - Faking SSR with Vue Hydration

> Proof of concept

Allows Blade Templates to render a PHP matching a Vue Component, and utilizing Vue Hydrate via `server-rendered="true"` to mount jankless.

Once mounted, PHP rendered DOM is handled by Vue like normal.

### Basic Features

- Vue Apps rendered static within a Laravel Blade Template.
- Jankless mounting into Vue.
- Write code 'once' (albeit, quite messy with ifs right now)
- Example utilizing Laravel Collections, and jankless rendering that state
- PHP feeds Initial state to Vuex

### Brief Demo

![example of build](http://unr.im/2D1Y2w0H1n3r/content)


### Running this demo.

1. Checkout Branch
2. `composer install`
3. `npm install`
4. `npm run dev`
5. `php artisan serve`


#### TODOs

- [x] Come up with a better solution, over writing templates twice.
	- [x] Come up with an **even better solution**, over writing templates twice.
- [x] How do we handle child components?
	- [ ] How do we handle child components.... better?
