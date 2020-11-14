<template>
    <main-layout>
        <h1>Verum</h1>
    </main-layout>
</template>

<script>

export default {
    name: 'home',

    mounted() {
        this.$api.get('characters').then(response => {
            console.log(response);
        });
    },
};

</script>
