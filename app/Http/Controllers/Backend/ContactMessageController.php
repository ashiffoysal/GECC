<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allData = ContactMessage::latest()->get();
        return view('backend.contact.index', compact('allData'));
    }

    // delete method
    public function destroy($id)
    {
        $contact = ContactMessage::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Contact message deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Contact message not found.');
        }
    }
}
