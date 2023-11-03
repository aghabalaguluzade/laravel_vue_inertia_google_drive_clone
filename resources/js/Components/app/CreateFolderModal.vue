<template>
    <Modal :show="modelValue">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Create New Folder
            </h2>

            <div class="mt-6">
                <InputLabel for="folderName" value="folderName" />
                <TextInput type="text" id="folderName" 
                    v-model="form.name" 
                    class="mt-1 block w-full" 
                    :class="form.errors.name ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : '' " 
                    placeholder="Folder Name"
                    @keyup.enter="createFolder" />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>
        </div>
    </Modal>
</template>

<script setup>
    import Modal from "@/Components/Modal.vue";
    import InputLabel from "@/Components/InputLabel.vue";
    import TextInput from "@/Components/TextInput.vue";
    import InputError from "@/Components/InputError.vue";
    import { useForm } from "@inertiajs/vue3";

    const { modelValue } = defineProps({
        modelValue : Boolean
    });

    const form = useForm({
        name : ''
    });

    function createFolder() {
        console.log(form.name);
    }

</script>