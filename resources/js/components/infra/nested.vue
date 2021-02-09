<template>
  <draggable class="dragArea" tag="ul" :list="products" :group="{ name: 'g1' }">
    <li v-for="el in products" :key="el.name">
      <p>{{ el.name }}</p>
      <nested-draggable :products="el.products" />
    </li>
  </draggable>
</template>
<script>
import draggable from "vuedraggable";
export default {
  props: {
    products: {
      required: true,
      type: Array
    }
  },
  components: {
    draggable
  },
  name: "nested-draggable"
};
</script>
<style scoped>
    .dragArea {
      min-height: 50px;
      outline: 1px solid;
    }
</style>