<template>
    <div class="carg">
        <div v-show="cargando==true">
            <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>

        </div>
    </div>

</template>
<script>
export default {
    props: {
        cargando: "",
    },
    
}
</script>
<style>

</style>