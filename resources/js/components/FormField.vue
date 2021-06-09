<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">

            <ul >
                <li v-for="(item , index) in field.items" :key="index">
                    <label class="radio is-small"  >
                        <input
                            :id="index"
                            type="radio"
                            :name="field.name"
                            class="w-full form-control form-input form-input-bordered"
                            :class="errorClasses"
                            :placeholder="field.name"
                            :value="item"
                            v-model="value"
                        />
                       <span :id="item" style="; font-size: 18px;  font-family: 'georgia';font-weight: bold;text-align: center;">
                          {{item}}
                       </span>
                    </label>
                </li>
            </ul>

    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],


    mounted() {
        this.field.items.forEach((item)=>{
            document.getElementById(item).style.color = this.field.color ;

        });
    },
    methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
  },
}
</script>
<style>
@import "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css";
ul li {
    display:inline;
    margin-inline: 5px;
}
</style>
