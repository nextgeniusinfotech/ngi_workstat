<x-admin.layout>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- main content --}}
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('admin.update-password') }}" method="POST" class="theme-form">
                            @csrf
                            <div class="card-header pb-0">
                                <h5>Change Password</h5>
                            </div>
                            <div class="card-body">
                                <x-admin.input class="" type="name" name="old_password" label="Old Password" />
                                <x-admin.input class="" type="password" name="password" label="New Password" />
                                <x-admin.input class="" type="password" name="password_confirmation"
                                    label="Confirm Password" />
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin.layout>
