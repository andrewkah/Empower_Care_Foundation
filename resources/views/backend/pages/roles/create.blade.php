@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Roles" currentPage="Roles"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">
                                    Add Roles
                                </h4>
                                <x-form has-files :action="route('roles.store')" method="POST">
                                    <div class="form-group">
                                        <x-input.label for="name">Name</x-input.label>
                                        <x-input.text type="text"
                                            class="form-control @error('name') error-message @enderror" id="name"
                                            :value="old('name')" name="name" placeholder="Name" required />
                                        @error('name')
                                            <x-input.error id="name"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="all" id="chk-all" value="all"
                                            class="filled-in chk-col-green">
                                        <label for="chk-all">All Permissions</label>
                                    </div>
                                    @foreach ($permission_categories as $parent_key => $category)
                                        <div class="form-group">
                                            <x-input.label for="permissions">{{ $category->name }}</x-input.label>
                                            @foreach ($category->permissions as $key => $permission)
                                                <div class="col-md-4">
                                                    <input type="checkbox" name="permissions[]"
                                                        id="{{ $parent_key . $key }}" value="{{ $permission->id }}"
                                                        class="filled-in chk-box chk-col-green"
                                                        {{ in_array($permission->id, old('permissions', [])) ? 'checked' : '' }}>
                                                    <label
                                                        for="{{ $parent_key . $key }}">{{ $permission->description }}</label>
                                                </div>
                                            @endforeach
                                            @error('permissions')
                                                <x-input.error id="permissions"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                        </div>
                                    @endforeach

                                    <div class="d-flex justify-content-end mr-0 mt-4">
                                        <x-admin.submit type="submit" color="primary">Submit</x-admin.submit>
                                    </div>
                                </x-form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('chk-all').addEventListener('change', function() {
                if (this.checked) {
                    document.querySelectorAll('.chk-box').forEach(function(item) {
                        item.checked = true;
                    });
                } else {
                    document.querySelectorAll('.chk-box').forEach(function(item) {
                        item.checked = false;
                    });
                }
            });
        });
    </script>
@endsection
