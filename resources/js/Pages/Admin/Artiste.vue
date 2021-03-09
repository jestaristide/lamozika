<template>
    <artiste-layout>
        <div class="row">
            <div class="col-12">
                <div class="card border-light shadow-sm mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0 rounded">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-0">#</th>
                                                <th class="border-0">Nom et Prenoms</th>
                                                <th class="border-0">Nom de scène</th>
                                                <th class="border-0">Téléphone</th>
                                                <th class="border-0">Email</th>
                                                <th class="border-0">Oeuvres sur LM</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Item -->
                                            <tr v-for="(row, key) in artistes" :key="key">
                                                <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{ row.id }}</a> </td>
                                                <td class="border-0 font-weight-bold">{{ row.nom + ' ' + row.prenoms }}</td>
                                                <td class="border-0">{{ row.nom_scene }}</td>
                                                <td class="border-0">{{ row.tel }}</td>
                                                <td class="border-0">{{ row.email }}</td>
                                                <td class="border-0"></td>
                                                <td class="border-0 text-success">
                                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="icon icon-sm">
                                                                    <span class="fas fa-ellipsis-h icon-dark" />
                                                                </span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <inertia-link :href="route('artiste.edit', 1)" class="dropdown-item">
                                                                    <span class="fas fa-eye mr-2" />Prevoir
                                                                </inertia-link>
                                                                <inertia-link :href="route('artiste.edit', row.id)" class="dropdown-item">
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
                                            <!-- End of Item -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </artiste-layout>
</template>


<script>
import ArtisteLayout from './ArtisteLayout'
export default {
    components : {
        ArtisteLayout
    },
    props: {
        //artistes: Array
    },

    data () {
        return {
            artistes: ''
        }
    },

    created () {

        console.log(this.props)
    },

    mounted() {
        this.loadData()
        console.log(this._self._uid)
    },
    methods : {
        loadData () {
            axios.get('/api/artiste')
                .then( (response) => {
                    console.log(response.data);
                    this.artistes = response.data;
                })
        }
    }
}
</script>
