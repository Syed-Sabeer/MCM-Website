<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string',
            'message' => 'required|string|min:10',
        ]);

        try {
            Contact::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been received. We will get back to you soon.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message. Please try again.',
            ], 500);
        }
    }

    // API: Get all contacts with pagination
    public function listContacts(Request $request)
    {
        try {
            $perPage = $request->get('per_page', 15);
            $contacts = Contact::paginate($perPage);

            return response()->json([
                'success' => true,
                'data' => $contacts,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve contacts.',
            ], 500);
        }
    }

    // API: Get single contact by ID
    public function showContact($id)
    {
        try {
            $contact = Contact::findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $contact,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found.',
            ], 404);
        }
    }
}
