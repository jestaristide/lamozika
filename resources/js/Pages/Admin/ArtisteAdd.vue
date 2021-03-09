<template>
    <artiste-layout>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Informations personnelles</h2>
                        <form @submit="addNewArtiste">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nom</label>
                                        <input class="form-control" name="name" v-model="newArtiste.nom" type="text" placeholder="Enter your first name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Prénoms</label>
                                        <input class="form-control" name="last_name" v-model="newArtiste.prenoms" type="text" placeholder="Also your last name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">Date de naissance</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                        <input class="form-control datepicker-input" v-model="newArtiste.date_naissance" type="date" placeholder="dd/mm/yyyy" required="">
                                     </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender">Genre</label>
                                    <select class="form-select mb-0" name="gender" v-model="newArtiste.genre" aria-label="Selectionner le genre">
                                        <option value="">--Selectionner--</option>
                                        <option value="F">Féminin</option>
                                        <option value="H">Masculin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" v-model="newArtiste.email" type="email" placeholder="name@company.com" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input class="form-control" v-model="newArtiste.tel" type="tel" placeholder="+261 32 50 479 17" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Desciption</label>
                                        <input class="form-control" v-model="newArtiste.description" type="text" placeholder="name@company.com" required="">
                                    </div>
                                </div>
                            </div>

                            <h2 class="h5 my-4">Information de l'artiste</h2>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nom de scène</label>
                                        <input class="form-control" name="nom_scene" v-model="newArtiste.nom_scene" type="text" placeholder="Nom de scene" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Manger/Label</label>
                                        <input class="form-control" name="label" v-model="newArtiste.label" type="text" placeholder="Also your last name" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Specialité en rhytme</label>
                                        <input class="form-control" name="specialite" v-model="newArtiste.specialite" type="text" placeholder="Enter your first name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Originaire</label>
                                        <input class="form-control" name="origine" v-model="newArtiste.origine" type="text" placeholder="Also your last name" required="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="h5 my-4">Reseaux sociaux</h2>
                            <a @click="addNewRs" class="badge super-badge badge-lg badge-warning"><span class="fas fa-plus mr-2"></span>Ajouter</a>

                            <div v-for="(item, index) in newArtiste.rs" :key="index">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <label>Nom</label>
                                            <input class="form-control form-control-sm" type="text" :value="item.type" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <label>Url</label>
                                            <input class="form-control form-control-sm" type="text" :value="item.url" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <label for="first_name">Nom</label>

                                        <select class="form-select form-select-sm" v-model="newRs.type" aria-label="Selectionner le type">
                                            <option value="">--Selectionner--</option>
                                            <option v-for="(rsName, key) in rsNames" :key="key" :value="rsName">{{rsName}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <div>
                                        <label for="last_name">Url</label>
                                        <input class="form-control form-control-sm" name="origine" v-model="newRs.url" type="text" placeholder="Url" required="">
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
    </artiste-layout>
</template>


<script>
import ArtisteLayout from './ArtisteLayout'
export default {
    components : {
        ArtisteLayout
    },
    data() {
        return {
            newArtiste : {
                'nom':'',
                'prenoms':'',
                'date_naissance':'',
                'rs': [],
                _token: this.$page.props.csrf_token,
            },
            newRs:{
                'type':'',
                'url':''
            },
            rsNames: ['Facebook', 'YouTube', 'Instagram', 'Twitter', 'TikTok']
        }
    },
    methods: {
        addNewArtiste (e) {
            e.preventDefault()
            this.addNewRs()
            console.log(this.newArtiste, this.$page.props)
        },
        addNewRs() {
            if(this.newRs.type != '' && this.newRs.url != '')
            {
                this.rsNames = this.rsNames.filter((rs) => { return rs != this.newRs.type})
                this.newArtiste.rs.push(this.newRs)
                this.newRs = {
                    'type':'',
                    'url':''
                }
            }

            console.log(this.newArtiste.rs, this.rsNames, this.$inertia)

            this.$inertia.post('/lm-admin/artiste', this.newArtiste).then((response) => {
                console.log(response)
            })
        }
    }
}
</script>
