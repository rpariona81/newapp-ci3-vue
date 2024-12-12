/*import * as Vue from 'vue';*/

//import { createApp } from 'vue';
//import Alert from './Alert.vue';

/*const app = createApp({
    render: (h) => h(Alert, {}),
}).mount('#app');*/

/*const app = createApp({
    setup() {
        el: '#app',
        components: { Alert }
    }
});

app.mount('#app');

/*new Vue({
    el: '#app',
    components: { Alert }
});*/

/*new Vue({
    render: h => h(Alert),
  }).$mount('#app');
*/

//2024-12-08 eureka
//https://stackoverflow.com/questions/65529646/why-the-render-h-function-cannot-use-component-name-directly-to-render-in-vue3-x
import { createApp, h, resolveComponent } from 'vue';
import Alert from './Alert.vue';
import mydataTable from './Datatable.vue';

require('../../node_modules/bootstrap/dist/js/bootstrap.bundle');
require('../../node_modules/@jobinsjp/vue3-datatable/dist/vue3-datatable.es');

createApp({
    render: () => h(Alert, {}),
    //render: () => h(mydataTable, {}),
}).mount('#app');