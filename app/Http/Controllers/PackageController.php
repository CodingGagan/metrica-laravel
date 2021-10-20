<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;


class PackageController extends Controller
{
    public function packages_list()
    {
        $data = Package::get();
        return view('packages/index', ['packages' => $data]);
    }

    public function add_package(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
            'currency' => 'required',
        ]);
        $package = new Package;
        $package->name = $request->name;
        $package->amount = $request->amount;
        $package->currency = $request->currency;
        $package->save();
        session()->flash('message', 'Package added successfully.');
        return redirect('package_list');
    }

    public function edit_view(Request $data, $id)
    {
        $package = Package::where('id', $id)->first();
        return view('packages/edit_package', ['data' => $package]);
    }

    public function edit_package(Request $data, $id)
    {
        $package = Package::where('id', $id)->first();
        $validated = $data->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
            'currency' => 'required',
        ]);
        $package->name = $data->name;
        $package->amount = $data->amount;
        $package->currency = $data->currency;
        $package->save();
        session()->flash('message', 'Package updated successfully.');
        return redirect('package_list');
    }

    public function delete_package($id)
    {
        $package = Package::where('id', $id)->first();
        $package->delete();
        session()->flash('message', 'Package deleted successfully.');
        return redirect('package_list');
    }
}
