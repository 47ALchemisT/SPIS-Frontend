<template>
  <Transition name="modal">
    <div v-if="isVisible" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
      <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-semibold">{{ title }}</h3>
          <button @click="closeModal" class="text-gray-500 hover:text-gray-700">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <div>
          <!-- Modal Content Slot -->
          <slot></slot>
        </div>
      </div>
    </div>
  </Transition>
</template>

<script setup>
import { ref, defineProps, defineEmits, watch } from 'vue';

const props = defineProps({
  isVisible: Boolean,
  title: {
    type: String,
    default: 'Modal Title'
  }
});

const emit = defineEmits(['close']);

const closeModal = () => {
  emit('close');
};
</script>

<style scoped>
.modal-enter-active,
.modal-leave-active {
  transition: opacity 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}
</style>