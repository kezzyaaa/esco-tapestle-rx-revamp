<template>
    <div>
        <div class="product-category-title p-0 mt-3" v-for="productCat in productCats">
            <h2 class="mb-3">{{productCat.name}}</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4" v-for="product in productCat.products" v-if="isComplete(product.containmentcontrol)">
                        <div v-if="product.ext_link" class="product-card mt-4">
                            <div class="product-card-img">
                                <div class="p-3">
                                    <a :href="product.ext_link" target="_blank" rel="noopener noreferrer"><img :data-src="'/images/product-images/thumb/'+product.image_thumb" class="product-img lazy" :alt="product.name" :title="product.brand+' '+product.name"></a>
                                </div>
                                <div class="product-card-containment-control p-1">
                                        <img v-for="containmentcontrol in product.containmentcontrol" class="pr-1" :class="containmentcontrol.pivot.is_activated == 1 ? '' : 'disable_containment'" :src="'/images/misc-img/containment-controls-small/'+containmentcontrol.img_small">
                                </div>
                                <div class="product-title-button p-2">
                                <p class="text-left"><strong>{{product.brand}} {{product.name}}</strong></p>
                                    <a class="pharma-btn btn" :href="product.ext_link" target="_blank" rel="noopener noreferrer">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                        </div>
                        <div v-else class="product-card mt-4">
                            <div class="product-card-img">
                                <div class="p-3">
                                    <a :href="'/products/'+product.slug+'/'+product.id"><img :data-src="'/images/product-images/thumb/'+product.image_thumb" class="product-img lazy" :alt="product.name" :title="product.brand+' '+product.name"></a>
                                </div>
                                <div class="product-card-containment-control p-1">
                                        <img v-for="containmentcontrol in product.containmentcontrol" class="pr-1" :class="containmentcontrol.pivot.is_activated == 1 ? '' : 'disable_containment'" :src="'/images/misc-img/containment-controls-small/'+containmentcontrol.img_small">
                                </div>
                                <div class="product-title-button p-2">
                                <p class="text-left"><strong>{{product.brand}} {{product.name}}</strong></p>
                                    <a class="pharma-btn btn" :href="'/products/'+product.slug+'/'+product.id">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                        </div>

                </div>
            </div>

        </div>

    </div>

</template>

<script>
    export default {
        data(){
            return{
                productCats:[]
            }
        },
        created() {

            axios.get('./api/productCategories')
            .then(response =>this.productCats = response.data);

            Fire.$on('filterContainments', (value) =>{
                let query = this.$parent.search;
                let sort = this.$parent.sort;

                let json=JSON.stringify(value);
                var obj = JSON.parse(json);
                this.productConCombination = obj.value.join();

                axios.get('api/findProduct?q=' + query + '&s=' + sort)
                .then((data) => {
                    this.productCats = data.data
                })

                .catch(() => {

                })
            });

            Fire.$on('searching', () =>{
                let query = this.$parent.search;
                let sort = this.$parent.sort;

                axios.get('api/findProduct?q=' + query + '&s=' + sort)
                .then((data) => {
                    this.productCats = data.data
                })

                .catch(() => {

                })
            });
        },
        methods: {
            isComplete: function (prodcon) {
                var con = '';
                var checkboxes = document.getElementsByClassName("form-containment-check");
                var checkboxTally = 0;
                var productContainmentTally = 0;

                for (let index = 0; index < prodcon.length; index++) {
                    if(checkboxes[index].checked == true){
                        checkboxTally++;
                        if(prodcon[index].pivot.is_activated == 1){
                            productContainmentTally++;
                        }
                    }else{

                    }
                }

                if(checkboxTally == productContainmentTally){
                    return true;
                }else{
                    return false;
                }

            },
        },

    }


</script>
