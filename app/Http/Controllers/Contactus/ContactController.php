<?php

namespace App\Http\Controllers\Contactus;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\DesignatedOfficial\DesignatedOfficialDetail;
use App\Models\User\UserQuery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;;

class ContactController extends Controller
{
    public function GetContactus()
    {
        try {
            $data = DesignatedOfficialDetail::all()->where('official_type',1);
            $secData = DesignatedOfficialDetail::all()->where('official_type',2);
            return view('contactus.contactus',['desgoffcials'=>$data, 'secoffcials'=>$secData]);
        } catch (Exception $e) {
        }
    }

    public function AddQuery(Request $request)
    {
        try {
            if ($request->ajax()) {

                $validator=Validator::make($request->all(), [
                    'message' => 'required',
                    'name' => 'required|string|max:255',
                    'email' => 'required|email',
                    'subject' => 'required|string|max:255',
                ]);
                if ($validator->fails()) {

                    return response()->json([
                        'msg' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $userquery = new UserQuery();
                    $userquery->message = $request->message;
                    $userquery->name = $request->name;
                    $userquery->email = $request->email;
                    $userquery->subject = $request->subject;
                    $userquery->status = TRUE;
                    $userquery->reply_status = 0;
                    $userquery->created_at = Carbon::now();
                    $userquery->updated_at = Carbon::now();
                    $userquery->save();


                    return response()->json([
                        'message' => 'success',
                        'request' => 'Query Submitted Successfully',
                    ]);
                }
            }

        } catch (Exception $e) {
            return response()->json([
                'messege' => 'error',
                'request' =>'Something Went Wrong',
            ]);
        }
    }

}
