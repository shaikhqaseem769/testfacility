<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BaseController extends Controller
{
	/*get slug of a string and replace space with hypen(-)*/
    public function getSlug($string){

        return strtolower(str_replace(' ','-',trim($string)));
    }


    /*get User Type of authenticated user*/
    public function getUserType(){

        return (Auth::check()) ?  Auth::user()->user_type : '';
    }

    /*Upload image on same table*/
    public function uploadFileOnSameTable($request, $name=null, $folder) {

        if ($request->hasFile($name)) {

            $relativePath = 'uploaded' . DIRECTORY_SEPARATOR . $folder;
            $dir = public_path() . DIRECTORY_SEPARATOR . $relativePath;
            $image = null;

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }

            $file = $request->{$name};
            $tmpFileName = $folder . '-' . time().'-';
            $fileName = $tmpFileName . '_large.' . $file->getClientOriginalExtension();
            $filePath = $relativePath . DIRECTORY_SEPARATOR . $fileName;
            $image_type = $file->getClientOriginalExtension();
            if($file->move($dir,$fileName)){
                $image['name'] = $fileName;
                $image['file_path'] = $relativePath.DIRECTORY_SEPARATOR.$fileName;
                return $image;

            }
        }
    }

    /*Upload base64 multiple & single Images on specific table*/
    public function uploadImagesBade64Encoded(array $images=[],$folder=null,$tablename=null){

		$uploadedimagesName = [];

		if (count($images)) {
			if (!is_null($folder)) {
				$folder = rtrim($folder,'/').'/';
				if (!is_dir($folder)) {
					mkdir($folder, 0755, true);
				}
			}

			foreach ($images as $key => $image) {
			   if ($image && strpos($image,';base64,') !== false) {
				   $imgarr = explode(";base64,", $image);
				   $img_extension = explode("/",$imgarr[0]);
				   $imgdata = base64_decode($imgarr[1]);
				   $imgname = mt_rand(9999,100000).time().$key.'.'.$img_extension[1];           
				   $image_name = $folder.$imgname;
				   if(file_put_contents($image_name, $imgdata)){
				    $uploadedimagesName[] = $image_name;
				   }
				}
			}
		}

		if (!is_null($tablename)) {
			DB::table($tablename)->insert($uploadedimagesName);
			return 1;
		}

		return $uploadedimagesName;
	}
}
