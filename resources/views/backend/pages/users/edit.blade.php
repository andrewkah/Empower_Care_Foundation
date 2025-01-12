@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Users" currentPage="Users"></x-admin.header>
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
                                    
                                        Edit User
                                   
                                </h4>
                                <x-form has-files :action="route('users.update', $user->id)" method="PUT">
                                    <div class="form-group">
                                        <x-input.label for="name">Name</x-input.label>
                                        <x-input.text type="text" class="form-control" id="name" :value="old('name', $user) "
                                            name="name" placeholder="Name" required />
                                        @error('name')
                                            <x-input.error id="name"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="role">
                                            <option selected disabled>Role</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" @if (old('role', $user->roles->first()->id) == $role->id) selected @endif>
                                                {{ $role->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('role')
                                            <span class="col-red" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="email">Email Address</x-input.label>
                                        <x-input.text type="text" class="form-control" id="email" :value="old('email', $user)"
                                            name="email" placeholder="Email Address" required />
                                        @error('email')
                                            <x-input.error id="email"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="password">Password</x-input.label>
                                        <div class="input-group password-group">
                                            <x-input.text type="password" class="form-control" id="password"
                                                :value="isset($user) ? $user->password : ''" name="password" placeholder="Password" required />
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="fa fa-eye" id="toggle-password"></i>
                                                </span>
                                            </div>
                                        </div>

                                        @error('password')
                                            <x-input.error id="password"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>

                                    <script>
                                        const passwordInput = document.getElementById('password');
                                        const togglePassword = document.getElementById('toggle-password');

                                        togglePassword.addEventListener('click', e => {
                                            if (passwordInput.type === 'password') {
                                                passwordInput.type = 'text';
                                                togglePassword.classList.remove('fa-eye');
                                                togglePassword.classList.add('fa-eye-slash');
                                            } else {
                                                passwordInput.type = 'password';
                                                togglePassword.classList.remove('fa-eye-slash');
                                                togglePassword.classList.add('fa-eye');
                                            }
                                        });
                                    </script>

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
@endsection
