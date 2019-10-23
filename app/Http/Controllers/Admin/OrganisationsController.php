<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OrganisationsController extends Controller
{
    public function organisationList() {
    	$organisations = Organisation::select('id', 'organisation_name', 'establishment_email_id', 'details_of_cno', 'cno_email_id', 'status')->paginate(10);
    	// dd($organisations->total());
    	return view('admin.master_data.organisation_list', compact('organisations'));
    }


    public function addAndEditOrganisation($id = null) {
    	$organisation = Organisation::find($id);
    	return view('admin.master_data.add_edit_organisation', compact('organisation'));
    }

    public function saveAndUpdateOrganisation(Request $request) {
    	
    	$organisationId = $request->organisation_id;

    	$this->validate($request, [
    		'organisation_name' => 'required|string|min:3|max:150|unique:organisations,organisation_name,'.$organisationId.',id,deleted_at,NULL',
    		'establishment_email_id' => 'required|email|min:3|max:150|unique:organisations,establishment_email_id,'.$organisationId.',id,deleted_at,NULL',
    		'cno_email_id' => 'required|email|min:3|max:150|unique:organisations,cno_email_id,'.$organisationId.',id,deleted_at,NULL',
            'details_of_cno' => 'required|min:3|max:150|string',
    	]);

    	try{

    		$organisation = new Organisation();
	    	$message = 'Organisation has been added successfully!';
	    	if($organisationId){
	    		$organisation = Organisation::find($organisationId);
	    		$message = 'Organisation has been updated successfully!';
	    	}

	    	$organisation->organisation_name = $request->organisation_name;
	    	$organisation->establishment_email_id = $request->establishment_email_id;
	    	$organisation->cno_email_id = $request->cno_email_id;
            $organisation->details_of_cno = $request->details_of_cno;
	    	$organisation->save();

	    	return response()->json(['success' => true, 'message' => $message], 200);
    	}catch(\Exception $e) {
    		return response()->json(['success' => false, 'message' => 'Some error occurend while processing organisation data!'], 200);
    	}
    	return response()->json(['success' => false, 'message' => 'Some error occurend while processing organisation data!'], 200);

    }

    public function changeOrganisationStatus(Request $request) {

    	$this->validate($request,[
            'active_record_id'=>'required',
            'status'=>'required'
        ]);

    	try{
			
			$record = Organisation::where('id',$request->get('active_record_id'))->first();

	        if($record){

	            $data = [];
	            $data['status'] = $request->get('status');
	            $record->update($data);

	            return response()->json(['success'=>true,'message'=>'Organisation status has been changed successfully.'],200);

	        }else{

	            return response()->json(['success'=>false,'message'=>'No Such Organisation Exists.'],200);
	        }
    	}catch(\Exception $e){
    		return response()->json(['success'=>false,'message'=>'Some error occured while processing Organisation data.'],200);
    	}
    }


    public function deleteOrganisation($organisationId) {
    	
        
        if(Organisation::where('id',$organisationId)->delete()){

            return response()->json(['success'=>true,'message'=>'Organisation has been deleted successfully.'],200);
        }

        return response()->json(['success'=>false,'message'=>'Some error occurred while deleting Organisation.'],200);
	}

    public function organisationData($organisationId) {
    	$organisation = Organisation::select('id', 'establishment_email_id', 'details_of_cno', 'cno_email_id')->find($organisationId);

    	return response()->json(['success' => true, 'organisation' => $organisation], 200);
    }
}
