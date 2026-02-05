<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Carbon\Carbon;

class FaqController extends Controller
{

    // create
    public function create()
    {
        return view('backend.faqs.create');
    }
    public function index()
    {
        $data['allData'] = Faq::all();
        return view('backend.faqs.index', $data);
    }

    public function inactive($id)
    {
        $data = Faq::find($id);
        $data->is_active = 0;
        $data->save();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ item deactivated successfully');
    }

    public function active($id)
    {
        $data = Faq::find($id);
        $data->is_active = 1;
        $data->save();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ item activated successfully');
    }

    public function destroy($id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ item deleted successfully');
    }

    // edit and update methods will go here
    public function edit($id){
        $faq = Faq::find($id);
        return view('backend.faqs.edit', compact('faq'));
    }
    // update method will go here
    public function update(Request $request, $id){
        $data = Faq::find($id);
        $data->faq_question = $request->faq_question;
        $data->faq_answer = $request->faq_answer;
        $data->save();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ item updated successfully');
    }
    // store method will go here
    public function store(Request $request){
        $data = new Faq();
        $data->faq_question = $request->faq_question;
        $data->faq_answer = $request->faq_answer;
        $data->save();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ item created successfully');
    }
}
