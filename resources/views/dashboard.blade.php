<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" mb-2 text-gray-900 text-[13px] font-bold">
                {{ __("Sales stats") }}
            </div>
            <div class=" flex  items-center gap-4 ">
                <div class=" p-3 bg-white overflow-hidden w-[400px] h-[60px] shadow-sm sm:rounded-lg">
                    <div class=" text-gray-400 text-[10px]">
                        {{ __("Sales") }}
                    </div>
                    <div class=" text-gray-900 text-[15px]">
                        0
                    </div>
                </div>
                <div class="p-3 bg-white overflow-hidden w-[400px] h-[60px] shadow-sm sm:rounded-lg">
                    <div class=" text-gray-400 text-[10px]">
                        {{ __("Sales Volume") }}
                    </div>
                    <div class=" text-gray-900 text-[15px]">
                       $ 0.00
                    </div>
                </div>
            </div>
            <div class=" mt-10 text-gray-900 text-[10px] font-bold">
                {{ __("All Sales") }}
            </div>
            <div class=" mt-5 text-gray-500 text-[10px]">
                {{ __("No sales, yet") }}
            </div>
        </div>
    </div>
</x-app-layout>
