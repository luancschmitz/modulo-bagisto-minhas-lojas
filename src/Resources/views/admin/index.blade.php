@extends('admin::layouts.content')

@section('page_title')
    Minhas Lojas
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Minhas Lojas</h1>
            </div>
            <div class="page-action">
                <a href="{{route('minhaslojas.admin.create')}}" class="btn btn-lg btn-primary">Nova Loja</a>
            </div>
        </div>
    </div>
@endsection