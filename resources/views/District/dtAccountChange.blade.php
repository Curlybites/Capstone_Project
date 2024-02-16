@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.district_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid flex-grow-1 container-p-y">
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account /</span> Profile
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ '/District/District_Account' }}><i
                                                class="bx
                                            bx-user me-1"></i>
                                            Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active d-flex align-items-center justify-content-center"
                                            href={{ '/District/District_Change_Account' }}>
                                            <i class='bx bx-lock-alt'></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header">Change Password</h5>
                                    <!-- Account -->
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert"> {{ session('success') }}
                                            </div>
                                            {{-- <div class="toast fade show bs-toast align-items-center position-fixed bottom-0 end-0 m-3 bg-success"
                                                role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="d-flex">
                                                    <div class="toast-body"> {{ session('success') }} </div> <button
                                                        type="button" class="btn-close me-2 m-auto"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                            </div> --}}
                                        @endif

                                        <form action="{{ route('changePass') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 form-password-toggle">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label" for="currentPassword">Current
                                                            Password</label>
                                                    </div>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="currentPassword" class="form-control"
                                                            name="currentPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                            aria-describedby="password"
                                                            value="{{ old('currentPassword') }}" required />
                                                        <span class="input-group-text cursor-pointer"><i
                                                                class="bx bx-hide"></i></span>
                                                    </div>
                                                    @if (session('error'))
                                                        <div class="text-danger">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-3 form-password-toggle">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label" for="newPassword">New
                                                            Password</label>
                                                    </div>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="newPassword" class="form-control"
                                                            name="newPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                            aria-describedby="password" value="{{ old('newPassword') }}"
                                                            required />
                                                        <span class="input-group-text cursor-pointer"><i
                                                                class="bx bx-hide"></i></span>
                                                    </div>
                                                    @if ($errors->has('newPassword'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('newPassword') }}</span>
                                                    @endif

                                                    @if ($errors->has('confirmNewPassword'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('confirmNewPassword') }}</span>
                                                    @endif
                                                </div>

                                                <div class="mb-3 form-password-toggle">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label" for="confirmNewPassword">Confirm
                                                            New
                                                            Password</label>
                                                    </div>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="confirmNewPassword"
                                                            class="form-control" name="confirmNewPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                            aria-describedby="password"
                                                            value="{{ old('confirmNewPassword') }}" required />
                                                        <span class="input-group-text cursor-pointer"><i
                                                                class="bx bx-hide"></i></span>
                                                    </div>
                                                    @if ($errors->has('confirmNewPassword'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('confirmNewPassword') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Change
                                                    Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <button onclick="showAlert()">Click me</button> --}}

                    </div>
                    <!-- / Content -->

                    <!--footer-->

                    @include('components.footer')
                    {{-- <script>
                        function showAlert() {
                            Swal.fire({
                                title: 'Hello!',
                                text: 'This is a SweetAlert dialog.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        }
                    </script> --}}
