@extends ('phonebook.layout')

@section ('content')
<table border="2">
    <thead>
        <tr>
            <th colspan="4">Tim's Phonebook</th>
        </tr>
        <tr>
            <th colspan="4"><input type="text" id="search" placeholder="Search Contact..."></th>
        </tr>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Contact Number</td>
            <td>Options</td>
        </tr>
    </thead>
    <tbody id="dynamic">
        @foreach($records as $records)
        <tr>
            <td><input type='text' id='fname{{$records->id}}' class='tfield' value='{{$records->firstname}}' readonly></td>
            <td><input type='text' id='lname{{$records->id}}' class='tfield' value='{{$records->lastname}}' readonly></td>
            <td><input type='text' id='cnum{{$records->id}}' class='nfield' value='{{$records->contact_number}}' readonly></td>
            <td>
                <input type='button' id='edit{{$records->id}}' value='edit' onclick='editBtn({{$records->id}})'>
                <input type='button' id='delete{{$records->id}}' value='delete' onclick='deleteBtn({{$records->id}})'>
            </td>
        </tr>
        @endforeach
        <tr>
            <td><input class="tfield" id="fname" type="text" placeholder="Type First name here"></td>
            <td><input class="tfield" id="lname" type="text" placeholder="Type Last name here"></td>
            <td><input class="nfield" id="cnum" type="text" placeholder="Type Number here"></td>
            <td><input id="add" type="button" value="Save Contact"></td>
        </tr>
    </tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="{{asset('js/phonebook.js')}}"></script>
@endsection

<!-- this will print the variable string -->
{{--<p>{{ $post->firstname }}</p>--}}
<!-- this will print html -->
{{--<p>{!!$post!!}</p>--}} <!-- blade comment -->