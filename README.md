# Statamic Vue Example

**Get started quickly using Vue inside of Statamic's CP.**

This is a simple Statamic Addon with 2 custom Vue components being used in the context of the CP. By following the below setup, you should be ready to go in no time to start building your own Vue components for your Addons within the CP.

## Setup

1. Copy the `VueExample` folder into `site/addons/`.
2. Run `npm install` from within the `VueExample` directory.
3. Run `gulp`.

Following these setup steps should install all the necessary dependencies and compile everything into a single `scripts.js` file which Statamic will automatically include while loading the CP.

You should now be able to visit `/cp/addons/vueexample` and see the rendered Vue components (granted you're logged into the CP).

From this point you can simply create your Vue components (using `.vue` files, if you like) inside of `resources/assets/js/components`. Then add them to `resources/assets/js/main.js` and run `gulp` again (or run `gulp watch`) to recompile everything into the `scripts.js` file.