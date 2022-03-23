<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Geolocation
        </h2>
    </x-slot>

    <div>
        <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('netsales.store') }}" method="post" id="frm">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="year" class="block font-medium text-sm text-gray-700">Year</label>
                            <div class="mt-1">
                                <select class="form-input rounded-md shadow-sm mt-1 block w-full" name="year" id="year" value="{{ old('year', '') }}">
                                    <option selected>Select one</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                    <option>2029</option>
                                    <option>2030</option>
                                </select>
                            </div>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="value" class="block font-medium text-sm text-gray-700">Value</label>
                            <input type="text" name="value" id="value" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('value', '') }}" require/>
                            @error('value')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
 
                    </div>

                    <!-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6"> -->
                    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Submit
                        </button>
                    </div>

                    <!-- <input type="submit" class="btn btn-primary"> -->
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    $("#frm").submit(function(event){
         var valDDL = $("#year").val();
         if(valDDL=="Select one"){
             event.preventDefault();
             alert("Select Year");
         }
         
         var valDDL = $("#value").val();
         if(valDDL==""){
             event.preventDefault();
             alert("Input Value");
         }
    });
</script>