@extends('layouts.serieLayout')
@section('css')
@endsection
@section('content')
    <link href="{{ asset('css/film.css') }}" rel="stylesheet">

    @if(!empty($series))
        @if(!empty($commentaires))
            @if(!empty($episodes))

                <div class="conteneurfilm">
                    @foreach($series as $elt)

                        <div style="display:flex; padding-top:20px; padding-bottom:20px;margin-left:10%; width:auto;">
                            <div class="titrep" style="background-image: url('{{asset($elt->urlImage)}}'); width:200px; height:280px; display:flex; align-content: center;"> <h2>{{$elt->nom}}</h2><h1>{{$elt->langue}}</h1></br><p>{{$elt->note}}</p>
                                @for($i = 0; $i< round($elt->note); $i++)
                                    <i class="fas fa-cheese"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="leresume"><p>RÉSUMÉ</p>{{$elt->resume}}</div>
                        <div class="genrepremiere">
                            <div class="genre">GENRE <br> <p>{{$elt->genre}}</p></div>
                            <div class="premiere">DATE DE PREMIERE SORTIE<p>{{$elt->premiere}}</p></div>
                        </div>
                {{$elt->note}}
                @endforeach
                </div>


            @else
                <h3>si ça affiche ça c'est que c'est pas bon (episode)</h3>
            @endif
        @else
            <h3>si ça affiche ça c'est que c'est pas bon (commentaire)</h3>
        @endif

    @else
        <h3>si ça affiche ça c'est que c'est pas bon (serie)</h3>
    @endif
@endsection