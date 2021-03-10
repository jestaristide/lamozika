<template>
    <musique-layout>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    
                    <h2 class="h5 mb-4">Informations personnelles</h2>
                        <form @submit="addNewMusique" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <!--<file-pond
                                        name="test"
                                        ref="pond"
                                        label-idle="Drop files here..."
                                        v-bind:allow-multiple="true"
                                        accepted-file-types="image/jpeg, image/png"
                                        v-bind:files="pochette"
                                        v-on:init="handleFilePondInit"/>-->
                                    <label for="pochette">Couverture<img :src="previewPochette" alt="" class="rounded"></label>
                                    <input hidden id="pochette" type="file" class="form-control" v-on:change="onChange">
                                </div>
                                <div class="col-md-9 mb-3">
                                    <label for="couverture">Couverture<img :src="previewCouverture" alt="" class="rounded"></label>
                                    <input hidden id="couverture" type="file" class="form-control" v-on:change="onChange">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Titre</label>
                                        <input class="form-control" v-model="newMusique.titre" type="text" placeholder="Titre de la chanson" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Rythme</label>
                                        <input class="form-control"  v-model="newMusique.genre" type="text" placeholder="Rythme" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12 mb-3">
                                    <label for="birthday">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" v-model="newMusique.description" rows="4"></textarea>
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Url YouTube</label>
                                        <input class="form-control" v-model="newMusique.yt_link" type="text" placeholder="https://" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Url Audio</label>
                                        <input class="form-control" v-model="newMusique.audio_link" type="text" placeholder="https://" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Auteur</label>
                                        <input class="form-control" v-model="newMusique.auteur" type="text" placeholder="Auteur">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Compositeur</label>
                                        <input class="form-control" v-model="newMusique.compositeur" type="text" placeholder="Compositeur">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Genre</label>
                                        <input class="form-control" v-model="newMusique.specialite" type="text" placeholder="Genre" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Sous genre</label>
                                        <input class="form-control" v-model="newMusique.origine" type="text" placeholder="Sous genre" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Studio d'enregistrement</label>
                                        <input class="form-control" v-model="newMusique.studio_enregistrement" type="text" placeholder="Genre" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Année d'enregistrement</label>
                                        <input class="form-control" v-model="newMusique.annee_enregistrement" type="text" placeholder="Sous genre" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name"></label>
                                        <input class="form-control" v-model="newMusique.realisateur" type="text" placeholder="Genre" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Tags</label>
                                        <input class="form-control" v-model="newMusique.tag" type="text" placeholder="Sous genre" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </musique-layout>
</template>


<script>
import MusiqueLayout from './MusiqueLayout'
/*
// Import Vue FilePond
import vueFilePond, {setOptions} from "vue-filepond";

// Import FilePond styles
import "filepond/dist/filepond.min.css";

// Import FilePond plugins
// Please note that you need to install these plugins separately

// Import image preview plugin styles
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";

// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

// Create component 
setOptions({
    server: '/api/admin/upload',
    headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
    }
})

const FilePond = vueFilePond(
  FilePondPluginFileValidateType,
  FilePondPluginImagePreview
);

*/

export default {
    components : {
        MusiqueLayout,
    },
    props:{musique:Object},
    data() {
        return {
            newMusique : {},
            isUpdate: this.musique ? true : false,
            previewPochette:'https://picsum.photos/seed/picsum/300/300',
            previewCouverture:'https://picsum.photos/seed/picsum/900/280',
            pochette: []
        }
    },
    methods: {
        addNewMusique (e) {
            e.preventDefault()
            console.log(this.newMusique, this.$page.props)
        },
        onChange(e) {
                this.file = e.target.files[0];
                console.log(this.file)
            },
        formSubmit(e) {
            e.preventDefault();
            let existingObj = this;
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let data = new FormData();
            data.append('file', this.file);

            axios.post('/upload', data, config)
                .then(function (res) {
                   existingObj.success = res.data.success;
                })
                .catch(function (err) {
                   existingObj.output = err;
                });
        },
        handleFilePondInit: function() {
            console.log('FilePond has initialized');

            // example of instance method call on pond reference
            console.log(this.$refs.pond, this.pochette)
            this.$refs.pond.getFiles();
        }
    },
    mounted() {
        console.log(this.newMusique, this.$page.props)
    }
}
</script>
