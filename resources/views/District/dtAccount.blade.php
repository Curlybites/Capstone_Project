@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.district_sidebar');

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
                                        <a class="nav-link active" href="#"><i
                                                class="bx
                                            bx-user me-1"></i>
                                            Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center justify-content-center"
                                            href={{ '/District/District_Change_Account' }}>
                                            <i class='bx bx-lock-alt'></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header">Profile Details</h5>
                                    <!-- Account -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="../assets/img/avatars/1.png" alt="user-avatar"
                                                class="d-block rounded" height="100" width="100"
                                                id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" class="account-file-input"
                                                        hidden accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>

                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="mb-3 col-md-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input class="form-control" type="text" id="firstName"
                                                            name="firstName" value="{{ $user->firstname }}" disabled />
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input class="form-control" type="text" name="lastName"
                                                            id="lastName" value="{{ $user->lastname }}" disabled />
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input class="form-control" type="text" name="middleName"
                                                            id="middleName" value="{{ $user->middlename }}" disabled />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="text" id="email"
                                                        name="email" value="{{ $user->email }}" disabled />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="contact" class="form-label">Contact</label>
                                                    <input type="text" class="form-control" id="contact"
                                                        name="contact" value="{{ $user->contact }}" disabled />
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" value="{{ $user->address }}" disabled />
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="sex" class="form-label">Sex</label>
                                                        <input class="form-control" type="text" id="sex"
                                                            name="sex" value="{{ $user->sex }}" disabled />
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="birthdate" class="form-label">Birthdate</label>
                                                        <input class="form-control" type="text" id="birthdate"
                                                            name="birthdate" value="{{ $user->birthdate }}"
                                                            disabled />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="role" class="form-label">Role</label>
                                                    <input type="text" class="form-control" id="role"
                                                        name="role"
                                                        value="@switch($user->role)
                                                        @case(1)
                                                            Admin
                                                        @break
            
                                                        @case(2)
                                                            Program Manager
                                                        @break
            
                                                        @case(3)
                                                            Health Department Staff
                                                        @break
            
                                                        @case(4)
                                                            District Staff
                                                        @break
            
                                                        @case(5)
                                                            Brgy. Health Center Staff
                                                        @break
            
                                                        @default
                                                    @endswitch"
                                                        disabled />
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Save
                                                    changes</button>
                                                <button type="reset"
                                                    class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>
                                {{-- <div class="card">
                                    <h5 class="card-header">Delete Account</h5>
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete
                                                    your account?</h6>
                                                <p class="mb-0">Once you delete your account, there is no going back.
                                                    Please be certain.</p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" onsubmit="return false">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox"
                                                    name="accountActivation" id="accountActivation" />
                                                <label class="form-check-label" for="accountActivation">I confirm my
                                                    account deactivation</label>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-danger deactivate-account">Deactivate Account</button>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->


                    <!--footer-->

                    @include('components.footer')
