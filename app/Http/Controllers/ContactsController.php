<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ContactsController extends Controller
{
    public function get()
    {
      // get all users except the authenticated one
      $contacts = User::all();
      return response()->jason($contacts);
    }

}
