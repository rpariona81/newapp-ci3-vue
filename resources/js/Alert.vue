<template>
    <div class="container">
    <div class="alert" v-text="message"></div>
    <button class="btn btn-primary" data-bs-target="#collapseTarget" data-bs-toggle="collapse">
        Bootstrap collapse
    </button>
    <div class="collapse py-2" id="collapseTarget">
        This is the toggle-able content!
    </div>
</div>
</template>

<script>
export default {
    name: 'Alert',
    data() {
        return {
            message: 'I am an alert.'
        };
    }
};
</script>

<style>
.alert {
    background: red;
}
</style>