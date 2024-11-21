@extends('layout.app')

@section('title')
 Category Add
@endsection

@section('MainTitle')
 Student Managment
@endsection

@section('content')


{{-- <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6"> --}}
    <div class="w-full relative mb-4">  
        <form action="{{ route('product.bulk') }}" method="post" enctype="multipart/form-data"> 
            @csrf                                
        <div class="flex-auto p-0 md:p-4">  
            <div class="mb-2">
                <label for="file" class="font-medium text-sm text-slate-600 dark:text-slate-400">product</label>
                <input type="file" id="file" name="file" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  required>
                @if ($errors->has('file'))
                <span style="color:red"> {{ $errors->first('file') }} </span>
        @endif
            </div>
           
            <div class="">
                
                <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Upload</button>
                {{-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> --}}
            </div>
        </div><!--end card-body--> 
    </div><!--end card-->                                  
</form>
</div><!--end col-->  


@endsection

