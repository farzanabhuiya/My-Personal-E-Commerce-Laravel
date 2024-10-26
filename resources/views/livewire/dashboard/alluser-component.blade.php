<div>
    <div class="container">
        <h3 class="mb-4 text-center">User Information Table</h3>

        <div class="d-flex justify-content-between mb-3">
            <input wire:model.live='searchTerm' type="text" class="form-control w-25" placeholder="Search by Name">
            <label for="search-name" class="form-label">show Total User:</label>
            <input wire:model.live='showTotalUser' type="number" class="form-control w-25" placeholder="show user">


        </div>


        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Image</th>
                    <th scope="col">Role</th>
                    <th scope="col">Banned Status</th>
                </tr>
            </thead>
            <tbody>





                @forelse ($users as $key => $user)
                    <tr class="hover-effect">
                        <td>{{ $users->firstItem() + $key }}</td>
                        <td>
                            <a href="{{ route('dashboard.assenroll', $user->id) }}" class="text-dark">{{ $user->name }}</a>
                        </td>
                        <td>
                            <a href="{{ route('dashboard.assenroll', $user->id) }}">
                                <img src="{{ $user->profile_photo_url ?? 'https://via.placeholder.com/50' }}"
                                    alt="User Image" class="rounded-circle" width="30px">
                            </a>
                        </td>
                        <td>
                            @forelse ($user->roles as $role)
                                {{ $role->name }}@if (!$loop->last)
                                    ,
                                @endif
                            @empty
                                No Role
                            @endforelse
                        </td>
                        <td>No</td> <!-- Banned status -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">User Not Found</td>
                    </tr>
                @endforelse
            </tbody>


        </table>
        {{ $users->links() }}
    </div>

















</div>


