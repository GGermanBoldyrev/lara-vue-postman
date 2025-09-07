<script setup>
import { ref, watch } from "vue"
import { useForm } from "@inertiajs/vue3"

const props = defineProps({
    modelValue: Boolean
})
const emit = defineEmits(["update:modelValue"])

const form = useForm({
    name: ""
})

watch(() => props.modelValue, (val) => {
    if (!val) form.reset()
})

function create() {
    form.post(route('workspaces.store'), {
        onSuccess: () => {
            emit("update:modelValue", false)
            form.reset()
        }
    })
}
</script>

<template>
    <v-dialog
        :model-value="props.modelValue"
        @update:model-value="emit('update:modelValue', $event)"
        max-width="400"
    >
        <v-card class="rounded-lg" elevation="8">
            <v-card-title class="text-h6 font-weight-bold pb-2">
                Создать Workspace
            </v-card-title>

            <v-divider />

            <v-card-text class="pt-8">
                <v-text-field
                    v-model="form.name"
                    label="Название Workspace"
                    variant="solo-filled"
                    density="comfortable"
                />
            </v-card-text>

            <v-card-actions class="pt-0 pb-3 px-6">
                <v-spacer />
                <v-btn text @click="emit('update:modelValue', false)">
                    Отмена
                </v-btn>
                <v-btn color="primary" variant="elevated" @click="create">
                    Создать
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<style scoped>

</style>
