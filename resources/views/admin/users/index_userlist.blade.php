@extends('admin.layouts.master')



@section('head-tag')
    <title>داشبرد | لیست کاربران</title>
@endsection


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container mt-5">
                <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>id</th>
                      <th>نام</th>
                      <th>ایمیل</th>
                      <th>شماره موبایل</th>
                      <th>ادرس</th>
                      <th>تاریخ ثبت نام</th>
                      
                     
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                        
                    
                    <tr>
                      <td>{{  $user['id']  }}</td>
                      <td>{{  $user['name']  }}</td>
                      <td>{{  $user['email']  }}</td>
                      <td>{{  $user['mobile']  }}</td>
                      <td>{{  $user['address']  }}</td>
                   
                    
                  </tbody>
                </table>
                
              </div>
              @endforeach
@endsection