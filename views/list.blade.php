<table>
    <thead>
        <tr>
            <th> Patient ID</th>
            <th> NHS number</th>
            <th> Phone number </th>
            <th> First name </th>
            <th> Last name </th>
            <th> DOB </th>
        </tr>
    </thead>
 <tbody>

    @foreach($patients as $patient)
        <tr>
            <td> {{$patient->id}} </td>
            <td> {{$patient->nhs_number }} </td>
            <td> {{$patient->phone }} </td>
            <td> {{$patient->f_name}} </td>
            <td> {{$patient->l_name}} </td>
            <td> {{$patient->dob}} </td>

 </tr>
 @endforeach
 </tbody>
</table>