<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view tracking');
        try {
            $trackings = Tracking::get();
            return view('dashboard.trackings.index',compact('trackings'));
        } catch (\Throwable $th) {
            Log::error('Tracking Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create tracking');
        try {
            return view('dashboard.trackings.create');
        } catch (\Throwable $th) {
            Log::error('Tracking Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create tracking');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $tracking = new Tracking();
            $tracking->tracking_no = $this->generateTrackingNo();
            $tracking->name = $request->name;
            $tracking->email = $request->email;

            // if ($request->hasFile('image')) {
            //     $bookImage = $request->file('image');
            //     $bookImage_ext = $bookImage->getClientOriginalExtension();
            //     $bookImage_name = time() . '_bookImage.' . $bookImage_ext;
            //     $bookImage_path = 'uploads/book-images';
            //     $bookImage->move(public_path($bookImage_path), $bookImage_name);
            //     $book->image = $bookImage_path . "/" . $bookImage_name;
            // }

            $tracking->save();

            DB::commit();
            return redirect()->route('dashboard.trackings.index')->with('success', 'Tracking Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            Log::error('Tracking Created Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    private function generateTrackingNo(): string
    {
        do {
            $trackingNo = 'TRACK-' . date('Y') . '-' . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (Tracking::where('tracking_no', $trackingNo)->exists());

        return $trackingNo;
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update tracking');
        try {
            $tracking = Tracking::findOrFail($id);
            return view('dashboard.trackings.edit', compact('tracking'));
        } catch (\Throwable $th) {
            Log::error('Trackings Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update tracking');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $tracking = Tracking::findOrFail($id);
            $tracking->name = $request->name;
            $tracking->email = $request->email;

            // if ($request->hasFile('image')) {
            //     if (isset($book->image) && File::exists(public_path($book->image))) {
            //         File::delete(public_path($book->image));
            //     }
            //     $bookImage = $request->file('image');
            //     $bookImage_ext = $bookImage->getClientOriginalExtension();
            //     $bookImage_name = time() . '_bookImage.' . $bookImage_ext;
            //     $bookImage_path = 'uploads/book-images';
            //     $bookImage->move(public_path($bookImage_path), $bookImage_name);
            //     $book->image = $bookImage_path . "/" . $bookImage_name;
            // }

            $tracking->save();

            DB::commit();
            return redirect()->route('dashboard.trackings.index')->with('success', 'Tracking Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            Log::error('Tracking Created Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete tracking');
        try {
            $tracking = Tracking::findOrFail($id);
            // if (isset($book->image) && File::exists(public_path($book->image))) {
            //     File::delete(public_path($book->image));
            // }
            $tracking->delete();
            return redirect()->back()->with('success', 'Tracking Deleted Successfully!');
        } catch (\Throwable $th) {
            Log::error('Trackings Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
