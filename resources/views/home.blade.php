@extends('layouts.layout')

@section("content")

<!--Jumbo-->
<div class="jumbo">



</div>

<!--Main-->
<div class="bg-black d-flex m-auto">
    <div class="container position-relative">
        <div class="currentcomic position-absolute start-0 p-1 text-center">CURRENT SERIES</div>
        <div class="row mt-4">
            @foreach ($comics as $comic)
            <div class="col-2 bg-transparent">
                <img class="img-fluid cover" src="{{$comic['thumb']}}">
                <p class="text-white text-center">{{$comic['price']}}</p>
                <p class="text-white text-center">{{$comic['series']}}</p>
                <p class="text-white text-center">{{$comic['type']}}</p>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary mb-3 ">LOAD MORE</button>
        </div>

 
    </div>
</div>
            <!--Menu-->
        <div class="bg-blue w-100">
            <div class="container menuwrapper">
                 @foreach (config("data.items") as $item)
                <div>
                  
                    <img src="/assets/img/{{$item['img']}}" alt="" class="images">
                    <span class="ms-1 text-white">{{ $item['description'] }}</span>
                   
                </div> 
                @endforeach
            </div>
        </div>

        
        @endsection