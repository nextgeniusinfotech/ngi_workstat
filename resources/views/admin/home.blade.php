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
        <!-- Container-fluid starts-->
        <div class="container-fluid general-widget">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                                <div class="media-body"><span class="m-0">Projects</span>
                                    <h4 class="mb-0 counter">{{ $project_count }}</h4><i class="icon-bg"
                                        data-feather="shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                            <div class="media-body"><span class="m-0">Employee</span>
                                <h4 class="mb-0 counter">{{$user_count}}</h4><i class="icon-bg" data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
</x-admin.layout>
