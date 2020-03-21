<button type="button" class="btn btn-primary text-left" style="margin: 20px" data-toggle="modal" data-target="#editProfile"
        style="font-size: 18px; color: #F5B041" type="button" data-toggle="tooltip"
        data-placement="top" title="edit profile">Edit profile</button>
<button type="button" class="btn btn-primary text-right" style="margin: 20px"  data-target="#changePassword" data-toggle="modal" type="button" data-toggle="tooltip" data-placement="top" title="change Password">change password</button>

<!-- Modal edit Profile -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update.doctor',['doctor_id' => $doctor->id])}}" method="post">
                @method('PUT')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tbody style="color: black">
                        <tr>
                            <th>Name</th>
                            <td>
                                <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                                       placeholder="Enter Name" value="{{$user->name}}">
                            </td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td><input type="email" class="form-control" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}"></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><input type="text" class="form-control" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Enter email" value="{{$doctor->phone_number}}"></td>
                        </tr>
                        <tr>
                            <th>Work at</th>
                            <td><input type="text" class="form-control" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Enter email" value="{{$doctor->work_at}}"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
