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
        <form action="{{ route('categories.insert') }}" method="post"> 
            @csrf                                
        <div class="flex-auto p-0 md:p-4">  
            <div class="mb-2">
                <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                <input type="title" id="title" name="name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Enter Category Name" required>
                @if ($errors->has('name'))
                <span style="color:red"> {{ $errors->first('name') }} </span>
        @endif
            </div>
            

            
                
                <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Add Category</button>
                {{-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> --}}
            </div>
        </div><!--end card-body--> 
    </div><!--end card-->                                  
</form>
</div><!--end col-->  


@endsection

