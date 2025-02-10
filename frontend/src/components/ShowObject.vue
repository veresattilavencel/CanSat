<template>
    <ul class="mx-auto border border-black dark:border-white p-4 rounded-md border-[3px]">
        <li v-for="(item, index) in object">{{index  }}: {{ item }}</li>
    </ul>
</template>
<script>
export default {
    props: {
        object: Object
    }
}
</script>
