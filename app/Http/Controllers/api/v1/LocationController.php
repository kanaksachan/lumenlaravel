<?php

namespace App\Http\Controllers\api\v1;
namespace App\Http\Controllers;
use App\User;

class LocationController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function locationListing()
    {
        //echo "ddd";die;
        $data='dddddd';
        return response()->json($data);
    }
    
     public function locationDataListing()
    {
        
//        $data='dddddd';
//        return response()->json($data);
         
         return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
    
     public function testBasicExample()
    {
        $this->json('POST', '/user', ['name' => 'Sally'])
             ->seeJson([
                'created' => true,
             ]);
    }
}
