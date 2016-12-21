<template>
    <div>
        <h1>{{ title }}</h1>
        <ul class="component-list">
            <li v-for="(key, val) in data">
                <a href="#" @click.prevent="clickMe(key, val)">{{ key }}: {{ val }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['data'],

    data: function() {
        return {
            title: 'Vue Example Title'
        };
    },

    methods: {
        clickMe: function(key, val) {
            alert(`${key}: ${val}`);
        }
    },

    computed: {
        //
    },

    ready: function() {
        console.log('Test Component is ready...');
    }
}
</script>

<style lang="sass">
.component-list {
    margin: 10px 0 0;
    padding-left: 20px;
    
    li {
        margin: 5px 0 0;
    }
}
</style>