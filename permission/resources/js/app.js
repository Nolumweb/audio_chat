import './bootstrap';

//import { createApp } from 'vue';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


import { createApp } from 'vue';
import AgoraChat from './components/AgoraChat.vue';

const app = createApp({
    // ...
});

app.component('agora-chat', AgoraChat);
app.mount('#app');




//Vue.component("agora-chat", require("./components/AgoraChat.vue").default);

 //Vue.component("agora-chat", require("./components/AgoraChat.vue").default);
 //console.log("chino is running!");
 //import AgoraChat from './components/AgoraChat.vue';


//  const app = createApp({});
//  app.component('agora-chat', AgoraChat);
//  app.mount('#app'); // Replace '#app' with your root element selector


//  const app = new createApp({
//     el: "#app",
//         components: {
//         'agora-chat': AgoraChat,
//     },
//     template: '<agora-chat></agora-chat>',
// });
// app.mount("#app");


//import AgoraChat from './components/AgoraChat'; // Adjust the import path as needed

// new Vue({
//     el: '#app',
//     components: {
//         'agora-chat': AgoraChat,
//     },
//     template: '<agora-chat></agora-chat>',
// });

