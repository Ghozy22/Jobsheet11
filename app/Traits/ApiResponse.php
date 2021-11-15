<?php

    namespace App\Traits;

    trait ApiResponse{

        protected function apiSuccess($data, $code = 200, $messege = null  ){

            return response()->json([
                'data' => $data,
                'messege' => $messege,
            ], $code);

        }

        protected function apiError($errors, $code, $messege = null){

            return response()->json([
                'errors' => $errors,
                'messege' => $messege,
            ], $code);

        }

    }
    

?>