<x-admin.layout>
    <div class="page-body">

        {{-- main content --}}
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <form action="{{ route('admin.add-user') }}" method="POST" class="theme-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h5>Add Employee</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <x-admin.input class="" type="text" name="name" label="Employee name"
                                        key="required" />
                                    <x-admin.input class="" type="text" name="mobile" label="Mobile"
                                        key="required" />
                                </div>
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
