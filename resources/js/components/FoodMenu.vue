<template>
  <div class="row">
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="product" id="newCategory" />
      <div class="input-group-append">
        <div class="input-group">
          <button
            @click="addCategory"
            class="btn btn-outline-secondary"
            type="button"
            id="button-addon2"
          >
            Nieuwe categorie
          </button>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="form-group">
        <div class="form-check">
          <input
            id="disabled"
            type="checkbox"
            v-model="enabled"
            class="form-check-input"
          />
          <label class="form-check-label" for="disabled">DnD enabled</label>
        </div>
      </div>
    </div>

    <div class="col-6">
      <h3>Draggable {{ draggingInfo }}</h3>

      <draggable :list="list" :disabled="!enabled" class="list-group" ghost-class="ghost" :move="checkMove" @start="dragging = true" @end="dragging = false">
        <div class="list-group-item" v-for="element in list" :key="element.name">
          {{ element.name }}
          <button>Add Product</button>
        </div>
      </draggable>
    </div>

    <rawDisplayer class="col-3" :value="list" title="List" />
  </div>
</template>

<script>
import draggable from 'vuedraggable'
import rawDisplayer from './infra/raw-displayer'
let id = 1
export default {
  name: 'simple',
  display: 'Simple',
  order: 0,
  components: {
    draggable,
    rawDisplayer,
  },
  data() {
    return {
      enabled: true,
      list: [
        { name: 'John', id: 0 },
        { name: 'Joao', id: 1 },
        { name: 'Jean', id: 2 },
      ],
      dragging: false,
    }
  },
  computed: {
    draggingInfo() {
      return this.dragging ? 'under drag' : ''
    },
  },
  methods: {
    checkMove: function(e) {
      window.console.log('Future index: ' + e.draggedContext.futureIndex)
    },
    addCategory: function() {
      this.list.push({
        'name': document.querySelector("#newCategory").value,
        'type': 'category',
        'products': [],
        'coverImg' : ''
      });
    },
  },
}
</script>
<style scoped>
.buttons {
  margin-top: 35px;
}
.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}
</style>
