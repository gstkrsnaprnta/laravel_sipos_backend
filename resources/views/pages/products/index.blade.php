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
                    @foreach ($products as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                                <div class="card-body text-center">
                                    @if ($product->image)
                                        <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid img-thumbnail mb-3" style="height: 150px; object-fit: cover;">
                                    @else
                                        <div class="badge badge-danger">No Image</div>
                                    @endif
                                    <p class="mt-2"><strong>Category:</strong> {{ $product->category }}</p>
                                    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                                    <p><strong>Created At:</strong> 
                                        @if ($product->created_at)
                                            {{ \Carbon\Carbon::parse($product->created_at)->format('d M Y') }}
                                        @else
                                            N/A
                                        @endif
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger confirm-delete">
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
