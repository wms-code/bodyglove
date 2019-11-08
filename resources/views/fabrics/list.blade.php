@extends('layouts.admin')

@section('pagetitle','Fabric')
    



@section('content')               
        <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                    <div class="row justify-content-between">
                                            <div class="col-4">
                                                <h4 class="card-title">Fabric Name List </h4>
                                            </div>
                                            <div class="col-6">
                                                    <div class="float-right"><a class="btn btn-sm  btn-primary" href="{{ url('admin/fabric/create') }}">Add New</a></div>
                                                
                                            </div>
                                          </div>
                                       
                             
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                 
                                                <th>Fabric Name</th>
                                                <th>Fabric Group</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fabrics as $d)
                                            <tr>
                                                
                                                <td>{{$d->fabricname}}</td>
                                                <td>{{$d->fabricgroupname}}</td>                                               
                                                <td class="text-nowrap">
                                                    <a href="{{ url('admin/fabric') }}/{{$d->id}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="javascript:void(0);" onclick="$(this).find('form').submit();" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i>
                                                            <form action="{{ url('admin/fabric') }}/{{$d->id}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>

                                    {{ $fabrics->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
