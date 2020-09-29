@extends('admins.template.master')
@section('title' , 'Courses subscription')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Registered Users in this courses</h3>
                        @if(!isset($attendsLink))
                            <form action="#">
                                <button id="btnAttend" value="{{$id}}" class="btn btn-outline-primary mb-2"><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                    إصدار رابط الحضور
                                </button>
                            </form>
                        @endif
                        @isset($attendsLink)
                            <div class="form-group">
                                <input type="text" class="form-control"
                                       value="{{'http://localhost/DSC-UQU-SITE/public/attend-courses/'.$attendsLink->hash}}">
                            </div>
                        @endisset
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscription as $sub)
                                    <tr>
                                        <td>{{$sub->name}}</td>
                                        <td>
                                            @if(\App\Models\Certificate::where('users_id' , $sub->id)->first())
                                                {!! 'Yes' !!}
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('delete-course')}}" method="POST"
                                                  class="d-inline-block">
                                                @csrf
                                                <input type="hidden" value="{{$sub->pivot->courses_id}}" name="course">
                                                <input type="hidden" value="{{$sub->pivot->users_id}}" name="user">
                                                <button onclick="return confirm('Are You Sure')"
                                                        class="btn btn-sm btn-danger btn-outline-danger">Delete
                                                </button>
                                            </form>
                                            @if(!(\App\Models\Certificate::where('users_id' , $sub->id)->first()))
                                                <form action="{{route('confirm-attend')}}" method="POST"
                                                      class="d-inline-block">
                                                    @csrf
                                                    <input type="hidden" value="{{$sub->pivot->courses_id}}"
                                                           name="courseID">
                                                    <input type="hidden" value="{{$sub->pivot->users_id}}"
                                                           name="userID">
                                                    <button class="btn btn-sm btn-outline-info">
                                                        اصدار الشهادة
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>
@endsection
@section('script')
    <script>
        $('#btnAttend').on('click', function () {
            let btnVal = $(this).val();
            $.ajax({
                url: '{{route('create-link-attend')}}',
                method: 'POST',
                data: {
                    'courseID': btnVal,
                    '_token': '{{csrf_token()}}'
                }, success: function (e) {
                    if (e == 200) {
                        location.reload();
                    }
                }
            })
        });
    </script>
@endsection
