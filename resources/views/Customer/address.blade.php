@extends('Customer.layout.app')

@section('title')
Index
@endsection

@section('contant')

<div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
        <form action="{{ url('addressupload')}}" method="POST">
            @csrf
            <span id="message"></span>
        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
            <h4 class="font-medium">Delivery Address</h4>
        </div><!--end header-title-->
@foreach ($address as $add)
    
<div class="flex-auto p-4">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name<small class="text-red-600 text-sm">*</small></label>
                <input name="Fisrt_name" value="{{$add->First_Name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="First name" type="text">
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name<small class="text-red-600 text-sm">*</small></label>
                <input name="Last_Name" value="{{$add->Last_Name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Last name" type="text">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Delivery Address<small class="text-red-600 text-sm">*</small></label>
                <input name="Delivery_Address" value="{{$add->Delivery_address}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Address" type="text">
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Address</label>
                <input name="Address" value="{{$add->Address}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Address" type="text">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="City" class="font-medium text-sm text-slate-600 dark:text-slate-400">City<small class="text-red-600 text-sm">*</small></label>
                <select id="City" name="City" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    @if ($add!=NULL)
                    <option name="City" class="dark:text-slate-700" selected>{{$add->City}}</option>
                    <option name="City" value="Surat" class="dark:text-slate-700">Surat</option>
                    <option name="City" value="New York"  class="dark:text-slate-700">New York</option>
                    @else
                    <option name="City"  class="dark:text-slate-700">-- select --</option>
                    <option name="City" value="Surat" class="dark:text-slate-700">Surat</option>
                    <option name="City" value="New York"  class="dark:text-slate-700">New York</option>
                    @endif
                    
                </select> 
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="State" class="font-medium text-sm text-slate-600 dark:text-slate-400">State<small class="text-red-600 text-sm">*</small></label>
                <select id="State" name="state" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    @if ($add!=NULL)
                      <option name="state" class="dark:text-slate-700" selected>{{$add->State}}</option>
                      <option name="state" value="Gujarat"  class="dark:text-slate-700">Gujarat</option>
                     <option name="state" value="California" class="dark:text-slate-700">California</option>
                     @else
                    <option name="state"  class="dark:text-slate-700">-- select --</option>
                    <option name="state" value="Gujarat"  class="dark:text-slate-700">Gujarat</option>
                    <option name="state" value="California" class="dark:text-slate-700">California</option>
                    @endif
                </select> 
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="Country" class="font-medium text-sm text-slate-600 dark:text-slate-400">Country<small class="text-red-600 text-sm">*</small></label>
                <select id="Country" name="Country" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    @if ($add!=NULL)
                    <option name="Country" class="dark:text-slate-700" selected>{{$add->Country}}</option>
                    <option name="Country" value="india"  class="dark:text-slate-700">India</option>
                    <option name="Country" value="USA" class="dark:text-slate-700">USA</option>
                    @else
                    <option  class="dark:text-slate-700">-- select --</option>
                    <option name="Country" value="india"  class="dark:text-slate-700">India</option>
                    <option name="Country" value="USA" class="dark:text-slate-700">USA</option>
                    @endif
                </select>                                                        
            </div>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="Zip_code" class="font-medium text-sm text-slate-600 dark:text-slate-400">Zip code<small class="text-red-600 text-sm">*</small></label>
                <input name="Zip_Code" value="{{$add->Zip_Code}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="------" type="text">
            </div>
        </div>
        
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="Mobile_No" class="font-medium text-sm text-slate-600 dark:text-slate-400">Mobile No<small class="text-red-600 text-sm">*</small></label>
                <input name="Phone_Number" value="{{$add->Phone_Number}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Mobile no" type="text">
            </div>
        </div>
    </div>
    @endforeach
    <div class="mt-3">
        <button type="submit" class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Save</button>
        {{-- <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancle</button> --}}
    </div>
{{-- </form> --}}
</div><!--end card-body-->
</div> <!--end card-->

@endsection
