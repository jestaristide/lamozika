<template>
    <artiste-layout>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Informations personnelles</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nom</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your first name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Prénoms</label>
                                        <input class="form-control" name="last_name" id="last_name" type="text" placeholder="Also your last name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">Date de naissancee</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                        <input data-datepicker="" class="form-control datepicker-input" id="birthday" type="text" placeholder="dd/mm/yyyy" required="">
                                     </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender">Genre</label>
                                    <select class="form-select mb-0" name="gender" id="gender" aria-label="Selectionner le genre">
                                        <option selected="">Gender</option>
                                        <option value="F">Féminin</option>
                                        <option value="H">Masculin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" type="email" placeholder="name@company.com" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input class="form-control" id="phone" type="tel" placeholder="+261 32 50 479 17" required="">
                                    </div>
                                </div>
                            </div>

                            <h2 class="h5 my-4">Information de l'artiste</h2>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nom de scène</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your first name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Manger/Label</label>
                                        <input class="form-control" name="last_name" id="last_name" type="text" placeholder="Also your last name" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Specialité en rhytme</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your first name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Prénoms</label>
                                        <input class="form-control" name="last_name" id="last_name" type="text" placeholder="Also your last name" required="">
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
    props:{
        artiste:Object
    }
}
</script>
