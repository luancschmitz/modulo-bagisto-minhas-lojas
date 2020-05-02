@extends('admin::layouts.content')

@section('page_title')
    Nova Loja
@stop

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('minhaslojas.admin.store') }}" @submit.prevent="onSubmit">
            <div class="page-header">
                <div class="page-title">
                    <h1>
                        Nova Loja
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()
                    <div class="control-group" :class="[errors.has('nome') ? 'has-error' : '']">
                        <label for="nome" class="required">Nome</label>
                        <input type="text" class="control" name="nome" v-validate="'required'" value="{{ old('nome') }}">
                    </div>

                    <div class="control-group" :class="[errors.has('endereco') ? 'has-error' : '']">
                        <label for="last_name" class="required">Endereço</label>
                        <input type="text" class="control" name="endereco" v-validate="'required'" value="{{ old('nome') }}">
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop