<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;

class ObjectsController extends BaseController
{
    public function sendToWhatsapp() {
        $sid    = "AC54d842e7b40a0b1ff445f23aa5526240";
        $token  = "d20fdda6bdac337de16590863ce1166e";
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create("whatsapp:+37122482946", // to
                array(
                    "from" => "whatsapp:+14155238886",
                    "body" => "zdarova, tam zakaz prishel cheeeek"
                )
            );

        print($message->sid);
    }





    public function show() {
//        $this->sendToWhatsapp();
        $objects = Objects::all();
        $response = Http::withHeaders([
            'Authorization' => 'ApiKey MZL-770862-a4872dd8bc71f33f7ccbb7dafcae7da1'
        ])->get('https://api.mozello.com/v1/store/notifications/');

//        $object = $response->json('products');
//        foreach ($object as $item){
//        dump($item);
//        }
//        dd($response->json());

        return view('objects',
        [



            'objects' => $objects->take(4),
            'objectsList' => $objects,
        ]);
    }

    public function create() {
        return view('objects.objects-create');
    }

    public function createNew(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required',
            'object_address' => 'required',
            'status' => 'required',
            'assigned_to' => 'required',
            'source' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'description' => 'sometimes'
        ]);

        $objects = Objects::create([
            'client_name' => $request->get('client_name'),
            'object_address' => $request->get('object_address'),
            'status' => $request->get('status'),
            'assigned_to' => $request->get('assigned_to'),
            'source' => $request->get('source'),
            'date' => now(),
            'amount' => $request->get('amount'),
            'description' => $request->get('description'),
        ]);

        return redirect(route('objects.show'));
    }

}
