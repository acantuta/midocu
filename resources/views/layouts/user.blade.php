@extends('layouts.app')
@section('sidebar')
<div class="sidebar-collapse" style="overflow: hidden; width: auto; height: 100%;">
    <ul side-navigation="" class="nav metismenu" id="side-menu">                        
        <li>
            <a ui-sref="layouts" href="{{ url('/personas') }}">
                <i class="fa fa-building"></i>
                <span class="nav-label ng-binding">
                    Personas
                </span>
            </a>
        </li>
        <li>
            <a ui-sref="layouts" href="{{ url('/expedientes') }}">
                <i class="fa fa-building"></i>
                <span class="nav-label ng-binding">
                    Expedientes
                </span>
            </a>
        </li>
    </ul>
</div>
@endsection
@section('content')

@endsection