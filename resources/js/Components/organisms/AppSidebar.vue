<script setup>
import {ref} from "vue"
import WorkspaceDialog from "@/Components/molecules/WorkspaceDialog.vue";

// хранит, какие группы открыты
const openedWorkspaces = ref([])

const newWorkspaceDialog = ref(false)

const workspaces = [
    {
        id: "ws1",
        title: "Workspace 1",
        items: ["Collections", "Environments", "History"]
    },
    {
        id: "ws2",
        title: "Workspace 2",
        items: ["Collections", "Environments"]
    }
]
</script>

<template>
    <aside class="main-content" style="width: 250px;">
        <!-- Заголовок -->
        <div class="d-flex align-center justify-space-between mb-4">
            <span class="text-subtitle-1 font-weight-bold">Workspaces</span>

            <v-btn
                icon="mdi-plus"
                color="primary"
                variant="text"
                size="x-small"
                @click="newWorkspaceDialog = true"
            />
        </div>

        <v-list density="compact" v-model:opened="openedWorkspaces" nav>
            <v-list-group
                v-for="ws in workspaces"
                :key="ws.id"
                :value="ws.id"
            >
                <!-- Заголовок группы -->
                <template v-slot:activator="{ props }">
                    <v-list-item v-bind="props" :title="ws.title">
                        <template #prepend>
                            <v-icon size="16">mdi-briefcase-outline</v-icon>
                        </template>
                    </v-list-item>
                </template>

                <!-- Подпункты -->
                <v-list-item
                    v-for="item in ws.items"
                    :key="item"
                    :title="item"
                    @click="console.log('Clicked', ws.title, item)"
                />
            </v-list-group>
        </v-list>

        <!-- Попап -->
        <WorkspaceDialog
            v-model="newWorkspaceDialog"
            @create="console.log('Создать workspace', $event)"
        />
    </aside>
</template>

<style scoped>

.v-list {
    padding: 6px 0;
}

.v-list-item {
    padding: 0 4px 0 0;
}

</style>
