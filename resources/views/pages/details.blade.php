<x-layout>
    <div class="max-w-3xl mx-auto ">
        <div class="bg-rose-50 rounded-2xl shadow-lg">

            <div class="flex flex-col items-center p-6 ">
                @if ($employee->image)
                    <img src="{{asset('storage/'.$employee->image)}}" alt="mqhf"
                  
                        class="w-32 h-32 rounded-full border-1 border-gray-100 shadow">
                @else
                    <img src="{{ asset('/storage/profiles/default.jpeg') }}" alt="mqhf"
                        class="w-32 h-32 rounded-full border-1 border-gray-100 shadow">
                @endif
                <img src="{{ $employee->image }}" alt="">
                <h1 class="mt-4 text-2xl font-bold text-gray-800">{{ $employee->firstName }} {{ $employee->lastName }}
                </h1>
                <p class="text-sm text-gray-500 font-semibold">{{ $employee->job }}</p>
            </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-10 text-sm justify-items-center ">


                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="text-gray-700 font-semibold">{{ $employee->email }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-phone"></i>
                    <span class="text-gray-700 font-semibold">{{ $employee->phoneNumber }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="text-gray-700 font-semibold">{{ $employee->birthDate }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <span class="text-gray-700 font-semibold">${{ number_format($employee->salary, 2) }}</span>
                </div>

            </div>

        <div class="bg-gray-50 px-6 py-4 flex justify-center gap-3 text-sm">
            <a href="{{ route('employees.edit', $employee) }}"
                class="px-4 py-2 rounded-lg bg-sky-600 text-white hover:bg-sky-700">Edit</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST"
                onsubmit="return confirm('Delete this employee ?')">
                @csrf @method('DELETE')
                <button type="submit"
                    class="px-4 py-2 rounded-lg bg-rose-600 text-white hover:bg-rose-700">Delete</button>
            </form>
        </div>
    </div>
    </div>

</x-layout>
