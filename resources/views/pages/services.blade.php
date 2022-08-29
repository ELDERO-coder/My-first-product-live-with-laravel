@extends('layouts.app')

@section('title')
    ElderoSite.Services   
@endsection

@section('contenu')

    <h1>Welcome to the services page</h1>
    

        @foreach ($produits as $produit )

            <div class="well">
                <h1><a href="/show/{{$produit->id}}">{{$produit->product_name}}</a></h1>
            </div>
            
        @endforeach

        
@endsection

