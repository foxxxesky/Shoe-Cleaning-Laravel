@extends('layouts.mainadmin')

@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h4 id="profile-title" class="pb-2">Admin Profile</h4>
                <hr style="color: #504a4a; height: 2px;">
                <table>
                    <tbody>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nama</td>
                            <td id="table-right">{{ auth()->user()->first_name .' ' .auth()->user()->last_name }}</td>
                        </tr>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Email</td>
                            <td id="table-right">{{ auth()->user()->email }}</td>
                        </tr>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nomor HP</td>
                            <td id="table-right">{{ auth()->user()->no_hp }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr style="color: #504a4a; height: 2px;">
            </div>
        </div>
    </div>
</section>
@endsection