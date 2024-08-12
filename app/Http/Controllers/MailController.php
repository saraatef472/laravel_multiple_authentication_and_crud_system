<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mail;
use Illuminate\View\View;


class MailController extends Controller
{
  public function index(): View
  {
    return view('admin.mails', [
      'mails' => Mail::latest()->paginate(4)
  ]);
  }



  public function store(Request $request): RedirectResponse
  {
      $request->validate([
          'userEmail' => ['required', 'string', 'max:255'],
          'description' => ['required', 'string', 'max:255']
      ]);
      
    Mail::create($request->all());
      return redirect()->route('welcome')
                      ->with('success','Mail Sent successfully.');
  }
  public function destroy($mails): RedirectResponse
  {
    $mails = Mail::where('id',$mails)->first();
       $mails->delete();

        // return with('success','Product deleted successfully');
       return redirect()->route('admin.mails')
                      ->with('success','Mail deleted successfully');
  }
}
