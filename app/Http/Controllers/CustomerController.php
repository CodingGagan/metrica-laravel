<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\Package;

class CustomerController extends Controller
{
    public function customer_view()
    {
        $packages = Package::get();
        return view('customers/add_customer', ['packages' => $packages]);
    }

    public function add_customer(Request $data)
    {
        $customer = new companies;
        $direct_sponser = companies::where('id', $data->sponser_id)->first();
        if (!empty($direct_sponser)) {
            $sponser_id = $this->getSponser($direct_sponser->id, $data->position);

            // echo $sponser_id.'ddsd';
            // die;
            $customer->username = $data->username;
            $customer->wallet_address = $data->wallet_address;
            $customer->active_status = $data->status;
            $customer->direct_id = $direct_sponser->id;
            $customer->sponser_id = $sponser_id;
            $customer->position = $data->position;
            $customer->package_id = $data->package;
            $customer->save();
            session()->flash('message', 'Customer added successfully.');
            return redirect('customer_list');
        } else {
            session()->flash('error', 'Sponser id doesnt exists.');
            return redirect('customer_view');
        }
        // echo "<pre>";
        // print_r($direct_sponser);
    }

    public function getSponser($direct_id, $position)
    {
        // echo $direct_id . '</br>';
        $sponser = companies::where(['sponser_id' => $direct_id, 'position' => $position])->get()->toArray();
        // echo '<pre> ******************* '; print_r($sponser); echo '<pre> ******************';
        if (!empty($sponser)) {
            $direct_id = $sponser[0]['id'];
            $sponser = $this->getSponser($direct_id, $position);
        } else {
            // echo $direct_id.' Crying </br>' ;
            return $direct_id;
        }
        return $direct_id;
    }

    public function customer_list()
    {
        $data = companies::get();
        return view('customers/index', ['customers' => $data]);
    }

    public function edit_view($id)
    {
        $customer = companies::where('id', $id)->first();
        return view('customers/edit_customer', ['data' => $customer]);
    }

    public function edit_customer(Request $data, $id)
    {
        $customer = companies::where('id', $id)->first();
        $validated = $data->validate([
            'wallet_address' => 'required',
        ]);
        $customer->wallet_address = $data->wallet_address;
        $customer->active_status = $data->status;
        $customer->save();
        session()->flash('message', 'Customer details updated successfully.');
        return redirect('customer_list');
    }
}
