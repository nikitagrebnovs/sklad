<div class="mt-5 shadow">
    <h4 class="p-3">Objects history</h4>
    <ul class="list-group">
        @foreach($objectsList as $object)
        <li class="list-group-item muted d-flex justify-content-between"><a href="">{{ $object->client_name . ', ' . $object->object_address . ', ' .  $object->job . ', ' . $object->status}}</a><button class="btn btn-sm btn-light">More</button></li>
        @endforeach
    </ul>
    <a href="" class="text-centre ms-5 mb-5">See more....</a>
</div>
