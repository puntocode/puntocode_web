<template>
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <h2 class="text-uppercase">proyectos</h2>
            <p>Nuestro <span class="font-bold">Portfolio</span></p>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="portfolio-menu text-md-right">
                <ul>
                    <li @click="filter('all')" :class="{active: selectedCat === 'all'}">Ver Todos</li>
                    <li v-for="category in categorias" :key="category.id" @click="filter(category)" :class="{active: selectedCat === category}">{{ category }}</li>
                </ul>
            </div>
        </div>

        <div class="portfolio-item">
            <div class="row">
                <div v-for="image in previews" :key="image.id" class="col-lg-4" v-show="selectedCat === 'all' || selectedCat === image.cat">
                    <div class="card preview">
                        <img class="card-img-top" :src="image.src" alt="Portfolio de biolimpieza">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
                return {
                    categorias: ['web', 'app', 'branding'],
                    previews: [{
                        src: 'img/index/portfolio-1.jpg',
                        cat: 'web'
                    }, {
                        src: 'img/index/portfolio-2.jpg',
                        cat: 'branding'
                    }, {
                        src: 'img/index/portfolio-3.jpg',
                        cat: 'app'
                    }, {
                        src: 'img/index/portfolio-4.jpg',
                        cat: 'branding'
                    }, {
                        src: 'img/index/portfolio-5.jpg',
                        cat: 'web'
                    }, {
                        src: 'img/index/portfolio-6.jpg',
                        cat: 'app'
                    }, {
                        src: 'img/index/portfolio-7.jpg',
                        cat: 'app'
                    }, {
                        src: 'img/index/portfolio-8.jpg',
                        cat: 'branding'
                    }, {
                        src: 'img/index/portfolio-9.jpg',
                        cat: 'web'
                    }],
                    selectedCat: 'all',
                }
            },
            methods: {
                filter(selection) {
                    this.selectedCat = selection;
                }
            }
    }
</script>

<style lang="scss" scoped>
    .preview {
        width: 0%;
        opacity: 0;
        animation: appear .5s ease-in-out forwards;
    }
    @keyframes appear {
        to {
            width: 100%;
            opacity: 1;
        }
    }
</style>
