<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Rate;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RateController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return List of Rates
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rates = Rate::all();
        return $this->successResponse($rates);
    }

    /**
     * Create one new Rate
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[

            'rate'=>'required|numeric|between:1,5',
            'user_id'=>'required|integer',
            'object_id'=>'required|integer',
            'category_id'=>'required|integer',

        ]);
        
        $rate = Rate::create($request->all());
        return $this->successResponse($rate,Response::HTTP_CREATED);
    }

    /**
     * get one Rate
     *
     * @return Illuminate\Http\Response
     */
    public function show($rate)
    {
        //
        $rate = Rate::findOrFail($rate);
        return $this->successResponse($rate);
    }

    /**
     * update an existing one Rate
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request,$rate)
    {
        //

        $this->validate($request,[

            'rate'=>'numeric|between:1,5',
            'user_id'=>'integer',
            'object_id'=>'integer',
            'category_id'=>'integer',

        ]);
        $rate = Rate::findOrFail($rate);
        //--allow to update comment , rate fields only
        $rate->fill([
            $rate->comment = $request->comment,
            $rate->rate = $request->rate,
            ]);

        if($rate->isClean()){
            return $this->errorResponse("you didn't change any value",Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $rate->save();
        return $this->successResponse($rate);
    }

     /**
     * remove an existing one Rate
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($rate)
    {
        //
        $rate = Rate::findOrFail($rate);
        $rate->delete();
        return $this->successResponse($rate);
    }
}
