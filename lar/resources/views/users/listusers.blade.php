@extends('layouts.headerhome')
@section('content')
    <div class="be-content">
        @if(session('deletesuccess'))
            <div role="alert" class="alert alert-success alert-dismissible">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true"
                                                                                                  class="mdi mdi-close"></span>
                </button>
                {{ session('deletesuccess') }}
            </div>
        @endif
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">List Users
                            <div class="tools"><span class="icon mdi mdi-download"></span><span
                                        class="icon mdi mdi-more-vert"></span></div>
                        </div>
                        <div class="panel-body">
                            <table id="table1" class="table table-striped table-hover table-fw-widget">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php $a = 0; ?>
								<?php foreach ($listUsers as $value) :?>
								<?php if($value->level != 1) : ?>
								<?php $a++; ?>
                                <tr class="odd gradeX">
                                    <td><?= $a ?></td>
                                    <td><?= $value->name ?></td>
                                    <td><?= $value->email ?></td>
									<?php if($value->phone == 0) : ?>
                                    <td></td>
									<?php else : ?>
                                    <td><?= $value->phone ?></td>
									<?php endif; ?>
                                    <td class="center">
                                        <a href="{{ route('listuser.show',$value->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                    <td class="center">
                                        <form action="{{ route('listuser.destroy',$value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
								<?php endif; ?>
								<?php endforeach; ?>
                                </tbody>
                            </table>

                            <script>
                                $(function () {
                                    $('#table1').DataTable();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.footer')