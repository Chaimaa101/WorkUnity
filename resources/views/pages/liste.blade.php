 <x-layout> 

    <div class="bg-white rounded-xl shadow-sm border border-gray-100">
              <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Gestion des Utilisateurs</h3>
                  <button class="bg-[#eda3a4] text-gray-600 px-4 py-2 rounded-lg hover:bg-[#ce6a6c] transition-colors">
                    + Nouvel Utilisateur
                  </button>
                </div>
              </div>
              <div class="overflow-x-auto">
                <table class="w-full">
                  <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom Complet</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Inscription</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    @foreach ($employees as $employee)
                      <tr key={user.id} class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="w-10 h-10  rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                             <img src="{{ asset('storage/images/logo.png') }}" alt="" srcset="">
                            </div>
                            <div>
                              <div class="text-sm font-medium text-gray-900"></div>

                            </div>
                          </div>
                        </td>
                       
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$employee->firstName ." ". $employee->lastName}}
                        </td>       
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$employee->email}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{$employee->timestamps}}
K
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                          <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900"></button>
                            <button class="text-red-600 hover:text-red-900">Supprimer</button>
                          </div>
                        </td>
                      </tr>
                @endforeach
                  </tbody>
                </table>
            </div>
            </div>

  </x-layout> 