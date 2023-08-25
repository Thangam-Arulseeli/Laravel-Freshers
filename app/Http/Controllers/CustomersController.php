<?php
/*
namespace App\Http\Controllers; // Should be included when Controller is created
use Illuminate\Http\Request;

use App\Http\Controllers\CustomersController; // Should be included when CustomersController is created
use App\Models\Customer; // Should be included when Customer model is created
use App\Models\Company;

class CustomersController extends Controller
{
    // When Customers Controller is called, it automatically refers index()
    // public function index(){
    //     $customers = ['Johnny','Ronny','Monny','Lionny','Pionny'];
    //     return view('customers.index', ['customerlist' => $customers]);
    //     // Passing associative array to blade view in customers folder
    // } 

    // When the Customers Controller is called it automatically refers index() 
    
    public function index(){  // To display record in the Customer View - Index page
      //  $customers = Customer::all();  // Use modelname::all(); --- Eloquent ORM
       //1. dd($customers);  // Debugging tool comes with laravel -- dump and die
    //2.    return view ('customers.index',['customerlist' => $customers]);
    
    // 3. Filtering the records - Query filter using where
    // $activeCustomers = Customer::where('active', 1)->get();
    // $inactiveCustomers = Customer::where('active', 0)->get();
    // return view('customers.index', ['activeCustomers' => $activeCustomers, 'inactiveCustomers' => $inactiveCustomers]);

    //4. Filtering the records - Refactoring the code using Customer Model
    // $activeCustomers = Customer::active()->get();
    // $inactiveCustomers = Customer::inactive()->get();
    
    // return view based on filters and customer view only
    //1. Passing filtered record value to the view as associative array  
    //return view('customers.index', ['activeCustomers' => $activeCustomers, 'inactiveCustomers' => $inactiveCustomers]);
    //2. Passing filtered records to the view using compact ( ) for cleaner code
    //return view ('customers.index', compact('activeCustomers' ,'inactiveCustomers'));
    
    $companies = Company::all(); // Use the modelname::all() -- Eloquent ORM;
    $customers = Customer::all();
    return view ('customers.index', compact('customers','companies'));
    }

    public function create( ){
      $companies = Company::all(); // To pull out all te records of Company Model for company ID
      $customer = new Customer();   // Empty Customer object is required for common form for create & edit 
      return view ('customers.create',compact('companies','customer'));
    }

    public function store( ){  
        // dd(request('name'));
        
        // Possible simple validations : 1.1 - When u need validations use it
        // Validations using method chaining
        // $data = request()->validate([   // Method chaining
        //     'name' => 'required|min:5|max:10',
        //     'age' => 'required',
        //      'address' => 'nullable',
        //     'contactno' => 'required',
        //     'mailid' => 'required|email',
        //     'active' => 'required',
        //     'companyid' => 'required'
        //   ]);
       

        // 2.1 Inserting the data into the table - Repeating the code 
        //  $cust = new Customer();     // instance for Customer model is created
        //  $cust->name = request('name');
        //  $cust->age = request('age');
        //  $cust->address = request('address');
        //  $cust->contactno = request('contactno');
        //  $cust->mailid = request('mailid');
        //  $cust->active = request('active');
        //  $cust->save();
        // return back();   // To call the Customers view file again (index.blade.php file) 
    
        // Possible validations: 1.2 
        // $data = request()->validate([
        //     'name' => 'required|string|min:5',
        //     'age' => 'required|integer',
        //     'address' => 'nullable',
        //    // 'contactno' => 'required|integer|size:10',
        //    'contactno' => ['required', 'integer'],
        //     // 'mailid' => 'required|email',
        //    // 'mailid' => ['required', 'email', 'unique:customers']
        //   ]);   
          
        // 2.2 Insert data using $data 
        //dd($data);
       // $customer= Customer::create($data);  // Should combine with Mass assignment- fillable(), to have only the validated data into the DB
       // $customer->save(); -- No need for mass assignment
  
      Customer::create($this->validateRequest());
     // return back();   // Calls the index.blade.php in customers view again
      return redirect('customers'); 

     // $customer= Customer::create($data); ##Both are same, save record by mass assignment
     // Customer::create($data);            ## Both are same, save record by mass assignment 
   }
    
   public function show(Customer $customer){ 
    //1. dd($customer);   // The Customer ID is coming from the table
    //2. $customer = Customer::find($customer); // All details are displayed
    //dd($customer);
    //$customer = Customer::where('id',$customer)->firstOrFail();
    return  view('customers.show',compact('customer'));
   }
   
   private function validateRequest(){
    return request()->validate([
      'name' => 'required|string|min:3',
      'age' => 'required|integer',
      'address' => 'nullable',
      'contactno' => ['required', 'integer'],
      'mailid' => 'required|email',
      'active' => 'required',
      'companyid' => 'required']); 
 }
}
----------------------------------------------------
*/

namespace App\Http\Controllers;  // Should be included when Controller is created

use Illuminate\Http\Request;
//use App\Http\Controllers\CustomersController; // // Should be included when CustomersController is created
use App\Models\Customer;  // Should be included when Customer model is created
use App\Models\Company; // Company Model should be included

class CustomersController extends Controller
{
    // When the Customers Controller is called it automatically refers index() 
  //   public function index(){
  //   $customers = [
  //       'Dani', 'Raniel', 'Ronita', 'Monica', 'Wanica'
  //   ];
  //   return view ('customers.index',['customerlist' => $customers]); // Passing associative array to blade view in customers folder
  // }

  // When the Customers Controller is called it automatically refers index() 
     public function index(){
        
     // $companies = Company::all();// Use the modelname::all() -- Eloquent ORM;
      $customers = Customer::all();
     
      //dd($customers);
     //return view ('customers.index',['customerlist' => $customers]); // Passing associative array to blade view in customers folder
   
    // $activeCustomers = Customer::where('active', 1)->get();
    //$activeCustomers = Customer::active()->get();
    
    // $inactiveCustomers = Customer::where('active',0)->get();
     //$inactiveCustomers = Customer::inactive()->get();
    
     //  return view ('customers.index',[
    //         'activeCustomers' => $activeCustomers,
    //          'inactiveCustomers' => $inactiveCustomers
    //             ]
    //           ); // Passing associative array to blade view in customers folder, array with 2 values as 2nd argument
    // return view ('customers.index', compact('customers','companies'));
    return view ('customers.index', compact('customers'));
  }

  public function create( ){
    $companies = Company::all(); // To pull out all te records of Company Model for company ID
    $customer = new Customer();   // Empty Customer object is required for common form for create & edit 
    return view ('customers.create',compact('companies','customer'));
  }

   // When the Customers Controller is called - submit button is clicked in the form store() is called - because route has it 
   public function store( ){
    // dd(request('name'));

   /* $data = request()->validate([
      'name' => 'required|string|min:3',
      'age' => 'required|integer',
      'address' => 'nullable',
     // 'contactno' => 'required|integer|size:10',
     'contactno' => ['required', 'integer'],
      'email' => 'required|email',
     // 'mailid' => ['required', 'email', 'unique:customers']
       'active' => 'required',
      'companyid' => 'required' 
    ]);   */
         
    // Simpler syntax for inserting a new record by storing each column to the Customer(Model) object
    // $cust = new Customer();   // Creates $cust instance for the Customer Model
    // $cust->name = request('name');
    // $cust->age = request('age');
    // $cust->address = request('address');
    // $cust->contactno = request('contactno');
    // $cust->mailid = request('mailid');
    // $cust->active = request('active');
    //$cust->save();  // Save the Customer model with the details
    // To have the cleaner code for inserting new record using MASS ASSIGNMENT
    
    //dd($data);
    // $customer= Customer::create($data);

    // Customer::create($data);
    Customer::create($this->validateRequest());
   // return back();   // Calls the index.blade.php in customers view again
    return redirect('customers'); 
  }

   public function show(Customer $customer){ 
    //1. dd($customer);   // The Customer ID is coming from the table
    //2. $customer = Customer::find($customer); // All details are displayed
    //dd($customer);
    //$customer = Customer::where('id',$customer)->firstOrFail();
    return  view('customers.show',compact('customer'));
   }

   public function edit(Customer $customer){ // Route Model Binding in Laravel is [Type Hinting] in place, so we can pass the Customer Model
   // dd($customer);
    $companies = Company::all();
    return view ('customers.edit',compact('customer','companies'));
   }

   public function update(Customer $customer){
    /* $data=request()->validate([
        'name' => 'required|string|min:3',
        'age' => 'required|integer',
        'address' => 'nullable',
        'contactno' => ['required', 'integer'],
        'mailid' => 'required|email',
        'active' => 'required',
        'companyid' => 'required' 
    ]); */
    // $customer->update($data);
    $customer->update($this->validateRequest());
    return redirect('customers/'.$customer->id);
   }

   public function destroy(Customer $customer){
    $customer -> delete();
    return redirect('customers');
   }

   private function validateRequest(){
      return request()->validate([
        'name' => 'required|string|min:3',
        'age' => 'required|integer',
        'address' => 'nullable',
        'contactno' => ['required', 'integer'],
        'mailid' => 'required|email',
        'active' => 'required',
        'companyid' => 'required']); 
   }
  }
?>