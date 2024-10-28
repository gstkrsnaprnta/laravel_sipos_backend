@extends('layouts.app')

@section('title', 'Products')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product Dashboard</h1>
                <div class="section-header-button">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach ($products as $index => $product)
                        @if ($index % 6 == 0 && $index > 0) 
                            <!-- Close the previous row after 6 items (4 + 2) -->
                            </div><div class="row mt-4">
                        @endif

                        @if ($index < 4 || ($index >= 6 && $index < 10)) 
                            <div class="col-3"> <!-- For the first 4 and next 4 products -->
                        @elseif ($index == 4 || $index == 5) 
                            <div class="col-6"> <!-- For the next 2 products -->
                        @else 
                            <div class="col-12"> <!-- For the last product -->
                        @endif
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Category: {{ $product->category }}</p>
                                    <p class="card-text">Price: {{ $product->price }}</p>
                                    <div class="mb-2">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/products/'.$product->image) }}" alt=""
                                                 width="100px" class="img-thumbnail">
                                        @else
                                            <span class="badge badge-danger">No Image</span>
                                        @endif
                                    </div>
                                    <p class="card-text">Created At: {{ $product->created_at }}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href='{{ route('product.edit', $product->id) }}'
                                           class="btn btn-sm btn-info btn-icon">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="ml-2">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                <i class="fas fa-times"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="float-right">
                    {{ $products->withQueryString()->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- No JS required for this page -->
@endpush
