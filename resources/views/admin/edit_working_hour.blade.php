<x-admin.layout>
    <div class="page-body">

        {{-- main content --}}
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('admin.update-working_hour') }}" method="POST" class="theme-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h5>Edit Employee</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="employee">Select Employee</label>
                                        <select required class="form-select digits form-control" id="user_id"
                                            name="user_id">
                                            <option selected disabled value="">--Select Employee--
                                            </option>
                                            @foreach ($users as $user)
                                                <option @selected($working_hour->user_id == $user->id) value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="project">Select Project</label>
                                        <select required class="form-select digits form-control" id="project_id"
                                            name="project_id">
                                            <option selected disabled value="">--Select Project--
                                            </option>
                                            @foreach ($projects as $project)
                                                <option @selected($working_hour->project_id == $project->id) value="{{ $project->id }}">
                                                    {{ $project->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="category">Select Category</label>
                                        <select required class="form-select digits form-control" id="category_id"
                                            name="category_id">
                                            <option selected disabled value="">--Select Category--
                                            </option>
                                            @foreach ($categories as $category)
                                                <option @selected($working_hour->category_id == $category->id) value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <x-admin.input class="" type="date" name="date" label="Date"
                                        key="required" value="{{ $working_hour->date }}" />
                                </div>
                                <div class="col-md-12">
                                    <x-admin.input class="" type="text" name="hour" label="Working Hour"
                                        key="required" value="{{ $working_hour->hour }}" />
                                </div>
                                <div class="col-md-12">
                                    <x-admin.input class="" type="text" name="remark" label="Remark"
                                        key="required" value="{{ $working_hour->remark }}" />
                                </div>
                                <input type="hidden" name="id" value="{{ $working_hour->id }}" id="">
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
