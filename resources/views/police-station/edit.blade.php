<x-app-layout>

    {{-- PoliceStation Page Header --}}
    <x-slot name="header">

        {{ __('PoliceStation') }}

    </x-slot>

    {{-- PoliceStation Page Sub Header --}}
    <x-slot name="sub_header">
        Here you can manage the policestations for Offices and Employees
    </x-slot>

    {{-- PoliceStation Page Content --}}
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

           <form name="policestation-form" action="{{ route('policestation.update', $policestation->id) }}" method="POST">
               @csrf
               @method('PUT')

               <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="name"><b>Police Station Name :</b></label><br>
                        <input type="text" id="name" name="name" required class="mr-2 border-indigo-400" value="{{ $policestation->name }}"/><br><br>
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="code"><b>Code :</b></label><br>
                        <input type="text" id="code" name="code" required class="mr-2 border-indigo-400" value="{{ $policestation->code }}"/><br><br>
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <h2><b>District :</b></h2>
                        <select id="district_id" name="district_id" class="form control input-sm" required>

                        <option value="">Please select district...</option>
                        @foreach ($districts as $district)                         
                            <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach

                        </select>
                    </div>
                    
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                            <button type="submit" class="bg-blue-300 p-2 shadow-lg rounded-md">Add</button>
                            </div>
                    </div>
                </div>
           </form>
        </div>
    </div>

</x-app-layout>