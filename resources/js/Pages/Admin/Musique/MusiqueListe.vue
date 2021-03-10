<template>
    <musique-layout>
        <div class="row">
            <div class="col-12">
                <div class="card border-light shadow-sm mb-4">
                    <div class="card-body">
                    Musiques Liste
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
