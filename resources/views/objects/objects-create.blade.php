@extends('layout.main')
@section('content')
    @include('objects.object-navbar')
<div class="container">
    <div class="container-fluid px-1 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card shadow">
                    <h5 class="text-muted mt-3">Create new object</h5>
                    <hr>
                    <form action="{{ route('object.createNew') }}" method="POST" class="form-horizontal">
                        @csrf
                        <fieldset>
                            <div class="form-group ">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="client_name">Client Name</label>
                                    <input id="client_name" name="client_name"  type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="object_address">Address</label>
                                    <input id="object_address" name="object_address" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 mx-auto mb-3">
                                    <label class="col-md-12 control-label" for="radios">Job</label>
                                    <div class="d-flex justify-content-around mt-3">
                                        <label class="radio-inline" for="radios-0">
                                            <input type="radio" name="job" id="job-0" value="1" checked="checked">
                                            Remont
                                        </label>
                                        <label class="radio-inline" for="job-1">
                                            <input type="radio" name="job" id="job-1" value="2">
                                            Sell
                                        </label>
                                        <label class="radio-inline" for="job-2">
                                            <input type="radio" name="job" id="job-2" value="3">
                                            Montazh
                                        </label>
                                        <label class="radio-inline" for="job-3">
                                            <input type="radio" name="job" id="job-3" value="4">
                                            Warranty
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="radios">Status</label>
                                    <div class="d-flex justify-content-around mt-3">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="status" id="status-0" value="1" checked="checked">
                                        New
                                    </label>
                                    <label class="radio-inline" for="status-1">
                                        <input type="radio" name="status" id="status-1" value="2">
                                        In progress
                                    </label>
                                    <label class="radio-inline" for="status-2">
                                        <input type="radio" name="status" id="status-2" value="3">
                                        Done
                                    </label>
                                    <label class="radio-inline" for="status-3">
                                        <input type="radio" name="status" id="status-3" value="4">
                                        Lost
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="source">Source</label>
                                    <select id="source" name="source" class="form-control">
                                        <option value="1">VAP</option>
                                        <option value="2">RAMEX</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="assigned_to">Assigned to</label>
                                    <select id="assigned_to" name="assigned_to" class="form-control">
                                        <option value="0">No one</option>
                                        <option value="1">Dmitrij</option>
                                        <option value="2">Nikita</option>
                                        <option value="3">Sergej</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="amount">Amount</label>
                                    <input id="amount" name="amount" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="date">Date</label>
                                    <input id="date" name="date" type="text" placeholder="" class="form-control input-md" value="{{now()}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 mx-auto mb-3">
                                    <label class="col-md-4 control-label" for="description">Comments</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <a href="{{ route('objects.show') }}" class="btn btn-warning">Back</a>
                                    <button type="submit"  class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $('.date').datepicker({
        format: 'mm-dd-yyyy'
    });
</script>
@endsection
