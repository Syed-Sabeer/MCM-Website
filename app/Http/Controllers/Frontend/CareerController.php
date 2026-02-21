<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('frontend.careers');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'note' => 'required|string|min:10',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        try {
            $resumePath = null;
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                $resumePath = $file->store('resumes', 'public');
            }

            Career::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone' => $validated['phone'],
                'note' => $validated['note'],
                'resume' => $resumePath,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your application! We will review your resume and get back to you soon.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your application. Please try again.',
            ], 500);
        }
    }

    // API: Get all career applications with pagination
    public function listCareers(Request $request)
    {
        try {
            $perPage = $request->get('per_page', 15);
            $careers = Career::paginate($perPage);

            return response()->json([
                'success' => true,
                'data' => $careers,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve career applications.',
            ], 500);
        }
    }

    // API: Get single career application by ID
    public function showCareer($id)
    {
        try {
            $career = Career::findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $career,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Career application not found.',
            ], 404);
        }
    }
}
