<template>
    <musique-layout>
        <div class="row">
            <div class="col-12">
                <div class="card border-light shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-0">#</th>
                                    <th class="border-0">Titre</th>
                                    <th class="border-0">Version</th>
                                    <th class="border-0">Artiste</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Oeuvres sur LM</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(row, key) in musiques" :key="key">
                                    <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{ row.id }}</a> </td>
                                    <td class="border-0 font-weight-bold">{{ row.titre }}</td>
                                    <td class="border-0">{{ row.version }}</td>
                                    <td class="border-0"></td>
                                    <td class="border-0">{{ row.tags }}</td>
                                    <td class="border-0">{{ row.auteur + ' / ' + row.compositeur }}</td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                                            <div class="btn-group">
                                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="icon icon-sm">
                                                                        <span class="fas fa-ellipsis-h icon-dark" />
                                                                    </span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <inertia-link :href="route('musique.edit', 1)" class="dropdown-item">
                                                        <span class="fas fa-eye mr-2" />Prevoir
                                                    </inertia-link>
                                                    <inertia-link :href="route('musique.edit', row.id)" class="dropdown-item">
                                                        <span class="fas fa-edit mr-2" />Modifier
                                                    </inertia-link>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <span class="fas fa-trash-alt mr-2" />Supprimer
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </musique-layout>
</template>


<script>
import MusiqueLayout from './MusiqueLayout'
export default {
    components : {
        MusiqueLayout
    },
    props: {
        musiques: Array
    },
}
</script>
