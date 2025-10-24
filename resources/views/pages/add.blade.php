<x-layout>
    <div class="bg-gray-50 w-2/5 sm:w-3xl mx-auto">
        {{-- enctype is REQUIRED for file uploads --}}
        <form class="p-8 space-y-6" action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col items-center">
                <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-white shadow-lg">

                    <img id="preview" src="{{ asset('storage/profiles/default.jpeg') }}" alt="Profile"
                        class="w-full h-full object-cover">

                    <input type="file" name="image" id="image" accept="image/*" class="hidden">
                    <label for="image"
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity cursor-pointer">
                        <span class="text-white text-sm font-medium">Change</span>
                    </label>
                </div>
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="text-rose-900 font-semibold">Nom <span class="text-red-500">*</span></label>
                    <input type="text" name="firstName" value="{{ old('firstName') }}"
                        class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900">
                    @error('firstName')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-rose-900 font-semibold">Prénom <span class="text-red-500">*</span></label>
                    <input type="text" name="lastName" value="{{ old('lastName') }}"
                        class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900">
                    @error('lastName')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="w-full">
                <label class=" text-rose-900 font-semibold mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900" />
                @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full">
                <label class=" text-rose-900 font-semibold mb-2">
                    Date de naissance <span class="text-red-500">*</span>
                </label>
                <input type="date" name="birthDate" value="{{ old('') }}"
                    class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900" />
                @error('birthDate')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="w-full">
                    <label class=" text-rose-900 font-semibold mb-2">
                        Téléphone <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="phoneNumber" value="{{ old('phoneNumber') }}"
                        class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900" />
                    @error('phoneNumber')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <label class=" text-rose-900 font-semibold mb-2">
                        Salaire <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="salary" value="{{ old('salary') }}"
                        class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900" />
                    @error('salary')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="w-full">
                <label class=" text-rose-900 font-semibold mb-2">
                    Poste <span class="text-red-500">*</span>
                </label>
                <input type="text" name="job" value="{{ old('job') }}"
                    class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-rose-900" />
                @error('job')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>


            <button class="w-full bg-rose-900 text-white px-5 py-3 rounded-md font-semibold hover:bg-rose-800">
                Ajouter employé
            </button>
        </form>
    </div>

</x-layout>
