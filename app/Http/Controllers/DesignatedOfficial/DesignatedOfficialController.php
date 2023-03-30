<?php

namespace App\Http\Controllers\DesignatedOfficial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\DesignatedOfficial\DesignatedOfficialDetail;;
class DesignatedOfficialController extends Controller
{

    public function GetAddOfficial(){
        return view('designated_official.designated_official');
    }
    public function AddOfficial(Request $request){
        try {
            if ($request->ajax()) {
                $validator = Validator::make($request->all(), [
                    'official_type' => 'required',
                    'name.*' => 'required|string|max:255',
                    'address.*' => 'required',
                    'contact_no.*' => 'required',
                    'email.*' => 'max:255',
                ],
                [
                    'name.*.required' => 'You must provide a hotel name',
                    'address.*.required' => 'You must provide a address',
                    'contact_no.*.required' => 'You must provide a contact no',
                    'email.*.required' => 'You must provide a wmail',

                ]);
                if ($validator->fails()) {

                    return response()->json([
                        'message' => 'validationFails',
                        'error' => $validator->errors()
                    ]);
                } else {
                    $details = [];
                    for ($i = 0; $i < count($request->name); $i++) {
                        $details[] = [
                            'name' => $request->name[$i],
                            'address' => $request->address[$i],
                            'contact_no' => $request->contact_no[$i],
                            'email' => $request->email[$i],
                            'official_type'=>$request->official_type,
                            'status' => 1,
                            'user_id' => Auth::user()->id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),

                        ];
                    }
                    $details = collect($details);
                    $chunks = $details->chunk(500);

                    foreach ($chunks as $chunk) {
                        DesignatedOfficialDetail::insert($chunk->toArray());
                    }
                    return response()->json([
                        'message' => 'success',
                        'request' => 'Designated Official details successfully Inserted',
                    ]);
                }
            }
        } catch (Exception $e) {
            return $e;
            return response()->json([
                'message' => 'error',
                'request' => 'Something Went Wrong',
            ]);
        }
    }
    public function OfficialList()
    {
        return view('designated_official.designated_official_details');
    }
    public function DatatableOfficialList(Request $request)
    {
        $to_list = DesignatedOfficialDetail::where(['status'=> 1,'official_type'=>$request->official_type])->get();
        return datatables()->of($to_list)
            ->addIndexColumn()
            ->make(true);
    }
    public function GetEditOfficialData(Request $request)
    {
        return  response()->json([
            'message' => 'success',
            'data' => DesignatedOfficialDetail::where('id', $request->id)->first()
        ]);
    }
    public function DeleteOfficialData(Request $request)
    {
        $data = DesignatedOfficialDetail::where('id', $request->id)->first();
        $data->status = 0;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'deleted successfully'
        ]);
    }
    public function EditOfficialData(Request $request)
    {
        $data = DesignatedOfficialDetail::where('id', $request->id)->first();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact_no = $request->contact_no;
        $data->email = $request->email;
        $data->save();
        return  response()->json([
            'message' => 'success',
            'data' => 'updated successfully'
        ]);
    }}
