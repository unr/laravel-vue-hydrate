# Laravel - Faking SSR with Vue Hydration

> Proof of concept

Allows Blade Templates to render a PHP matching a Vue Component, and utilizing Vue Hydrate via `server-rendered="true"` to mount jankless.

Once mounted, PHP rendered DOM is handled by Vue like normal.

Original concept came from reading [this article by Anthony Gore](https://vuejsdevelopers.com/2017/04/09/vue-laravel-fake-server-side-rendering/)

### Goals

1. Laravel Based Routes & Views
2. Jankless Rendering of Vue Compoenents within Blade Templates.
3. Conciously keeping php rendered & vue template state in sync while building
4. Release lootmarket/LaravelVueComponent as a standalone blade directive.

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


### Vue Proof Of Concepts:

- [x] Jankless Variable Loading (replaces VueX State on load)
- [x] Capable of using child components
- [ ] Transitions (how can php set initial transition state to match vue state?)
- [ ] ~~Vue Router~~ no need, assumption here is laravel routing.
