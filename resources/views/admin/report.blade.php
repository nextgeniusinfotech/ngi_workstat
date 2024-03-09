<x-admin.layout>
    <div class="page-body">

        {{-- main content --}}
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('admin.report') }}" method="GET" class="theme-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h5>Report</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-admin.input class="" type="date" name="from_date" label="From Date"
                                            />
                                    </div>
                                    <div class="col-md-6">
                                        <x-admin.input class="" type="date" name="to_date" label="To Date"
                                            />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="project">Select Project</label>
                                            <select required class="form-select digits form-control" id="project_id"
                                                name="project_id">
                                                <option selected disabled value="">--Select Project--
                                                </option>
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="employee">Select Employee</label>
                                            <select required class="form-select digits form-control" id="user_id"
                                                name="user_id">
                                                <option selected disabled value="">--Select Employee--
                                                </option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if ($reports)
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Total Working Hour</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $loop->iteration }}</th>
                                    <td>{{ $report->category->name }}</td>
                                    <td>{{ $report->total_work_hours }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

</x-admin.layout>
