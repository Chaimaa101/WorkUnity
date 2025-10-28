<x-layout>
 @if (session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded-md mb-4">
        {{ session('success') }}
    </div>
@endif
    <div class="bg-white rounded-xl shadow-sm border border-gray-100">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800">Gestion des employees</h3>
                <a href="{{ route('employees.create') }}"
                    class="bg-rose-100 text-rose-900 px-4 py-2 rounded-lg hover:bg-rose-400 transition-colors">
                    <i class="fas fa-add"></i> Nouvel Employee
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poste</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date
                            Inscription</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($employees as $employee)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                        @if ($employee->image)
                                            <img src="{{ asset('/storage/'.$employee->image) }}" alt="photo"
                                                class="w-10 h-10 rounded-full object-cover">
                                        @else
                                            <img src="{{ asset('/storage/profiles/default.jpeg') }}" alt="default"
                                                class="w-10 h-10 rounded-full object-cover">
                                        @endif
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900"></div>

                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $employee->firstName . ' ' . $employee->lastName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $employee->job }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $employee->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $employee->created_at }}
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('employees.show', $employee) }}"
                                        class="text-purple-600 hover:text-purple-900"><i
                                            class="fa-solid fa-address-card"></i></a>
                                    <a href="{{ route('employees.edit', $employee) }}"
                                        class="text-blue-600 hover:text-blue-900"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('employees.destroy', $employee) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 hover:text-red-900"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="m-3">
                {{ $employees->links() }}
            </div>
        </div>
    </div>

</x-layout>
