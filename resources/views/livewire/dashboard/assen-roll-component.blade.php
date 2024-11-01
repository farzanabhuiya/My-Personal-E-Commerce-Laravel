<div>

<a href="" class="btn btn-primary">Back</a>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-black text-center">
                        <h3>Assign Roles to: {{ $user->name }}</h3>
                    </div>





                    <div class="card-body">

                        <h6>All Ready In Rolls</h6>

                        @forelse ($user->roles as $role)
                            <div class="form-check form-switch ml-2">

                                <input id="flexSwitchCheckDefault" wire:model='signRolls' class="form-check-input" type="checkbox"
                                    value="{{ $role->id }}" {{ in_array($role->id, $signRolls) ? 'checked' : '' }}>


                                <label class="form-check-label">{{ $role->name }}</label>


                            </div>










                        @empty

                            <h1>No Rolls Found</h1>
                        @endforelse







                        
                        <div class="mb-3">
                            <label for="roleSelect" class="form-label">Choose to Display Role Options:</label>
                            <select id="roleSelect" class="form-select" onchange="toggleCheckboxes()">
                                <option value="">Select Option</option>
                                <option value="show">Show Roles</option>
                            </select>

                            @error('Rolls')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="roleCheckboxes" style="display:none;" wire:ignore>


                            

                



                            @forelse ($roles as $rols)
                                <div class="form-check form-switch">
                                    <input id="flexSwitchCheckDefault" wire:model.lazy='Rolls' class="form-check-input " type="checkbox"
                                        value="{{ $rols->id }}"   >
                                    <label class="form-check-label">{{ $rols->name }}</label>



                                </div>

                            @empty

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="admin">
                                    <label class="form-check-label">Admin</label>


                                </div>
                            @endforelse





                        </div>

                       
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success" wire:click='ässenRoll'>Assign
                                Roles</button>
                        </div>




                        

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script>
    function toggleCheckboxes() {
        var roleSelect = document.getElementById('roleSelect');
        var checkboxes = document.getElementById('roleCheckboxes');
        if (roleSelect.value === 'show') {
            checkboxes.style.display = 'block';
        } else {
            checkboxes.style.display = 'none';
        }
    }
</script>
