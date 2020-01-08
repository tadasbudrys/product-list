@component('layouts.app')
                
@endcomponent

<link rel="stylesheet" href="/css/app.css">



<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Categorys</h1>    
       
      <table class="table table-striped">
        <thead>
            @foreach($categorys  as $category)
            
                {{-- {!! route('categorylist.categoryfilter',$category->id) !!} --}}
                {{-- {!! route('categorylist.categoryfilter',$category->id) !!} --}}
              <a href= '{!! route('categorylist.show',$category->id) !!}'><h1> {{$category->name}}  </h1></a>

            

            <tr>
                {{-- <a href= '#'><h1>{{$category->status}} </h1></a> --}}
            </tr>
            @endforeach
            {{-- <div class="container">
              <div class="row-fluid">
            @foreach($products as $product)
                <div class="col-md-auto">
                <div class="card" style="width: 18rem;">
                <a href= '{!! route('product.show',$product->id) !!}'> <img src="{!! $product->image !!}" class="card-img-top" alt="..."> </a>
                <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            </div>
            
            @endforeach
          </div>
          </div> --}}

          @foreach ($products->chunk(3) as $chunk)
          <div class="container">
          <div class="row">
              @foreach ($chunk as $product)
                <div class="col-md-auto">
                  <div class="card" style="width: 18rem; margin-bottom:10px;">
                      <a href= '{!! route('product.show',$product->id) !!}'> <img src="{!! $product->image !!}" class="card-img-top" alt="..."> </a>
                      <div class="card-body">
                          <h5 class="card-title">{{$product->title}}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                        </div>
                        </div>
                @endforeach
              </div>
          </div>
      @endforeach
            {{ $products->links() }}
            <div id="app">
    
                <example-component></example-component>
            </div>
    
            <script src="/js/app.js"></script>
            <script src="js/bootstrap.js"></script>