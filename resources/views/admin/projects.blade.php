<x-admin.layout>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Projects</h3>
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
                                    <form action="{{ route('admin.projects') }}" method="GET">
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
                                        <a href="{{ route('admin.projects') }}"
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
                            <a href="{{ route('admin.create-project') }}" class="btn btn-primary" type="button">Add
                                Project</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($projects as $project)
                                        <tr>
                                            <td>{{ $loop->iteration }}</th>
                                            <td>{{ $project->name }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.delete-project', $project->id) }}"
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
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
</x-admin.layout>
