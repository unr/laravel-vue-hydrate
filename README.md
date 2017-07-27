# Laravel - Faking SSR with Vue Hydration

> Proof of concept

Allows Blade Templates to render a PHP matching a Vue Component, and utilizing Vue Hydrate via `server-rendered="true"` to mount jankless.

Once mounted, PHP rendered DOM is handled by Vue like normal.

### Brief Demo

![asdf](http://unr.im/1Z1m281C2T3I/content)


### Running this demo.

1. Checkout Branch
2. `composer install`
3. `npm install`
4. `npm run dev`
5. `php artisan serve`


#### TODOs

- [ ] Come up with a better solution, over writing templates twice.
