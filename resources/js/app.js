import './bootstrap'
import Vue from 'vue'
import ProductTagsInput from './components/ProductTagsInput'
import Sample from './components/Sample'

const app = new Vue({
    el: '#app',
    components: {
        ProductTagsInput,
        Sample
    }
})
