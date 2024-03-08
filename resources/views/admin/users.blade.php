<x-admin.layout>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Employees</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid search-page">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-4">
                        <form class="search-form">
                            <div class="form-group mb-0">
                                <div class="row">
                                    <form action="{{ route('admin.users') }}" method="GET">
                                        <div class="col-md-4">
                                            <div class="input-group"><span class="input-group-text"><i
                                                        class="icon-search"></i></span>
                                                <input class="form-control-plaintext" type="text" name="search"
                                                    value="" placeholder="Search...">
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-1">
                                            <button type="submit" class="btn btn-pill btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    <div class="col-md-2 mt-1">
                                        <a href="{{ route('admin.users') }}"
                                            class="btn btn-pill btn-secondary">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="m-3">
                            <a href="{{ route('admin.create-user') }}" class="btn btn-primary" type="button">Add
                                Employee</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->mobile }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
</x-admin.layout>
