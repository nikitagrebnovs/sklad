<div class="shadow col-12 mt-5 container">
    <h1 class="p-3">Last objects</h1>
    <div class="row">
            @foreach($objects as $object)
            <div class="card col-3 p-2">
                <img src="https://scontent.flux1-1.fna.fbcdn.net/v/t31.18172-8/p480x480/16252345_397553430579232_4206742798426998298_o.jpg?_nc_cat=111&ccb=1-5&_nc_sid=e007fa&_nc_ohc=yujHufkpkP4AX-gbLHa&_nc_ht=scontent.flux1-1.fna&edm=AC7C4-wEAAAA&oh=da1c0172a54fb72e6d8d8afc7b5449cc&oe=61A6C04D" class="card-img-top p-2" alt="...">
                <div class="card-body col-12">
                    <h5 class="card-title">{{  $object->object_address }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Name:</span><span>{{ $object->client_name }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Address: </span><span>{{  $object->object_address }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Job: </span><span>{{  $object->job }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Status: </span><span>{{  $object->status }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Assigned to: </span><span>{{  $object->assigned_to }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Source: </span><span>{{  $object->source }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span class="text-muted">Date: </span><span>{{  $object->date }}</span></li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <small class="text-muted">Updated: {{ $object->updated_at }}</small>
                    <button class="btn btn-sm btn-warning">Edit</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
