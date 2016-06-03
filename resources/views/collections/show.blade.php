


<div class="row">


      @foreach($collection->products as $product)



              <h5>{{ $product->price }}</h5>
               <p>{{ $product->product_description}}</p>

              </div>
              </a>
          @endforeach
