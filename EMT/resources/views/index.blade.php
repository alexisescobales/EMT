@extends('layouts.template')

@section('title', 'Emergency Medical Team')

@section('content')
<div class="row">
    <div class="col-8" style="background-color: rgb(197, 246, 61)">
        {{-- Contenido de la carta --}}
        <div class="card">
        <div class="card-header">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>A well-known quote, contained in a blockquote element.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
        </div>
    </div>

    <div class="col-4 d-flex flex-column" style="background-color: green">
        <div>
            {{-- Contenido de los expedientes --}}
            <div class="card">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            </div>
        </div>

        <div>
            {{-- Contenido del mapa --}}
            <div class="card">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
