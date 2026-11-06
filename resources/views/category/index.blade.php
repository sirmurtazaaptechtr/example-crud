@extends('layout.master')

@section('title')
    Category
@endsection

@section('main')

<main id="main" class="main">

        <div class="pagetitle">
            <h1>All Categories</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Categories</h5>                           

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">CategoryID</th>
                                        <th scope="col">CategoryName</th>
                                        <th scope="col">Description</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->CategoryID }}</th>
                                        <td>{{ $category->CategoryName }}</td>                                        
                                        <td>{{ $category->Description }}</td>                                                                                                                 
                                    </tr>                                        
                                    @empty
                                    <tr>
                                        <th scope="row" colspan="7"><strong>No records found</strong></th>
                                    </tr>
                                    @endforelse
                                    
                                    
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
    
@endsection