<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.welcome');
    }
    //


    public function drill(){
        return view('pages.drilling');
    }


    public function well(){
        return view('pages.wellbore');
    }


    public function train(){
        return view('pages.training');
    }


    public function pastTraining()
{
    return view('pages.past-training');
}

public function manpower()
{
    return view('pages.manpower');
}

public function geomechanics()
{
    return view('pages.geomechanics');
}

public function geosteering()
{
    return view('pages.geosteering');
}


    
    public function direct(){
        return view('pages.directional');
    }


     
    public function bit(){
        return view('pages.bitsupply');
    }



     public function inspect(){
        return view('pages.inspection');
    }

    
    public function demo(){
        return view('pages.demo');
    }

    public function storeDemo(Request $request){
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'corporateEmail' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:50',
            'companyName' => 'required|string|max:255',
            'jobTitle' => 'nullable|string|max:255',
            'operatingEnvironment' => 'nullable|string|max:255',
            'products' => 'nullable|array',
            'products.*' => 'string|max:255',
            'demoFormat' => 'nullable|string|max:255',
            'demoTimeline' => 'nullable|string|max:255',
            'projectDetails' => 'nullable|string|max:2000',
        ]);

        $demo = DemoRequest::create([
            'full_name' => $validated['fullName'],
            'corporate_email' => $validated['corporateEmail'],
            'phone_number' => $validated['phoneNumber'],
            'company_name' => $validated['companyName'],
            'job_title' => $validated['jobTitle'] ?? null,
            'operating_environment' => $validated['operatingEnvironment'] ?? null,
            'products' => $validated['products'] ?? [],
            'demo_format' => $validated['demoFormat'] ?? null,
            'demo_timeline' => $validated['demoTimeline'] ?? null,
            'project_details' => $validated['projectDetails'] ?? null,
            'status' => 'pending',
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Demo request submitted successfully.',
                'data' => $demo,
            ], 201);
        }

        return redirect()->back()->with('success', 'Demo request submitted successfully.');
    }

    public function contact(){
        return view('pages.demo');
    }





}