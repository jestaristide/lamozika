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
                                            <tr>
                                                <td class="border-0"><a href="#" class="text-primary font-weight-bold">1</a> </td>
                                                <td class="border-0 font-weight-bold"><span class="icon icon-xs icon-gray w-30"><span class="fas fa-globe-europe"></span></span>Direct</td>
                                                <td class="border-0">
                                                    Direct
                                                </td>
                                                <td class="border-0">
                                                   -
                                                </td>
                                                <td class="border-0">
                                                   --
                                                </td>
                                                <td class="border-0">
                                                    56
                                                </td>
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
                                                                <inertia-link :href="route('artiste.edit', 1)" class="dropdown-item">
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

                                            <!-- Item -->
                                            <tr>
                                                <td><a href="#" class="text-primary font-weight-bold">2</a> </td>
                                                <td class="font-weight-bold"><span class="icon icon-xs icon-info w-30"><span class="fab fa-google"></span></span>Google Search</td>
                                                <td>
                                                    Search / Organic
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                   --
                                                </td>
                                                <td>
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-12 col-xl-2 px-0">
                                                            <div class="small font-weight-bold">18%</div>
                                                        </div>
                                                        <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                            <div class="progress progress-lg mb-0">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success">
                                                    <span class="fas fa-angle-up"></span>
                                                    <span class="font-weight-bold">17.67%</span>
                                                </td>
                                            </tr>
                                            <!-- End of Item -->

                                            <!-- Item -->
                                            <tr>
                                                <td><a href="#" class="text-primary font-weight-bold">3</a> </td>
                                                <td class="font-weight-bold"><span class="icon icon-xs icon-danger w-30"><span class="fab fa-youtube"></span></span> youtube.com</td>
                                                <td>
                                                    Social
                                                </td>
                                                <td>
                                                    <a class="small font-weight-bold" href="#">Arts and Entertainment</a>
                                                </td>
                                                <td>
                                                   #2
                                                </td>
                                                <td>
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-12 col-xl-2 px-0">
                                                            <div class="small font-weight-bold">18%</div>
                                                        </div>
                                                        <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                            <div class="progress progress-lg mb-0">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                            </tr>
                                            <!-- End of Item -->

                                            <!-- Item -->
                                            <tr>
                                                <td><a href="#" class="text-primary font-weight-bold">4</a> </td>
                                                <td class="font-weight-bold"><span class="icon icon-xs icon-purple w-30"><span class="fab fa-yahoo"></span></span> yahoo.com</td>
                                                <td>
                                                    Referral
                                                </td>
                                                <td>
                                                    <a class="small font-weight-bold" href="#">News and Media</a>
                                                </td>
                                                <td>
                                                   #11
                                                </td>
                                                <td>
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-12 col-xl-2 px-0">
                                                            <div class="small font-weight-bold">8%</div>
                                                        </div>
                                                        <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                            <div class="progress progress-lg mb-0">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-danger">
                                                    <span class="fas fa-angle-down"></span>
                                                    <span class="font-weight-bold">9.30%</span>
                                                </td>
                                            </tr>
                                            <!-- End of Item -->

                                            <!-- Item -->
                                            <tr>
                                                <td><a href="#" class="text-primary font-weight-bold">5</a> </td>
                                                <td class="font-weight-bold"><span class="icon icon-xs icon-info w-30"><span class="fab fa-twitter"></span></span> twitter.com</td>
                                                <td>
                                                    Social
                                                </td>
                                                <td>
                                                    <a class="small font-weight-bold" href="#">Social Networks</a>
                                                </td>
                                                <td>
                                                #4
                                                </td>
                                                <td>
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-12 col-xl-2 px-0">
                                                            <div class="small font-weight-bold">4%</div>
                                                        </div>
                                                        <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                            <div class="progress progress-lg mb-0">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    -
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
    }
}
</script>
