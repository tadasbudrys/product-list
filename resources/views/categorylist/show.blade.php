

<h1> !</h1>
{{-- @foreach($categorys  as $category)
            

<h1>{{$category->name}}  </h1>
<h1>{{$category->status}}  </h1>

@endforeach --}}
@foreach($categoryProducts  as $categoryProduct)           
 {{var_dump($categoryProducts)}}  

 <h1>{{$categoryProduct->title}} </h1> 
{{-- <img src ='{{$categoryProduct->image}}' style = 'height = 50px; width=50px'> --}}
 {{-- <h1>{{$categoryProducts->title}}  </h1>  --}}

@endforeach
{{-- {{var_dump($categoryProducts)}}
<br>
<br>
<br>
<br>
{{var_dump($categorys)}} --}}