<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function searchTracking(Request $request)
    {
        try {
            $trackingNumber = $request->input('tracking');

            if ($trackingNumber) {
                $tracking = Tracking::where('report', $trackingNumber)->first();

                if (!$tracking) {
                    return redirect()->back()->with('tracking_error', "Report number {$trackingNumber} not found!");
                }

                return view('frontend.verified', compact('tracking'));
            }

            return view('frontend.search');
        } catch (\Throwable $th) {
            Log::error('Trackings Search Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }
}
