@extends('layout.app')

@section('title')
History
@endsection


@section('content')
                      @include('sweetalert::alert')

        <table class="w-full">
            <thead class="bg-primary-500 dark:bg-primary-500">
                <tr>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                        Order Date
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                        Tracking Number
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                        Total Price
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                        Status
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
              
             @foreach ($orders as $item)

                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
        
                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ date('d-m-y',strtotime($item->created_at))}}
                    </td>
                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{$item->Tracking_id}}
                    </td>
                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{$item->Total_price}}
                    </td>
                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{$item->status}}
                    </td>
                    <td class="p-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <a href="{{route('adminOrderDetails',[$item->id])}}" class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">View</a>
                    </td>
                </tr>
            @endforeach  
            </tbody>
        </table>
        
@endsection
