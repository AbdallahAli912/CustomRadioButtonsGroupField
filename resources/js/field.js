Nova.booting((Vue, router, store) => {
  Vue.component('index-custom-radio-button', require('./components/IndexField'))
  Vue.component('detail-custom-radio-button', require('./components/DetailField'))
  Vue.component('form-custom-radio-button', require('./components/FormField'))
})
