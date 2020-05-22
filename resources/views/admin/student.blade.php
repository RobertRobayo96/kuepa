@section('page_styles')

<link href="{{ asset('assets/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<div class="col-md-2">
    <input type="text" name="search" value="{{ request('last_name') }}" class="form-control" placeholder="Search ">
</div>
<div class="col-md-2">
                            <button class="btn btn-success">Filter</button>
                        </div>
<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">

            <thead class="thead-dark"   >
                <th scope="col">Last Name </th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email Address </th>
    
                <th scope="col">Interested Program </th>
                <th scope="col">Date Contact </th>
                <th scope="col"> Contacted </th>
                <th scope="col"> By </th>
                <th scope="col"> Date of Contact </th>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                         <td>{{$student->last_name}}</td>
                        <td>{{ $student->name   }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->email }}</td> 
                        <td>{{ $student->program }}</td>  
                        <td>{{ $student->date_contact  }}</td> 
                        <?php if ($student->contacted == 1):?>
                        <td>YES</td>  
                        <?php else:?>
                        <td>NO</td>
                        <?php endif; ?>
                        <td>{{ $student->contacted_by  }}</td> 
                        <td>{{ $student->contacted_date  }}</td> 
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                <th>Last Name </th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email Address </th>
                </tr>
            </tfoot>
</table>