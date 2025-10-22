<x-layout> 
     <div class=" bg-gray-50 w-[60%] m-auto">
    <form class="p-8 space-y-8 " >
            <div class="flex flex-col items-center space-y-6">
              <div class="relative w-40 h-40 rounded-full overflow-hidden border-4 border-white shadow-lg">
                <img
                  src=""
                  alt="Profile"
                  class="w-full h-full object-cover"
                />
                <input
                  type="file"
                  accept="image/*"
                  id="profile_image"
                  class="hidden"

                />
                <label
                  htmlFor="profile_image"
                  class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity cursor-pointer"
                >
                  <span class="text-white text-sm font-medium">Change</span>
                </label>
              </div>
               
          <div class="w-full">
            <label class=" text-[#222e53] font-semibold mb-2">
            Nom <span class="text-red-500">*</span>
          </label>
          <input
            type="text"
            placeholder="Nom "
            class="w-full px-4 py-2 rounded-md border focus:outline-none focus:ring-2 focus:ring-[#222e53]"
          />
          </div>
        
            <button
              type="submit"
              class="w-full bg-blue-500 text-white px-5 py-3 rounded-md font-semibold hover:bg-blue-70"
            >
              Add employee
            </button>
          </form>
        </div>
</x-layout>