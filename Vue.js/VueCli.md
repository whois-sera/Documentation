# New Project

```
vue create my-project
```

# Bases Commands

- Run the server, Automaticly watch / complile, Automaticly reload in browser
```
npm run serve
```

- Build the app and put all the compiled files in a dist folder
```
npm run build
```

```
npm run lint
```

# Load Components

## Localy

- **src/app.vue** in *script* tag :  **Import** the component then **Register** it in the *components* propertie :

```
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
```

## Globaly

- **src/components** : Create a folder for a group of components (i.e. *news*)

- **src/components/news** : Create some components (i.e. *newsHolder.vue* and  *addHolder.vue*)

- **src/component/news** : Create an **index.js** file and fill it like this :
```
import Vue from 'vue'

Vue.component('news-holder', require('./NewsHolder').default);
Vue.component('adds-holder', require('./AddsHolder').default);
```

- **src/main.js** : Import the index.js file created

```
require('./components/news');
```
or
```
require('./components/news/index.js');
```

# Sfc Syntax

```
<template>
    <div>
        <p class="mt-5 text-secondary">Adds</p>
        <div class="mt-2">
            <div v-for="add in adds" v-bind:key="add">
                <a href="#">
                    <img v-bind:src="add" style="width: 150px;" class="d-block mb-3">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AddsHolder",
    data(){
        return {
            
        }
    }
}
</script>`

<style lang="scss">

</style>`
```