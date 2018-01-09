<?php

namespace App\Http\Controllers\Model;

use Auth;
use App\Models\Model\ModelBillingInfo;
use App\Models\Model\ModelUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Models\StoreModelBillingInfo;

class ModelBillingInfoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $modelId = Auth::guard('web_model')->user()->id;
        return view('model.billing.index')
                        ->with('modelbillinginfo', ModelBillingInfo::where('model_user_id', $modelId)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelBillingInfo $request) {
        $modelId = Auth::guard('web_model')->user()->id;

//        $model = ModelUser::findOrFail($modelId);

        Auth::guard('web_model')->user()->modelBillingInfo()->create([
            'model_user_id' => $modelId,
            'project_hourly_cost' => $request->project_hourly_cost,
            'project_half_day_cost' => $request->project_half_day_cost,
            'project_full_day_cost' => $request->project_full_day_cost,
        ]);

        return redirect('modelbillinginfo')->with('success', 'Billing information updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\ModelBillingInfo  $modelBillingInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ModelBillingInfo $modelBillingInfo) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\ModelBillingInfo  $modelBillingInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelBillingInfo $modelBillingInfo) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model\ModelBillingInfo  $modelBillingInfo
     * @return \Illuminate\Http\Response
     */
    public function update(StoreModelBillingInfo $request, ModelBillingInfo $modelBillingInfo) {
//        dd($request);
        $modelId = Auth::guard('web_model')->user()->id;
        $model = ModelUser::findOrFail($modelId);
        Auth::guard('web_model')->user()->modelBillingInfo()->update([
            'model_user_id' => $modelId,
            'project_hourly_cost' => $request->project_hourly_cost,
            'project_half_day_cost' => $request->project_half_day_cost,
            'project_full_day_cost' => $request->project_full_day_cost,
        ]);

        return redirect('modelbillinginfo')->with('success', 'Billing information updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\ModelBillingInfo  $modelBillingInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelBillingInfo $modelBillingInfo) {
        //
    }

}
