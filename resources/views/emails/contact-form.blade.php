@component('mail::message')

<table class="table-info">
    <tr>
        <td class="td-title"><strong>Name:</strong></td>
        <td class="td-info"><p>{{$data['name']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Email:</strong></td>
        <td class="td-info"><p>{{$data['email']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Contact Number:</strong></td>
        <td class="td-info"><p>{{$data['contactFull']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Country:</strong></td>
        <td class="td-info"><p>{{$data['countryName']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Company:</strong></td>
        <td class="td-info"><p>{{$data['company']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Address:</strong></td>
        <td class="td-info"><p>{{$data['address']}}</p></td>
    </tr>
    <tr>
        <td class="td-title"><strong>Product of Interest:</strong></td>
        <td class="td-info">
            @if(isset($data['prodInterest']))
            <ul>
            @foreach ($data['prodInterest'] as $prod)
                <li>{{$prod}}</li>
            @endforeach
            </ul>
            @else
            <p>N/A</p>
            @endif
        </td>
    </tr>
    <tr>
        <td class="td-title"><strong>Message:</strong></td>
        <td class="td-info"><p>{{$data['message']}}</p></td>
    </tr>
</table>


@endcomponent
