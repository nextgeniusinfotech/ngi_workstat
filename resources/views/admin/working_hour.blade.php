<x-admin.layout>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Working Hour</h3>
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
                                    <form action="{{ route('admin.working_hours') }}" method="GET">
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
                                        <a href="{{ route('admin.working_hours') }}"
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
                            <a href="{{ route('admin.create-working_hour') }}" class="btn btn-primary" type="button">Add
                                Working Hour</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table responsive">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Employee Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Hours</th>
                                        <th scope="col">Remark</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($working_hours as $working_hour)
                                        <tr>
                                            <td>{{ $loop->iteration }}</th>
                                            <td>{{ $working_hour->project->name }}</td>
                                            <td>{{ $working_hour->user->name }}</td>
                                            <td>{{ $working_hour->category->name }}</td>
                                            <td>{{ $working_hour->date }}</td>
                                            <td>{{ $working_hour->hour }}</td>
                                            <td>{{ $working_hour->remark }}</td>
                                            <td class="text-center d-flex">
                                                <button
                                                    onclick="window.location='{{ route('admin.edit-working_hour', $working_hour->id) }}'"
                                                    class="btn btn-outline-primary btn-sm me-4" type="button"
                                                    title="">Edit</button>
                                                <form action="{{ route('admin.delete-working_hour', $working_hour->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                                        onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $working_hours->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
</x-admin.layout>
