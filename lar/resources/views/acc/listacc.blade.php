@extends('layouts.headerhome')
@section('content')
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">List Account
                            <div class="tools"><span class="icon mdi mdi-download"></span><span
                                        class="icon mdi mdi-more-vert"></span></div>
                        </div>
                        <div class="panel-body">
                            <table id="table1" class="table table-striped table-hover table-fw-widget">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Account</th>
                                    <th>Pass</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $a = 0; ?>
                                <?php foreach ($listacc as $value) : ?>
                                <?php $a++ ?>
                                <tr class="odd gradeX">
                                    <td><?= $a ?></td>
                                    <td><?= $value->accname ?></td>
                                    <td><?= $value->accpass ?></td>
                                </tr>
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