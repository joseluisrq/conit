<template>
    <div class="wpo-breadcumb-area">
      <div class="container">
        <div class="row mt-4">
          <div class="col-12 mt-4">
            <div class="wpo-breadcumb-wrap mt-2">
              <h2>{{titulo}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: "TituloPrincipal",
  props: {
    titulo: "",
  },
};
</script>
