@extends('templates.print')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Instrument</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Instrument</th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>Misty Abbott</td>
            <td>Bass Guitar</td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>John Smith</td>
            <td>Rhythm Guitar</td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Robert Mikels</td>
            <td>Lead Guitar</td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Karyn Holmberg</td>
            <td>Drums</td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </td>
            <td class="is-icon">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>

@stop