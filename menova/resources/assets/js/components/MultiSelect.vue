<template>
  <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row text-center text-white mb-5 py-4">
      <div class="col-lg-9 mx-auto">
        <h1 class="display-4">Bootstrap 4 multiselect dropdown</h1>
        <p class="lead mb-0">
          Using
          <a href="https://developer.snapappointments.com/bootstrap-select/" class="text-white">
            <u>bootstrap select</u>
          </a>, create a styled bootstrap 4 multiselect dropdown menu.
        </p>
        <p class="lead">
          Snippet by
          <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u>Bootstrapious</u>
          </a>
        </p>
      </div>
    </div>
    <!-- End -->

    <div class="row">
      <div class="col-lg-6 mx-auto">
        <label class="text-white mb-3 lead">Where do you live?</label>
        <!-- Multiselect dropdown -->
        <select
          multiple
          data-style="bg-white rounded-pill px-4 py-3 shadow-sm "
          class="selectpicker w-100"
        >
          <option>United Kingdom</option>
          <option>United States</option>
          <option>France</option>
          <option>Germany</option>
          <option>Italy</option>
        </select>
        <!-- End -->
      </div>
    </div>
  </div>
</template>
 
<script>
export default {
  name: 'multi-select',
  data() {
    return {
      selected: null,
      options: ["list", "of", "options"]
    };
  }
};
</script>
 
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
.bootstrap-select .bs-ok-default::after {
  width: 0.3em;
  height: 0.6em;
  border-width: 0 0.1em 0.1em 0;
  transform: rotate(45deg) translateY(0.5rem);
}

.btn.dropdown-toggle:focus {
  outline: none !important;
}
</style>