<template>
    <div>
        <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle filter-dropdown" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i> Filter <span class="caret"></span></button>
            <ul v-on:click="prevdef" class="dropdown-menu px-2 dropdown-menu-right">
                <li v-for="productContainmentControl in productContainmentControls">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input form-containment-check" :id="productContainmentControl.name" :value="productContainmentControl.name" v-model="checkContainements" @change="filterCon">
                        <label  class="form-check-label" :for="productContainmentControl.name">{{productContainmentControl.name}}</label>
                    </div>
                </li>

            </ul>
        </div>
    </div>




        <!-- @foreach($productCategories as $productCategory)
        <div class="product-category-title pr-0 pr-sm-5 mt-4">
            <h3 class="mb-3">{{$productCategory->name}}</h3>
        </div>
        <div class="row">
          @foreach($productCategory->products->sortBy('name') as $product)
            <div class="col-md-6 col-lg-4">
              <div class="product-card mt-4">
                <div class="product-card-img">
                  <div class="p-3">
                    <a href="{{$product->path()}}"><img src="/images/product-images/thumb/{{$product->image_thumb}}"></a>
                  </div>

                  <div class="product-card-containment-control p-1">
                    @foreach($product->containmentcontrol as $product_containment_control)
                      <img class="{{($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'}}" src="/images/misc-img/containment-controls-small/{{$product_containment_control->img_small}}">
                    @endforeach

                  </div>
                </div>
                <div class="product-title-button p-2">
                  <p class="text-left"><strong>{{$product->brand}} {{$product->name}}</strong></p>
                  <a class="pharma-btn btn" href="{{$product->path()}}">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

              </div>
            </div>
          @endforeach
        </div>
      <hr>

      @endforeach -->


    </div>

</template>

<script>
    export default {
        data(){
            return{
                productContainmentControls:[],
                checkContainements:[]
            }
        },
        created() {

            axios.get('./api/productContainmentControls')
            .then((data) => {
                this.productContainmentControls = data.data;

            })
        },
        methods: {
            prevdef: function (event) {
                event.stopPropagation();
            },
            filterCon: function (event) {
                var post_data = this.checkContainements;
                Fire.$emit('filterContainments', {value:post_data});
                // axios.get('api/findProduct?q=' + query)
                // .then((data) => {
                //     this.productCats = data.data
                // })

                // .catch(() => {

                // })
            }

        }
    }

</script>
