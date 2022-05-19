@extends('layout.master')
@section('content')
    <div style="margin-left:105px">
        <input class=" form-control me-2" type="search" placeholder="搜尋案件編號、員工姓名....." aria-label="Search" style="width: 240px">
        <hr style="width: 250px ; border:1px solid">
        <div class="row">
            <div class="col">案件</div>
            <div class="col">
                <button type="button" class="btn btn-outline-secondary" style="width: 250px">+</button>
            </div>
        </div>
        <hr style="width: 250px ; border:1px solid">
        <table class="table" style="width: 240px">
            <thead>
            <tr>
                <th scope="col">員工姓名</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">A001</th>
            </tr>
            <tr>
                <th scope="row">A002</th>
            </tr>
            </tbody>
        </table>
    </div>

