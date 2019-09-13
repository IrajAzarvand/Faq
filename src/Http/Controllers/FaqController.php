<?php

namespace iraj\faq\Http\Controllers;

use App\Http\Controllers\Controller;

use function compact;
use Illuminate\Http\Request;

use iraj\faq\Models\faq;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
//     * @return Factory|View
     */
    public function index()
    {
        $faqs = faq::all();
        return view('faq::faq', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param faq $id
     * @return int|faq
     */
    public function show($id)
    {
        $faq= faq::find($id);
       return view('faq::faqShow',compact('faq'));

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function list()
    {
        $questionList = DB::table('faqs')->get();
        return view('faq::faqAdmin', compact('questionList'));
    }
}
