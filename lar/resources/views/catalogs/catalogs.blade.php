@extends('layouts.headerhome')
@section('content')
    <div class="be-content">
        @if(count($errors) > 0)
            <div role="alert" class="alert alert-danger alert-dismissible">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true"
                                                                                                  class="mdi mdi-close"></span>
                </button>
                @foreach($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Catalog
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{!! route('createcatalogs') !!}"
                                  data-parsley-validate="" novalidate="" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Catalog Name</label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text" required="" parsley-type="name"
                                               name="name"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Note</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="note" name="note"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <p class="text-right">
                                            <button type="submit" name="add" class="btn btn-space btn-primary">Add Catalog
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.footer')