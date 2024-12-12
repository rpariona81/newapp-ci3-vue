<template>
    <DataTable :rows="data"></DataTable>
</template>
<script>
import { DataTable } from '@jobinsjp/vue3-datatable';

const data = [
    {
        "id": 1,
        "first_name": "Misti",
        "last_name": "Strase",
        "email": "mstrase0@instagram.com",
        "gender": "Non-binary",
        "ip_address": "151.38.32.165",
    },
    {
        "id": 2,
        "first_name": "Valentina",
        "last_name": "Bonas",
        "email": "vbonas1@is.gd",
        "gender": "Agender",
        "ip_address": "103.10.225.246",
    },
]

export default {
    name: 'mydataTable'
};
</script>