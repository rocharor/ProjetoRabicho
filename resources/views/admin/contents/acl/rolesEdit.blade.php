@extends('admin/template')
@section('content')

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="/AdminLTE/plugins/iCheck/all.css">

    <style media="screen">
        label{
            font-weight: normal;
            cursor: pointer;
        }
    </style>

    <section class="content-header">
        <h1>
            Dashboard
            <small>Painel de controle</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ Route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ Route('admin.acl.roles-list') }}"></i> Users</a></li>
            <li class="active">Roles - Permissions</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Editar Role <b>{{ $data['role']->name }}</b></h3>
                    </div>
                    <div class="box-body">
                        <form action='{{ Route('admin.acl.update-role') }}' name='formRole' method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{ $data['role']->id }}">

                            <table class="table table-striped" style="width: 800px;">
                                <tr>
                                    <td style="width: 200px;"><label>Nome: <span class='text-danger'>*</span></label> </td>
                                    <td><input type="text" name='nome' class="form-control" value="{{ $data['role']->name }}" required /></td>
                                </tr>
                                <tr>
                                    <td> <label>Descrição: <span class='text-danger'>*</span></label> </td>
                                    <td><input type="text" name='descricao' class="form-control" value="{{ $data['role']->label }}" required /></td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center"><button type="submit" class="btn btn-primary">Salvar</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
