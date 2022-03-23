<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Geolocation
        </h2>
    </x-slot>

    <div>
        <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('geolocations.store') }}" method="post" id="frm">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" require/>
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', '') }}" require/>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="state" class="block font-medium text-sm text-gray-700">State</label>
                            <input type="text" name="state" id="state" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('state', '') }}" require/>
                            @error('state')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="district" class="block font-medium text-sm text-gray-700">District</label>
                            <input type="text" name="district" id="district" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('district', '') }}" require/>
                            @error('district')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="type" class="block font-medium text-sm text-gray-700">Type</label>
                                <div class="mt-1">
                                    <select class="form-input rounded-md shadow-sm mt-1 block w-full" name="type" id="type" value="{{ old('type', '') }}">
                                        <option selected>Select one</option>
                                        <option>Sales Office</option>
                                        <option>Workstation of Sales Organization</option>
                                        <option>CODY Branches</option>
                                        <option>HP Roadshows</option>
                                        <option>Morning Learning Point</option>
                                    </select>
                                </div>
                            </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="address" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('address', '') }}" require/>
                            @error('address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lat" class="block font-medium text-sm text-gray-700">Latitude</label>
                            <input type="text" name="lat" id="lat" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('lat', '') }}" />
                            @error('lat')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lng" class="block font-medium text-sm text-gray-700">Longitude</label>
                            <input type="text" name="lng" id="lng" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('lng', '') }}" />
                            @error('lng')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div id="map" style="height:400px; width: 100%;"></div>

                        <script>
                            let map, service, infowindow;
                            function initMap() {
                                const framemotion = new google.maps.LatLng(3.0782496, 101.6117);

                                infowindow = new google.maps.InfoWindow();
                                map = new google.maps.Map(document.getElementById("map"), {
                                    center: framemotion,
                                    zoom: 15,
                                    scrollwheel: true,
                                });

                                const request = {
                                    query: "Wisma TT, Jalan PJS 8/15, Sunway City, 46150 Petaling Jaya, Selangor, Malaysia",
                                    fields: ["name", "geometry"],
                                };

                                service = new google.maps.places.PlacesService(map);
                                service.findPlaceFromQuery(request, (results, status) => {
                                    if (status === google.maps.places.PlacesServiceStatus.OK && results) {
                                    // for (let i = 0; i < results.length; i++) {
                                    //     createMarker(results[i]);
                                    // }

                                    map.setCenter(results[0].geometry.location);
                                    }
                                });

                                let marker = new google.maps.Marker({
                                    position: framemotion,
                                    map: map,
                                    draggable: true
                                });

                                google.maps.event.addListener(marker,'position_changed',function (){
                                        let lat = marker.position.lat()
                                        let lng = marker.position.lng()
                                        $('#lat').val(lat)
                                        $('#lng').val(lng)
                                });
                                google.maps.event.addListener(map,'click',function (event){
                                    pos = event.latLng
                                    marker.setPosition(pos)
                                });
                            }

                            function createMarker(place) {
                                if (!place.geometry || !place.geometry.location) return;

                                const marker = new google.maps.Marker({
                                    map,
                                    position: place.geometry.location,
                                });

                                google.maps.event.addListener(marker, "click", () => {
                                    infowindow.setContent(place.name || "");
                                    infowindow.open(map);
                                });
                            }
                        </script>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&libraries=places" type="text/javascript"></script>
                        <script   src="https://code.jquery.com/jquery-3.6.0.slim.min.js"   integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
                    </div>

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
         var valDDL = $("#type").val();
         if(valDDL=="Select one"){
             event.preventDefault();
             alert("Select Operation Type");
         } 
    });
</script>