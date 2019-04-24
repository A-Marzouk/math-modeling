<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 4/21/2019
 * Time: 10:10 PM
 */

namespace App\Http\Controllers;


use App\classes\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FormController extends Controller
{

    public function storeConsultForm(Request $request){
        $result = $this->validateForm($request->all());

        if($result !== 'validated'){
            return $result;
        }

        $path= ' NO FILE INCLUDED';
        if(isset($request->consule_file)){
            $file_info = Upload::consultFile('consult_file');
            $path = $file_info['path'] ;
        }

        return [
            'status' => 'success',
            'file_path' => $path
        ];

    }

    protected function validateForm(array $request){
        $validator = Validator::make($request, [
            'name' => 'required|max:255|min:3',
            'phone' => 'required|max:255|min:7',
            'organization_name' => 'max:255',
            'message' => 'max:255',
            'file' => 'max:255',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return 'validated' ;
    }

}