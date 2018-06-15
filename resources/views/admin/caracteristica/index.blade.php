@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    @include('flash::message')
                    <div class="panel-heading">Características</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/caracteristica/create') }}" class="btn btn-success btn-sm" title="Nueva Características">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva
                        </a>

                        <form method="GET" action="{{ url('/admin/caracteristica') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Item Nav</th><th>Contenido</th><th>Section Color</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($caracteristica as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->Itemnav->item_nav }}</td><td>{{ $item->contenido }}</td><td>{{ $item->section_color }}</td>
                                        <td>
                                            <a href="{{ url('/admin/caracteristica/' . $item->id) }}" title="View Caracteristica"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/caracteristica/' . $item->id . '/edit') }}" title="Edit Caracteristica"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/caracteristica' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Caracteristica" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $caracteristica->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
