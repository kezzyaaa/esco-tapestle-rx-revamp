      <nav id="sidebar" class="product-sidebar">
        <div class="pl-2 pt-5">
          <div>
            <div class="">
              <h5>Highlights</h5>
            </div>
            <ul class="list-unstyled components mb-5">
              @foreach($activeProduct->productSpecification as $productSpecification)
                @if(isset($productSpecification->pivot->content)  && ($productSpecification->pivot->content != '<p><br></p>') )
                <li class="nav-item">
                    <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-link="#accordion{{$productSpecification->title}}" data-toggle="tab" href="" role="tab" aria-controls="{{$productSpecification->title}}" aria-selected="true">{{$productSpecification->title}}</a>
                </li>
                @endif
              @endforeach
              @if($activeProduct->productBrochure->where('is_activated', '=', 1)->count() > 0)
                <li class="nav-item">
                    <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionBrochures_sellsheet" aria-controls="Brochures & Sell Sheets" aria-selected="true">Brochures & Sell Sheets</a>
                </li>
              @endif
                @if($relatedprods->count() > 0)
                    <li class="nav-item">
                        <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionRelated_prod" aria-controls="Related Products" aria-selected="true">Related Products</a>
                    </li>
                @endif
                @if($relatedArticles->count() > 0)
                    <li class="nav-item">
                        <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionRelated_article" aria-controls="Related Articles" aria-selected="true">Related Articles</a>
                    </li>
                @endif
            </ul>
          </div>
        </div>
      </nav>


