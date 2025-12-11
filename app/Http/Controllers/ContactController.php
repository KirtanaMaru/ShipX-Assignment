<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homepage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate inputs
    $request->validate([
        'full_name' => 'required',
        'email' => 'required|email|unique:contacts,email',
        'phone' => 'required',
        'business_name' => 'required',
        'message' => 'required',
        'upload_file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
    ]);

    // Handle file upload
    $filePath = null;
    if ($request->hasFile('upload_file')) {
        $filePath = $request->file('upload_file')->store('uploads', 'public');
    }

    // Insert into DB
    Contact::create([
        'full_name'     => $request->full_name,
        'email'         => $request->email,
        'phone'         => $request->phone,
        'business_name' => $request->business_name,
        'message'       => $request->message,
        'upload_file'   => $filePath,
    ]);

     return response()->json([
        'message' => 'Contact Saved Successfully'
    ]);
}

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $contacts = Contact::all();
        return view('all-user', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('edit-user', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $contact = Contact::findOrFail($id);

    $request->validate([
        'full_name'     => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        'email'         => ['required', 'email', 'unique:contacts,email,' . $contact->id],
        'phone'         => ['required', 'unique:contacts,phone,' . $contact->id, 'digits_between:10,15'],
        'business_name' => ['required'],
        'message'       => ['required'],
        'upload_file'   => ['nullable','file','mimes:jpg,png,pdf,doc,docx','max:2048'],
    ]);

    $data = $request->except('upload_file');

    if ($request->hasFile('upload_file')) {
        $filePath = $request->file('upload_file')->store('uploads', 'public');
        $data['upload_file'] = $filePath;
    }

    $contact->update($data);

    return response()->json(['status' => 'success', 'message' => 'User updated successfully']);
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::destroy($id);
        return redirect('/dashboard')->with('success', 'Contact Deleted Successfully');
    }
}
