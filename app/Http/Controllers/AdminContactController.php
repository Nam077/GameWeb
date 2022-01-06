<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AdminContactController extends Controller
{
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = $this->contact->paginate(5);
        return view('Admin.Contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $contact = $this->contact->find($id);
        return view('Admin.Contact.view', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Contact $contact
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
                $this ->contact->find($id)->delete();
                return  response() -> json([
                    'code' => 200,
                    'message' => 'success'
                ], 200);

        } catch (\Exception $exception){
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
            return  response() -> json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }

    public function sendMail(Request $request, $id)
    {
        try {
            $data = [
                'name' => $request ->nam,
                'mailData' => $request->message,
            ];
            Mail::send('Mail.contact', $data, function ($mail) use ($request) {
                $mail->from('nvnfont@gmail.com', 'NVNFONT');
                $mail->to($request->mail);
                $mail->subject($request->subject);
            });
        }catch (\Exception $exception){

        };
       $this -> contact ->find($id)->update([
           'status' => '1'
       ]);
       return redirect() ->route('contactadmin.index');

    }
}
