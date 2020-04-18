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
        @if(session('success'))
            <div role="alert" class="alert alert-success alert-dismissible">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true"
                                                                                                  class="mdi mdi-close"></span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Edit User
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{!! route('listuser.update',$user->id) !!}"
                                  data-parsley-validate="" novalidate="" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text" required="" parsley-type="name"
                                               placeholder="Name"
                                               name="name"
                                               class="form-control" value="<?= $user->name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email" required="" parsley-type="email"
                                               placeholder="Email"
                                               name="email"
                                               class="form-control" value="<?= $user->email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input id="phone" type="text" required="" parsley-type="phone"
                                               placeholder="Phone"
                                               name="phone"
                                               class="form-control" value="<?= $user->phone ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <p class="text-right">
                                            <button type="submit" name="edit" class="btn btn-space btn-primary">Edit
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