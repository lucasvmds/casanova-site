@extends('pages.layout.base')
@section('title') Início @endsection

@section('content')
    <section id="home-slides">
        <ul id="slides">
            <li>
                <x-slide-item position="0" />
            </li>
            <li>
                <x-slide-item position="1" />
            </li>
            <li>
                <x-slide-item position="2" />
            </li>
            <li>
                <x-slide-item position="3" />
            </li>
            <li>
                <x-slide-item position="4" />
            </li>
        </ul>
        <ul id="slides-selector" aria-hidden="true">
            <li data-slide="0" class="selected"></li>
            <li data-slide="1"></li>
            <li data-slide="2"></li>
            <li data-slide="3"></li>
            <li data-slide="4"></li>
        </ul>
    <section>
@endsection