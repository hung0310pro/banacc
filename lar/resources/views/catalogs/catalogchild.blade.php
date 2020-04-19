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

        @if(session('errorcatalogschild'))
            <div role="alert" class="alert alert-danger alert-dismissible">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true"
                                                                                                  class="mdi mdi-close"></span>
                </button>
                {{ session('errorcatalogschild') }}
            </div>
        @endif

        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Catalog Child
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{!! route('createcatalogchild') !!}"
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input id="price" type="number" required="" parsley-type="price"
                                               name="price"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Parent Catalog</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_catalog">
                                            <option value="0">Please choose this option</option>
                                            <?php foreach ($catalogs as $value) : ?>
                                            <option value="<?= $value->id ?>"><?= $value->catalogname ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <p class="text-right">
                                            <button type="submit" name="add" class="btn btn-space btn-primary">Add
                                                Catalog Child
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