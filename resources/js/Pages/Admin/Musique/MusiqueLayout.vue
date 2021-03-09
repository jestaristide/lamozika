<template>
    <div>
        <admin-layout>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div>

                    <inertia-link :href="route('musique.create')">
                        <button class="btn btn-secondary text-dark mr-2">
                            <span class="fas fa-plus mr-2"></span>Ajouter
                        </button>
                    </inertia-link>
                </div>
            </div>
            <slot></slot>
        </admin-layout>
    </div>
</template>


<script>
import AdminLayout from '../../../Layouts/AdminLayout'
export default {
    components : {
        AdminLayout
    }
}
</script>
