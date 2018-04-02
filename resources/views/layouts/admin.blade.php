@extends('layouts.app')
@section('sidebar')
<div class="sidebar-collapse" style="overflow: hidden; width: auto; height: 100%;">
    <ul side-navigation="" class="nav metismenu" id="side-menu">                        
        <li>
            <a ui-sref="layouts" href="{{ url('/admin/areas') }}">
                <i class="fa fa-building"></i>
                <span class="nav-label ng-binding">
                    Áreas
                </span>
            </a>
        </li>
        <li>
            <a ui-sref="layouts" href="{{ url('/admin/expediente-tipos') }}">
                <i class="fa fa-building"></i>
                <span class="nav-label ng-binding">
                    Tipos de expediente
                </span>
            </a>
        </li>
        <li>
            <a ui-sref="layouts" href="{{ url('/admin/users') }}">
                <i class="fa fa-building"></i>
                <span class="nav-label ng-binding">
                    Usuarios
                </span>
            </a>
        </li>
    </ul>
</div>
@endsection
@section('content')

@endsection