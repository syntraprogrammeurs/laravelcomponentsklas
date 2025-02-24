<x-backend-layout>
    <x-slot name="title">Users</x-slot>
    <div class="px-4 sm:px-6 lg:px-8">
        @if(session('success'))
            <x-ui.alert type="danger" message="Gebruiker is succesvol verwijderd!" dismissible="true" autoDismiss="true" dismissTime="5000" />
        @endif

        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 border border-gray-300 rounded">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Id</th>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Updated</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Deleted</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @if($users)
                            @foreach($users as $user)
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{$user->id}}</td>
                                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                        <div class="flex items-center">
                                            <div class="size-11 shrink-0">
                                                <img class="size-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">{{$user->name}}</div>
                                                <div class="mt-1 text-gray-500">{{$user->email}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        @foreach($user->roles as $role)
                                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{$user->is_active == 1 ? 'Active':'Not Active'}}</span>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{$user->created_at->diffForHumans()}}</td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{$user->updated_at->diffForHumans()}}</td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{$user->deleted_at ? $user->deleted_at->diffForHumans() : '' }}</td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                <span class="sr-only">Edit, {{$user->name}}</span></a>
                                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="inline-block mb-0"
                                                  onsubmit="return confirm('Weet je zeker dat je {{ $user->name }} wilt verwijderen?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                    <span class="sr-only">Delete, {{ $user->name }}</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</x-backend-layout>
