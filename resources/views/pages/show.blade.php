@extends('layouts.app')

@section('title')
    ElderoSite.ShowProduct   
@endsection

@section('contenu')

    <h1>Détails du produit</h1>

        <h1>{{$produit->id}}</h1>
        <h1>{{$produit->product_name}}</h1>
        <h1>{{$produit->product_price}}</h1>
        <h1>{{$produit->description}}</h1>
        
@endsection
