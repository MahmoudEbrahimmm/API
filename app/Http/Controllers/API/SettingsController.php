<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SettingsController extends Controller
{
    public function __invoke(Request $request)
    {
        $settings = Setting::all();
        if ($settings) {
            return ApiResponse::sendResponse(200, 'Settings retrieved successfully',
                SettingResource::collection($settings));
        } else {
            return ApiResponse::sendResponse(200, 'Settings Not found');
        }
    }
}
