<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Provider;
use App\Models\Service;
use App\Models\SubService;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;

class AdminController extends Controller
{
    //-----------get dashboard Page--------------------------------------
    public function getDashboard()
    {
        $admin = Admin::count();
        $user = User::count();
        $provider = Provider::count();
        $service = Service::count();
        $subService = SubService::count();
        $order = Order::count();
        // dd($admin,$user,$provider,$service,$subService,$order );
        return view('admin.pages.dashboard', compact(['admin', 'user', 'provider', 'service', 'subService', 'order']));
    }

    //---------------Admin Add ,show AllAdmin ,  Login ,Logout -----------------------------------------

    public function getLogin()
    {
        return view('admin.auth.login');
    }
    public function postLogin(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = Admin::where('email', $email)->where('password',$password)->first();

        if ($admin) {
            return redirect('dashboard');
            // Auth::login($admin, $request->has('remember'));
            // dd(Auth::login($admin));
        } else {
             return redirect()->back();

        }

       return redirect('dashboard');
    }

    public function getLogout(){
        Auth::guard('admins')->logout();
        return redirect('/login');
    }

    public function getAdmin()
    {
        $admins = Admin::all();
        return view('admin.pages.admins.index', compact('admins'));

    }
    public function addAdmin(Request $request){
        $data=$request->except('password');
        $data['password'] = Hash::make($request->password);
        $admins=Admin::create($data);

        $admins=Admin::all();
        return view('admin.pages.admins.index',compact('admins'));
    }

    //--------------------show all Users--------------------------
    public function getUser()
    {
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));

    }

    //------------------show all Providers-----------------------
    public function getProvider()
    {
        $providers = Provider::all();
        return view('admin.pages.providers.index', compact('providers'));
    }

    //---------------------Add service , show all Services----------------
    public function getService()
    {
        $services = Service::all();
        return view('admin.pages.services.index', compact('services'));
    }

    public function addService(Request $request){

        $data['name']=$request->name;
        $data['type']=$request->type;

        if ($request->hasFile('icon')) {

            $file = $request->file("icon");
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'projectFiles/Service_icon';
            $file->move($path, $filename);
            $data['icon'] = $path . '/' . $filename;
        }
        // dd($data);
        $services=Service::create($data);
        // dd($services);
        $image_64= base64_encode(file_get_contents(url($services->icon)));
        $services->update(['icon_64'=>'data:image/png;base64,'.$image_64]);
// dd($data['icon_64']);
        return redirect()->back();

        // $services=Service::create($request->all());
        // // $services=Service::all();
        // // return view('admin.pages.services.index', compact('services'));
        // return redirect()->back();
    }

    //------------------Add SubService , show all SubServices----------------
    public function getSubService()
    {
        $services=Service::with('subservice')->get();
        $subServices = SubService::all();
        return view('admin.pages.subServices.index',compact(['subServices','services']));

    }
    public function getAddSubService(){
        $services=Service::with('subservice')->get();
        $subService=SubService::all();

        return view('admin.pages.subServices.index',compact(['subServices','services']));
    }
    public function addSubService(Request $request ){
        $service_id = $request->service_id;
        $subService=$request->name;
        Service::find($service_id)->subservice()->create(['name'=>$subService]);
        return redirect()->back();

    }

    //--------------------show all Orders------------------------------------
    public function getOrder()
    {
        $orders = Order::all();
        return view('admin.pages.orders.index', compact('orders'));
    }

    //--------------------Accept Provider--------------
    public function acceptProvider($id){
      $provider = Provider::where('id', $id)
           ->update(['verified' => '1']);
       return redirect()->back();
    }
    //------------------GetPAckages----------------
    public function getPricePackage()
    {
        $packages = price_package::all();
        return view('admin.pages.price_packages.index', compact('packages'));
    }

    public function addPricePackage(Request $request){

        $data['name']=$request->name;
        $data['description']=$request->description;


        $packages=price_package::create($data);


        return redirect()->back();
      }

}
