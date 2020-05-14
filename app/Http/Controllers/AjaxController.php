<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\irequests;
class AjaxController extends Controller

{
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)

    {
        if (request()->ajax()) {
            $input = request()->all();
            $irequest = new irequests();
            $irequest->fullname = $input['fullname'];
            $irequest->mobile = $input['mobile'];
            $irequest->model = $input['model'];
            $irequest->subject = $input['subject'];
            $irequest->calldate = $input['calldate'];
            $irequest->contactType = $input['contactType'];
            $irequest->email = $input['email'];
            $irequest->details = $input['details'];
            $irequest->save();
            return response()->json(['success'=>'درخواست شما با موفقیت ثبت شد']);
        }
    }
}
