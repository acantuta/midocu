@extends('layouts.admin')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading ng-scope">
    <div class="col-lg-10">
        <h2>Áreas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/areas') }}">Inicio</a>
            </li>
            @yield('navigation_menu')
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ng-scope">
    @yield('content')
</div>
@overwrite