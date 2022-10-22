import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import Layout from "./Shared/Layout";
import '../css/app.css';

createInertiaApp({
	resolve: name => {
		let page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));

		page.then(module => {
			if (module.default.layout === undefined) {
				module.default.layout = Layout;
			}
		});
		
		return page;
	},
	setup({ el, App, props, plugin }) {
		createApp({ render: () => h(App, props) })
			.use(plugin)
			.mount(el)
	},
});